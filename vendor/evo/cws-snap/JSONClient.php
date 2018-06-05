<?php

/**
 *  Copyright (c) 2013 EVO Payments International - All Rights Reserved.
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
namespace Evosnap\Cws;

use \Evosnap\Cws\Service\ServiceInformationServiceJson;
use \Evosnap\Cws\Service\TransactionManagementServiceJson;
use \Evosnap\Cws\Service\TransactionProcessingServiceJsonImpl;
use \Evosnap\Cws\V2\I0\Dataservices\Tms\QueryTransactionsParameters;

/**
 * JSON Client for CWS EVO Snap* API.
 *
 * @author Antonio Molinero <antonio.molinero@evopayments.com>
 */
class JSONClient
{

    private $identityToken;

    private $serviceKey;

    private $sessionTokenTime;

    private $sessionToken;

    private $serviceInformationService;

    private $transactionManagementService;

    private $transactionProcessingService;

    /**
     * Constructor.
     *
     * @param CwsClientConfig $clientConfig
     *            client configuration.
     * @param string $identityToken
     *            the Identity Token
     * @param string $serviceKey
     *            the service Key.
     * @param string $sessionToken
     *            the session token.
     * @param int $sessionTokenTime
     *            the session token time (UNIS time format).
     */
    public function __construct($clientConfig, $identityToken, $serviceKey = null, $sessionToken = null, $sessionTokenTime = -1)
    {
        if (empty($clientConfig)) {
            $clientConfig = new CwsClientConfig();
            
            $clientConfig->live = false;
            $clientConfig->proxy = false;
            $clientConfig->proxyHost = '127.0.0.1';
            $clientConfig->proxyPort = 8888;
            $clientConfig->trustAll = false;
        }
        $this->identityToken = $identityToken;
        $this->serviceKey = $serviceKey;
        $this->sessionToken = $sessionToken;
        $this->sessionTokenTime = $sessionTokenTime;
        $this->serviceInformationService = new ServiceInformationServiceJson($clientConfig->live ? CwsConstants::CWS_SIS_BASEURL : CwsConstants::CWS_UAT_SIS_BASEURL, $clientConfig);
        $this->transactionManagementService = new TransactionManagementServiceJson($clientConfig->live ? CwsConstants::CWS_TMS_BASEURL : CwsConstants::CWS_UAT_TMS_BASEURL, $clientConfig);
        $this->transactionProcessingService = new TransactionProcessingServiceJsonImpl($clientConfig->live ? CwsConstants::CWS_TPS_BASEURL : CwsConstants::CWS_UAT_TPS_BASEURL, $clientConfig);
    }

    /**
     * Retrieves the current session token.
     * 
     * @return string session token.
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * Retrieves the Unix timestamp when session token was requested.
     * 
     * @return int|number
     */
    public function getSessionTokenTime()
    {
        return $this->sessionTokenTime;
    }

    /**
     * Tests if the client is signed on.
     *
     * @return boolean <code>true</code> if the client is signed on, <code>false</code> otherwise.
     */
    public function isSignedOn()
    {
        return ! empty($this->sessionToken) && ((time() - $this->sessionTokenTime) <= CwsConstants::SESSION_TOKEN_TIME);
    }

    protected function openSession()
    {
        if (! $this->isSignedOn()) {
            $this->signOn();
        }
    }

    /**
     * Sign on and retrieve the session token.
     */
    public function signOn()
    {
        $this->sessionTokenTime = time();
        if (! empty($this->serviceKey)) {
            $this->sessionToken = $this->serviceInformationService->delegatedSignOn($this->identityToken, $this->serviceKey);
        } else {
            $this->sessionToken = $this->serviceInformationService->signOn($this->identityToken);
        }
    }

    /**
     * CwsServiceInformationClient section.
     */
    
    /**
     * Retrieves the service information for the current session.
     *
     * @return ServiceInformation the service information.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function getServiceInformation()
    {
        $this->openSession();
        return $this->serviceInformationService->getServiceInformation($this->sessionToken);
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
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function signOnWith($serviceKey, $username, $password)
    {
        $this->sessionTokenTime = time();
        $this->sessionToken = $this->serviceInformationService->signOnWithUserNamePassword($serviceKey, $username, $password);
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
        $this->serviceInformationService->changePassword($serviceKey, $username, $password, $newPassword);
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
        $this->serviceInformationService->changeUsername($serviceKey, $username, $password, $newUsername);
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
        $this->serviceInformationService->changeEmail($serviceKey, $username, $password, $newEmail);
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
        return $this->serviceInformationService->getPasswordExpiration(serviceKey, username, password);
    }

    /**
     * Retrieves application data.
     *
     * @param string $applicationProfileId
     *            the application profile ID.
     * @return ApplicationData the application data.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function getApplicationData($applicationProfileId)
    {
        $this->openSession();
        return $this->serviceInformationService->getApplicationData($this->sessionToken, applicationProfileId);
    }

    /**
     * Tests if a merchant profile is initialized on EVO Snap*.
     *
     * @param string $serviceId
     *            the service ID.
     * @param string $merchantProfileId
     *            the merchant profile ID.
     * @return boolean <code>true</code> if the merchant profile is initialized, <code>false</code> otherwise.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function isMerchantProfileInitialized($serviceId, $merchantProfileId)
    {
        $this->openSession();
        return $this->serviceInformationService->isMerchantProfileInitialized($this->sessionToken, $serviceId, $merchantProfileId);
    }

    /**
     * Retrieves a merchant profile from EVO Snap*.
     *
     * @param string $serviceId
     *            the service ID.
     * @param string $merchantProfileId
     *            the merchant profile ID.
     * @return MerchantProfile the merchant profile, <code>null</code> if the profile is not found.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function getMerchantProfile($serviceId, $merchantProfileId)
    {
        $this->openSession();
        return $this->serviceInformationService->getMerchantProfileById($this->sessionToken, serviceId, merchantProfileId);
    }

    /**
     * CwsTransactionProcessingClient section.
     */
    
