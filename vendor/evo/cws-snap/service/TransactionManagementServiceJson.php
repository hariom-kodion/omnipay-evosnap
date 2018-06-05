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

use Datacontract\I2004\I07\Ipc\Luna\Servicefactory\Endpoints\Tms\Queuerequests\QueryTransactionFamiliesRequest;
use Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsDetail;
use Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsSummary;
use Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsFamilies;
/**
 * Transaction Processing Service JSON implementation.
 *
 * @author Antonio Molinero <antonio.molinero@evopayments.com>
 */
class TransactionManagementServiceJson extends BaseHttpService
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
     * Method that queries for family details.
     *
     * @param string $sessionToken
     *            the session token.
     * @param QueryTransactionsParameters $queryTransactionsParameters
     *            the query parameters.
     * @param PagingParameters $pagingParameters
     *            paging parameters.
     * @return mixed the list of family details that accomplish with the indicated parameters.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function queryTransactionFamilies($sessionToken, $queryTransactionsParameters, $pagingParameters)
    {
        $requestUrl = $this->getUrl('/transactionsFamily');
        
        $queryTransactionFamilies = new QueryTransactionsFamilies();
        $queryTransactionFamilies->QueryTransactionsParameters = $queryTransactionsParameters;
        $queryTransactionFamilies->PagingParameters = $pagingParameters;
        
        $body = json_encode($queryTransactionFamilies);
        $response = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($response);
    }

    /**
     * Method that queries for transaction details.
     *
     * @param string $sessionToken
     *            the session token.
     * @param QueryTransactionsParameters $queryTransactionsParameters
     *            the query parameters.
     * @param string $transactionDetailFormat
     *            the transaction detail format.
     * @param PagingParameters $pagingParameters
     *            paging parameters.
     * @param boolean $includeRelated
     *            flag indicating if related transactions should be included.
     * @return mixed the list of transaction details that accomplish with the indicated parameters.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function queryTransactionsDetail($sessionToken, $queryTransactionsParameters, $transactionDetailFormat, $pagingParameters, $includeRelated)
    {
        $requestUrl = $this->getUrl('/transactionsDetail');
        
        $queryTransactionsDetail = new QueryTransactionsDetail();
        $queryTransactionsDetail->QueryTransactionsParameters = $queryTransactionsParameters;
        $queryTransactionsDetail->TransactionDetailFormat = $transactionDetailFormat;
        $queryTransactionsDetail->PagingParameters = $pagingParameters;
        $queryTransactionsDetail->IncludeRelated = $includeRelated;
        
        $body = json_encode($queryTransactionsDetail);
        $response = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($response);
    }

    /**
     * Method that queries for summary details.
     *
     * @param string $sessionToken
     *            the session token.
     * @param QueryTransactionsParameters $queryTransactionsParameters
     *            the query parameters.
     * @param PagingParameters $pagingParameters
     *            paging parameters.
     * @param boolean $includeRelated
     *            flag indicating if related transactions should be included.
     * @return mixed the list of summary details that accomplish with the indicated parameters.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function queryTransactionsSummary($sessionToken, $queryTransactionsParameters, $pagingParameters, $includeRelated)
    {
        $requestUrl = $this->getUrl('/transactionsSummary');
        
        $queryTransactionsSummary = new QueryTransactionsSummary();
        $queryTransactionsSummary->QueryTransactionsParameters = $queryTransactionsParameters;
        $queryTransactionsSummary->PagingParameters = $pagingParameters;
        $queryTransactionsSummary->IncludeRelated = $includeRelated;
        
        $body = json_encode($queryTransactionsSummary);
        $response = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($response);
    }
}
