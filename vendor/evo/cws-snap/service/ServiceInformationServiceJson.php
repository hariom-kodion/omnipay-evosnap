<?php
/**
 * Copyright (c) 2015 EVO Payments International - All Rights Reserved.
 *
 * This software and documentation is subject to and made
 * available only pursuant to the terms of an executed license
 * agreement, and may be used only in accordance with the terms
 * of said agreement. This software may not, in whole or in part,
 * be copied, photocopied, reproduced, translated, or reduced to
 * any electronic medium or machine-readable form without
 * prior consent, in writing, from EVO Payments International, INC.
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
namespace Evosnap\Cws\Service;

/**
 * Service information service JSON implementation.
 *
 * @author Antonio Molinero <antonio.molinero@evopayments.com>
 */
class ServiceInformationServiceJson extends BaseHttpService
{

    /**
     * Constructor.
     *
     * @param string $baseUrl
     *            the base URL.
     * @param CwsClientConfig $clientConfig
     *            use proxy.
     */
    public function __construct($baseUrl, $clientConfig)
    {
        parent::__construct($baseUrl, $clientConfig);
    }

    /**
     * Signs on EVO Snap* using the identity token.
     *
     * @param string $identityToken
     *            the identity token.
     * @return string the session token.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function signOn($identityToken)
    {
        $requestUrl = $this->getUrl('/token');
        $result = $this->getHttpConnections()->sendGetRequest($requestUrl, $identityToken);
        return str_replace("\"", "", $result);
    }

    /**
     * Signs on EVO Snap* using a delegated identity token.
     *
     * @param string $identityToken
     *            the identity token.
     * @param string $serviceKey
     *            the service key to log into.
     * @return string the session token.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function delegatedSignOn($identityToken, $serviceKey)
    {
        $delegatedSignOn = new DelegatedSignOn();
        $delegatedSignOn->identityToken = $identityToken;
        $delegatedSignOn->onBehalfOfServiceKey = $serviceKey;
        $requestUrl = $this->getUrl('/delegated?servicekey=' . $serviceKey);
        $body = json_encode($delegatedSignOn);
        $result = $this->getHttpConnections()->sendPostRequest($requestUrl, $identityToken, $body);
        return str_replace("\"", "", $result);
    }

    /**
     * Signs on EVO Snap* using user name and password.
     *
     * @param string $serviceKey
     *            the service key.
     * @param string $username
     *            the user name.
     * @param string $password
     *            the password.
     * @return string the session token.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function signOnWithUserNamePassword($serviceKey, $username, $password)
    {
        $requestUrl = $this->getUrl('/user?servicekey=' . $serviceKey);
        $result = $this->getHttpConnections()->sendGetRequest($requestUrl, $username, $password);
        return str_replace("\"", "", $result);
    }

    /**
     * Changes the user name password.
     *
     * @param string $serviceKey
     *            the service key.
     * @param string $username
     *            the user name.
     * @param string $password
     *            the old password.
     * @param string $newPassword
     *            the new password.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function changePassword($serviceKey, $username, $password, $newPassword)
    {
        $requestUrl = getUrl('/user/' . $username . '?servicekey=' . $serviceKey);
        
        $userInfo = new UserInfo();
        $userInfo->Email = null;
        $userInfo->Password = $newPassword;
        $userInfo->UserName = $username;
        $body = json_encode($userInfo);
        
        $this->getHttpConnections()->sendPutRequest($requestUrl, $username, $password, $body);
    }

    /**
     * Changes the user name.
     *
     * @param string $serviceKey
     *            the service key.
     * @param string $username
     *            the user name.
     * @param string $password
     *            the password.
     * @param string $newUsername
     *            the new user name.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function changeUsername($serviceKey, $username, $password, $newUsername)
    {
        $requestUrl = $this->getUrl('/user/' . $username . '?servicekey=' . $serviceKey);
        
        $userInfo = new UserInfo();
        $userInfo->Email = null;
        $userInfo->Password = null;
        $userInfo->UserName = $username;
        $body = json_encode($userInfo);
        
        $this->getHttpConnections()->sendPutRequest($requestUrl, $username, $password, $body);
    }

    /**
     * Changes the user email.
     *
     * @param string $serviceKey
     *            the service key.
     * @param string $username
     *            the user name.
     * @param string $password
     *            the password.
     * @param string $newEmail
     *            the new email.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function changeEmail($serviceKey, $username, $password, $newEmail)
    {
        $requestUrl = $this->getUrl('/user/' . $username . '?servicekey' . $serviceKey);
        
        $userInfo = new UserInfo();
        $userInfo->Email = $newEmail;
        $userInfo->Password = null;
        $userInfo->UserName = $username;
        $body = json_encode($userInfo);
        
        $this->getHttpConnections()->sendPutRequest($requestUrl, $username, $password, $body);
    }

    /**
     * Retrieves password expiration for the indicated user.
     *
     * @param string $serviceKey
     *            the service key.
     * @param string $username
     *            the user name.
     * @param string $password
     *            the password.
     * @return string password expiration.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function getPasswordExpiration($serviceKey, $username, $password)
    {
        $requestUrl = $this->getUrl('/user/' . $username . '/expiration?servicekey=' . $serviceKey);
        $result = $this->getHttpConnections()->sendGetRequest($requestUrl, $username, $password);
        return str_replace("\"", "", $result);
    }

    /**
     * Retrieves the service information for the current session.
     *
     * @param string $sessionToken
     *            the session token.
     * @return ServiceInformation the service information.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function getServiceInformation($sessionToken)
    {
        $requestUrl = $this->getUrl('/serviceInformation');
        $response = $this->getHttpConnections()->sendGetRequest($requestUrl, $sessionToken);
        return json_decode($response);
    }

    /**
     * Retrieves application data.
     *
     * @param string $sessionToken
     *            the session token.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @return ApplicationData the application data.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function getApplicationData($sessionToken, $applicationProfileId)
    {
        $requestUrl = $this->getUrl('/appProfile/' . $applicationProfileId);
        $response = $this->getHttpConnections()->sendGetRequest($requestUrl, $sessionToken);
        return json_decode($response);
    }

    /**
     * Tests if a merchant profile is initialized on EVO Snap*.
     *
     * @param string $sessionToken
     *            the session token.
     * @param string $serviceId
     *            the service ID.
     * @param string $merchantProfileId
     *            the merchant profile ID.
     * @return boolean <code>true</code> if the merchant profile is initialized, <code>false</code> otherwise.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function isMerchantProfileInitialized($sessionToken, $serviceId, $merchantProfileId)
    {
        $requestUrl = $this->getUrl('/merchProfile/' . $merchantProfileId . '/OK?serviceId=' . $serviceId);
        return strtolower($this->getHttpConnections()->sendGetRequest($requestUrl, $sessionToken)) == 'true';
    }

    /**
     * Retrieves a merchant profile from EVO Snap*.
     *
     * @param string $sessionToken
     *            the session token.
     * @param string $serviceId
     *            the service ID.
     * @param string $merchantProfileId
     *            the merchant profile ID.
     * @return MerchantProfile the merchant profile, <code>null</code> if the profile is not found.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function getMerchantProfileById($sessionToken, $serviceId, $merchantProfileId)
    {
        $requestUrl = $this->getUrl('/merchProfile/' . $merchantProfileId . '?serviceId=' . $serviceId);
        $json = $this->getHttpConnections()->sendGetRequest($requestUrl, $sessionToken);
        return json_decode($json);
    }
}