    /**
     * Authorize a transaction.
     *
     * @param Transaction $transaction
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $merchantProfileId
     *            the merchant profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function authorize($transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->authorize($this->sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId);
    }

    /**
     * Adjusts a transaction.
     *
     * @param Adjust $adjust
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function adjust($adjust, $applicationProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->adjust($this->sessionToken, $adjust, $applicationProfileId, $workflowId);
    }

    /**
     * Captures a transaction.
     *
     * @param Capture $capture
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function capture($capture, $applicationProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->capture($this->sessionToken, $capture, $applicationProfileId, $workflowId);
    }

    /**
     * Captures a list of transactions.
     *
     * @param array $transactionIds
     *            the transaction IDs to capture.
     * @param array $differenceData
     *            the transaction differences.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return mixed transaction responses.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function captureSelective($transactionIds, $differenceData, $applicationProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->captureSelective($this->sessionToken, $transactionIds, $differenceData, $applicationProfileId, $workflowId);
    }

    /**
     * Captures all the transactions.
     *
     * @param array $batchIds
     *            the transaction IDs.
     * @param array $differenceData
     *            the transaction differences.
     * @param boolean $forceClose
     *            flag indicating to close the batches.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $merchantProfileId            
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return mixed transaction responses.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function captureAll($batchIds, $differenceData, $forceClose, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->captureAll($this->sessionToken, $batchIds, $differenceData, $forceClose, $applicationProfileId, $merchantProfileId, $workflowId);
    }

    /**
     * Resubmits a transaction for 3D Secure.
     *
     * @param Resubmit $resubmit
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $merchantProfileId
     *            merchant profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function resubmit($resubmit, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->resubmit($this->sessionToken, $resubmit, $applicationProfileId, $merchantProfileId, $workflowId);
    }

    /**
     * Authorize and capture transaction.
     *
     * @param Transaction $transaction
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $merchantProfileId
     *            the merchant profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function authorizeAndCapture($transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->authorizeAndCapture($this->sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId);
    }

    /**
     * ManageAccount
     *
     * @param Transaction $transaction
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $merchantProfileId
     *            the merchant profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function manageAccount($transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->manageAccount($this->sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId);
    }

    /**
     * Undos a transaction.
     *
     * @param Undo $undo
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function undo($undo, $applicationProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->undo($this->sessionToken, $undo, $applicationProfileId, $workflowId);
    }

    /**
     * Returns a transaction by ID.
     *
     * @param Return $differenceData
     *            the transaction to execute.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $merchantProfileId
     *            merchant profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function returnById($differenceData, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->returnById($this->sessionToken, $differenceData, $applicationProfileId, $merchantProfileId, $workflowId);
    }

    /**
     * Returns a transaction unlinked.
     *
     * @param Transaction $transaction
     *            the transaction to return.
     * @param string $applicationProfileId
     *            the application profile ID.
     * @param string $merchantProfileId
     *            merchant profile ID.
     * @param string $workflowId
     *            the workflow ID. If no workflow is going to be used,
     *            then the service ID should be provided.
     * @return Response transaction response.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function returnUnlinked($transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $this->openSession();
        return $this->transactionProcessingService->returnUnlinked($this->sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId);
    }

    /**
     * Sends a receipt to a customer.
     *
     * @param string $email
     *            customer's email.
     * @param string $transactionId
     *            transaction ID.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function sendReceipt($email, $transactionId)
    {
        $this->openSession();
        $this->transactionProcessingService->sendReceipt($this->sessionToken, $email, $transactionId);
    }

    /**
     * CwsTransactionManagementClient section.
     */
    
    /**
     * Method that queries for family details.
     *
     * @param QueryTransactionsParameters $queryTransactionsParameters
     *            the query parameters.
     * @param PagingParameters $pagingParameters
     *            paging parameters.
     * @return mixed the list of family details that accomplish with the indicated parameters.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function queryTransactionFamilies($queryTransactionsParameters, $pagingParameters)
    {
        $this->openSession();
        return $this->transactionManagementService->queryTransactionFamilies($this->sessionToken, $queryTransactionsParameters, $pagingParameters);
    }

    /**
     * Method that queries for transaction details.
     *
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
    public function queryTransactionsDetail($queryTransactionsParameters, $transactionDetailFormat, $pagingParameters, $includeRelated)
    {
        $this->openSession();
        return $this->transactionManagementService->queryTransactionsDetail($this->sessionToken, $queryTransactionsParameters, $transactionDetailFormat, $pagingParameters, $includeRelated);
    }

    /**
     * Method that queries for summary details.
     *
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
    public function queryTransactionsSummary($queryTransactionsParameters, $pagingParameters, $includeRelated)
    {
        $this->openSession();
        return $this->transactionManagementService->queryTransactionsSummary($this->sessionToken, $queryTransactionsParameters, $pagingParameters, $includeRelated);
    }
}