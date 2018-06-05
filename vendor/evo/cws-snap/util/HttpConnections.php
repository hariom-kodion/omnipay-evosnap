<?php

/**
 * Copyright (c) 2013 EVO Payments International - All Rights Reserved.
 *
 * This software and documentation is subject to and made
 * available only pursuant to the terms of an executed license
 * agreement, and may be used only in accordance with the terms
 * of said agreement. This software may not, in whole or in part,
 * be copied, photocopied, reproduced, translated, or reduced to
 * any electronic medium or machine-readable form without
 * prior consent, in writing, from EVO Payments International
 *
 * Use, duplication or disclosure by the U.S. Government is subject
 * to restrictions set forth in an executed license agreement
 * and in subparagraph (c)(1) of the Commercial Computer
 * Software-Restricted Rights Clause at FAR 52.227-19; subparagraph
 * (c)(1)(ii) of the Rights in Technical Data and Computer Software
 * clause at DFARS 252.227-7013, subparagraph (d) of the Commercial
 * Computer Software--Licensing clause at NASA FAR supplement
 * 16-52.227-86; or their equivalent.
 *
 * Information in this software is subject to change without notice
 * and does not represent a commitment on the part of EVO Payments International.
 *
 * Sample Code is for reference Only and is intended to be used for educational purposes. It's the responsibility of
 * the software company to properly integrate into thier solution code that best meets thier production needs.
 */
namespace Evosnap\Cws\Util;

use Evosnap\Ews\Exception\CwsServiceException;
use Evosnap\Cws\Exception\CwsCommunicationException;

/**
 * HTTP Connection manager.
 *
 * @author Antonio Molinero
 */
final class HttpConnections
{

    const HTTP_OK_CODE = 200;

    const TIMEOUT = 60;

    private $proxy;

    private $proxyHost;

    private $proxyPort;

    private $trustAll;

    /**
     * Constructor.
     *
     * @param boolean $proxy
     *            use proxy.
     * @param string $proxyHost
     *            proxy host.
     * @param int $proxyPort
     *            proxy port.
     * @param boolean $trustAll
     *            flag indicating whether SSL should be trusted.
     */
    public function __construct($proxy, $proxyHost, $proxyPort, $trustAll)
    {
        $this->proxy = $proxy;
        $this->proxyHost = $proxyHost;
        $this->proxyPort = $proxyPort;
        $this->trustAll = $trustAll;
    }

    /**
     * Sends a POST request to the indicated URL.
     *
     * @param
     *            string targetURL the URL to request.
     * @param
     *            string token the identity token.
     * @param
     *            string body the request body.
     * @return string the response body.
     */
    public function sendPostRequest($targetURL, $token, $body)
    {
        return $this->sendRequest('POST', $targetURL, $this->getEncodedToken($token), $body);
    }

    /**
     * Sends a PUT request to the indicated URL.
     *
     * @param
     *            string targetURL the URL to request.
     * @param
     *            string user the user name or token.
     * @param
     *            string password the password.
     * @param
     *            string body the request body.
     * @return string the response body.
     */
    public function sendPutRequest($targetURL, $user, $password, $body)
    {
        return $this->sendRequest('PUT', $targetURL, $this->getEncodedToken($user, $password), $body);
    }

    /**
     * Sends a GET request to the indicated URL.
     *
     * @param
     *            string targetURL the URL to request.
     * @param
     *            string user the user name or token.
     * @param
     *            string password the password.
     * @return string the response body.
     */
    public function sendGetRequest($targetURL, $user, $password = null)
    {
        return $this->sendRequest('GET', $targetURL, $this->getEncodedToken($user, $password), null);
    }

    /**
     * Sends a DELETE request to the indicated URL.
     *
     * @param
     *            string targetURL the URL to request.
     * @param
     *            string token the identity token.
     * @return string the response body.
     */
    public function sendDeleteRequest($targetURL, $token)
    {
        return $this->sendRequest('DELETE', $targetURL, $this->getEncodedToken($token), null);
    }

    private function buildCurlClient($url)
    {
        $cc = curl_init();
        
        curl_setopt($cc, CURLOPT_URL, $url);
        curl_setopt($cc, CURLOPT_RETURNTRANSFER, 1); // return variable
        curl_setopt($cc, CURLOPT_TIMEOUT, HttpConnections::TIMEOUT); // connection timeout
        curl_setopt($cc, CURLOPT_SSL_VERIFYPEER, ! $this->trustAll);
        curl_setopt($cc, CURLOPT_USERAGENT, 'EVO Snap API/1.0');
        
        if ($this->proxy) {
            $proxy_value = $this->proxyHost;
            if ($this->proxyPort) {
                $proxy_value .= ':' . $this->proxyPort;
            }
            curl_setopt($cc, CURLOPT_PROXY, $proxy_value);
        }
        
        curl_setopt($cc, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cc, CURLOPT_HEADER, 1);
        curl_setopt($cc, CURLOPT_FOLLOWLOCATION, 1);
        
        return $cc;
    }

