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

use Evosnap\Cws\V2\I0\Transactions\Rest\Undo;
use Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeAndCaptureTransaction;
use Evosnap\Cws\V2\I0\Transactions\Rest\Adjust;
use Evosnap\Cws\V2\I0\Transactions\Rest\Capture;
use Evosnap\Cws\V2\I0\Transactions\Rest\ResubmitTransaction;
use Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelective;
use Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAll;
use Evosnap\Cws\V2\I0\Transactions\Rest\ReturnById;
use Evosnap\Cws\V2\I0\Transactions\Rest\ReturnTransaction;
use Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction;
use Evosnap\Cws\V2\I0\Transactions\Rest\ManageAccount;
use Evosnap\Cws\V2\I0\Transactions\Rest\ReceiptRequest;

/**
 * Transaction Processing Service JSON implementation.
 *
 * @author Antonio Molinero <antonio.molinero@evopayments.com>
 */
class TransactionProcessingServiceJsonImpl extends BaseHttpService
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
     * Authorize a transaction.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function authorize($sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $authorizeTransaction = new AuthorizeTransaction();
        $authorizeTransaction->ApplicationProfileId = $applicationProfileId;
        $authorizeTransaction->MerchantProfileId = $merchantProfileId;
        $authorizeTransaction->Transaction = $transaction;
        
        $body = json_encode($authorizeTransaction);
        
        $result = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($result);
    }

    /**
     * Authorize and capture transaction.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function authorizeAndCapture($sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $authorizeTransaction = new AuthorizeAndCaptureTransaction();
        $authorizeTransaction->ApplicationProfileId = $applicationProfileId;
        $authorizeTransaction->MerchantProfileId = $merchantProfileId;
        $authorizeTransaction->Transaction = $transaction;
        
        $body = json_encode($authorizeTransaction);
        $result = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($result);
    }

    /**
     * ManageAccount
     *
     * @param string $sessionToken
     *            the session token.
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
    public function manageAccount($sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $manageAccount = new ManageAccount();
        $manageAccount->ApplicationProfileId = $applicationProfileId;
        $manageAccount->MerchantProfileId = $merchantProfileId;
        $manageAccount->Transaction = $transaction;
        
        $body = json_encode($manageAccount);
        $result = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($result);
    }

    /**
     * Adjusts a transaction.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function adjust($sessionToken, $adjust, $applicationProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId . '/' . $adjust->TransactionId);
        
        $adjustTransaction = new Adjust();
        $adjustTransaction->ApplicationProfileId = $applicationProfileId;
        $adjustTransaction->DifferenceData = $adjust;
        
        $body = json_encode($adjustTransaction);
        $result = $this->getHttpConnections()->sendPutRequest($requestUrl, $sessionToken, null, $body);
        return json_decode($result);
    }

    /**
     * Undos a transaction.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function undo($sessionToken, $undo, $applicationProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId . '/' . $undo->TransactionId);
        
        $undoTransaction = new Undo();
        $undoTransaction->ApplicationProfileId = $applicationProfileId;
        $undoTransaction->DifferenceData = $undo;
        
        $body = json_encode($undoTransaction);
        $result = $this->getHttpConnections()->sendPutRequest($requestUrl, $sessionToken, null, $body);
        return json_decode($result);
    }

    /**
     * Captures a transaction.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function capture($sessionToken, $capture, $applicationProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId . '/' . $capture->TransactionId);
        
        $captureTransaction = new Capture();
        $captureTransaction->ApplicationProfileId = $applicationProfileId;
        $captureTransaction->DifferenceData = $capture;
        
        $body = json_encode($captureTransaction);
        $result = $this->getHttpConnections()->sendPutRequest($requestUrl, $sessionToken, null, $body);
        return json_decode($result);
    }

    /**
     * Resubmits a transaction for 3D Secure.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function resubmit($sessionToken, $resubmit, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $resubmitTransaction = new ResubmitTransaction();
        $resubmitTransaction->ApplicationProfileId = $applicationProfileId;
        $resubmitTransaction->MerchantProfileId = $merchantProfileId;
        $resubmitTransaction->Transaction = $resubmit;
        
        $body = json_encode($resubmitTransaction);
        $result = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($result);
    }

    /**
     * Captures a list of transactions.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function captureSelective($sessionToken, $transactionIds, $differenceData, $applicationProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $captureSelective = new CaptureSelective();
        $captureSelective->ApplicationProfileId = $applicationProfileId;
        $captureSelective->DifferenceData = $differenceData;
        $captureSelective->TransactionIds = $transactionIds;
        
        $body = json_encode($captureSelective);
        $result = $this->getHttpConnections()->sendPutRequest($requestUrl, $sessionToken, null, $body);
        return json_decode($result);
    }

    /**
     * Captures all the transactions.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function captureAll($sessionToken, $batchIds, $differenceData, $forceClose, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $captureAll = new CaptureAll();
        $captureAll->ApplicationProfileId = $applicationProfileId;
        $captureAll->MerchantProfileId = $merchantProfileId;
        $captureAll->DifferenceData = $differenceData;
        $captureAll->BatchIds = $batchIds;
        $captureAll->ForceClose = $forceClose;
        
        $body = json_encode($captureAll);
        $result = $this->getHttpConnections()->sendPutRequest($requestUrl, $sessionToken, null, $body);
        return json_decode($result);
    }

    /**
     * Returns a transaction by ID.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function returnById($sessionToken, $differenceData, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $returnByIdTransaction = new ReturnById();
        $returnByIdTransaction->ApplicationProfileId = $applicationProfileId;
        $returnByIdTransaction->MerchantProfileId = $merchantProfileId;
        $returnByIdTransaction->DifferenceData = $differenceData;
        
        $body = json_encode($returnByIdTransaction);
        $result = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($result);
    }

    /**
     * Returns a transaction unlinked.
     *
     * @param string $sessionToken
     *            the session token.
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
    public function returnUnlinked($sessionToken, $transaction, $applicationProfileId, $merchantProfileId, $workflowId)
    {
        $requestUrl = $this->getUrl('/' . $workflowId);
        
        $returnTransaction = new ReturnTransaction();
        $returnTransaction->ApplicationProfileId = $applicationProfileId;
        $returnTransaction->MerchantProfileId = $merchantProfileId;
        $returnTransaction->Transaction = $transaction;
        
        $body = json_encode($returnTransaction);
        $result = $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
        return json_decode($result);
    }

    /**
     * Sends a receipt to a customer.
     * 
     * @param string $sessionToken
     *            the session token.
     * @param string $email
     *            customer's email.
     * @param string $transactionId
     *            transaction ID.
     * @throws CwsServiceException CWS Service Exception.
     * @throws CwsCommunicationException Communication exception.
     */
    public function sendReceipt($sessionToken, $email, $transactionId)
    {
        $requestUrl = $this->getUrl("/sendReceipt");
        
        $receiptRequest = new ReceiptRequest();
        $receiptRequest->Email = $email;
        $receiptRequest->TransactionId = $transactionId;
        
        $body = json_encode($receiptRequest);
        $this->getHttpConnections()->sendPostRequest($requestUrl, $sessionToken, $body);
    }
}