    private function setHttpRequestHeaders($cc, $encodedToken, $host)
    {
        // Header setup
        $header[] = 'Authorization: Basic ' . $encodedToken;
        $header[] = 'Content-Type: application/json';
        // $header[] = 'Accept: '; // Known issue: defining this causes server to reply with no content.
        // $header[] = 'Expect: 100-continue';
        $header[] = 'Host: ' . $host;
        
        curl_setopt($cc, CURLOPT_HTTPHEADER, $header);
    }

    private function executeRequest($cc)
    {
        $response = curl_exec($cc); // Run the request
        $info = curl_getinfo($cc);
        
        $header_size = $info['header_size'];
        $response_header = substr($response, 0, $header_size);
        $response_body = substr($response, $header_size);
        
        if (floor((int) $info['http_code'] / HttpConnections::HTTP_OK_CODE) != 1) {
            $serviceException = new CwsServiceException();
            if ($response_body[0] == "{" || $response_body[0] == "\"" || $response_body[0] == "[") {
                $data = json_decode($response_body);
            }
            
            if (! empty($data)) {
                $serviceException->setData($data);
                throw $serviceException;
            }
            
            $comunicationException = new CwsCommunicationException();
            $comunicationException->setStatusCode($info['http_code']);
            $comunicationException->setResponse($response_body);
            
            throw $comunicationException;
        }
        
        return $response_body;
    }

    private function getEncodedToken($user, $password = '')
    {
        return base64_encode($user . ":" . $password);
    }

    /**
     * Sends a request to the indicated URL.
     *
     * @param
     *            string action the action type.
     * @param
     *            string targetURL the URL to request.
     * @param
     *            string token the identity token.
     * @param
     *            string body the request body.
     * @return string the response body.
     */
    private function sendRequest($action, $targetURL, $token, $body)
    {
        $result = null;
        $cc = $this->buildCurlClient($targetURL);
        
        // Parse the full api_url for required pieces.
        $strpos = strpos($targetURL, '/', 8); // 8 denotes look after https://
        $host = mb_substr($targetURL, 8, $strpos - 8);
        
        try {
            $this->setHttpRequestHeaders($cc, $token, $host);
            
            switch ($action) {
                case 'POST':
                    curl_setopt($cc, CURLOPT_POST, true);
                    curl_setopt($cc, CURLOPT_POSTFIELDS, $body);
                    break;
                case 'PUT':
                    curl_setopt($cc, CURLOPT_CUSTOMREQUEST, 'PUT');
                    curl_setopt($cc, CURLOPT_POSTFIELDS, $body);
                    break;
                case 'DELETE':
                    curl_setopt($cc, CURLOPT_CUSTOMREQUEST, 'DELETE');
                    curl_setopt($cc, CURLOPT_POSTFIELDS, $body);
                    break;
                default:
                    curl_setopt($cc, CURLOPT_HTTPGET, true);
            }
            
            $result = $this->executeRequest($cc);
        } catch (Exception $e) {
            throw new CwsCommunicationException($e);
        } finally {
            curl_close($cc);
        }
        
        return $result;
    }

    /**
     *
     * @return boolean the proxy
     */
    public function isProxy()
    {
        return $this->proxy;
    }

    /**
     *
     * @param
     *            boolean proxy
     *            the proxy to set
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    /**
     *
     * @return string the proxyHost
     */
    public function getProxyHost()
    {
        return $this->proxyHost;
    }

    /**
     *
     * @param
     *            string proxyHost the proxyHost to set
     */
    public function setProxyHost($proxyHost)
    {
        $this->proxyHost = $proxyHost;
    }

    /**
     *
     * @return int the proxyPort
     */
    public function getProxyPort()
    {
        return $this->proxyPort;
    }

    /**
     *
     * @param
     *            int proxyPort the proxyPort to set
     */
    public function setProxyPort($proxyPort)
    {
        $this->proxyPort = $proxyPort;
    }

    /**
     *
     * @return boolean the trustAll
     */
    public function isTrustAll()
    {
        return $this->trustAll;
    }

    /**
     *
     * @param
     *            boolean trustAll
     *            the trustAll to set
     */
    public function setTrustAll($trustAll)
    {
        $this->trustAll = $trustAll;
    }
}
