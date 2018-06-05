<?php
namespace Evosnap\Cws\Model;

if(!class_exists('\Evosnap\Cws\Model\BaseObject')){
    class BaseObject implements \JsonSerializable {

        public function __construct($type = null){
            if(!empty($type)){
                $this->{'$type'} = $type;
            }
        }

        public function jsonSerialize() {
            $array = (array)$this;
       		if(array_key_exists('$type', $array)){
                $oldArray = $array;
                $array = array('$type' => $oldArray['$type']);
                unset($oldArray['$type']);
                $array = array_merge($array, $oldArray);
            }

            return array_filter($array);
        }
    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Fault\TMSValidationError')){

    class TMSValidationError extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RuleMessage;

    	/**
    	* @var TMSValidationError_EErrorType
    	*/
    	public $ErrorType;

    	/**
    	* @var string
    	*/
    	public $RuleKey;

    	/**
    	* @var string
    	*/
    	public $RuleLocationKey;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault')){

    class TMSBaseFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $ErrorID;

    	/**
    	* @var string
    	*/
    	public $ProblemType;

    	/**
    	* @var string
    	*/
    	public $Operation;

    	/**
    	* @var string
    	*/
    	public $HelpURL;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsSummary')){

    class QueryTransactionsSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var boolean
    	*/
    	public $IncludeRelated;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querytransactionsparameters
    	*/
    	public $QueryTransactionsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryBatch')){

    class QueryBatch extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querybatchparameters
    	*/
    	public $QueryBatchParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsDetail')){

    class QueryTransactionsDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TransactionDetailFormat
    	*/
    	public $TransactionDetailFormat;

    	/**
    	* @var boolean
    	*/
    	public $IncludeRelated;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querytransactionsparameters
    	*/
    	public $QueryTransactionsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsFamilies')){

    class QueryTransactionsFamilies extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querytransactionsparameters
    	*/
    	public $QueryTransactionsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\DateRange')){

    class DateRange extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $StartDateTime;

    	/**
    	* @var dateTime
    	*/
    	public $EndDateTime;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\PagingParameters')){

    class PagingParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageSize;

    	/**
    	* @var int
    	*/
    	public $Page;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\DSBaseFault')){

    class DSBaseFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $ErrorID;

    	/**
    	* @var string
    	*/
    	public $ProblemType;

    	/**
    	* @var string
    	*/
    	public $Operation;

    	/**
    	* @var string
    	*/
    	public $HelpURL;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionDetailsResponse')){

    class TransactionDetailsResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactiondetail
    	*/
    	public $TransactionDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\FamilyDetail')){

    class FamilyDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $CustomerId;

    	/**
    	* @var decimal
    	*/
    	public $CapturedAmount;

    	/**
    	* @var decimal
    	*/
    	public $LastAuthorizedAmount;

    	/**
    	* @var string
    	*/
    	public $CurrencyCode;

    	/**
    	* @var TransactionState
    	*/
    	public $FamilyState;

    	/**
    	* @var dateTime
    	*/
    	public $CaptureDateTime;

    	/**
    	* @var guid
    	*/
    	public $FamilyId;

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactionmetadata
    	*/
    	public $TransactionMetaData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\StoredValueData')){

    class StoredValueData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CardRestrictionValue;

    	/**
    	* @var decimal
    	*/
    	public $NewBalance;

    	/**
    	* @var decimal
    	*/
    	public $PreviousBalance;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\QueryTransactionsParameters')){

    class QueryTransactionsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var BooleanParameter
    	*/
    	public $IsAcknowledged;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceIds;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ApprovalCodes;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayofreconciliationstate
    	*/
    	public $ReconciliationStates;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $OrderNumbers;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactionclasstypepair
    	*/
    	public $TransactionClassTypePairs;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapturestate
    	*/
    	public $CaptureStates;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $TransactionDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofdecimal
    	*/
    	public $Amounts;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $MerchantProfileIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoftypecardtype
    	*/
    	public $CardTypes;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayoftransactionstate
    	*/
    	public $TransactionStates;

    	/**
    	* @var QueryType
    	*/
    	public $QueryType;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceKeys;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CaptureDateRange;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\CWSTransaction')){

    class CWSTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\response
    	*/
    	public $Response;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactionmetadata
    	*/
    	public $MetaData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\applicationdata
    	*/
    	public $ApplicationData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofilemerchantdata
    	*/
    	public $MerchantProfileMerchantData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\QueryBatchParameters')){

    class QueryBatchParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $BatchDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $MerchantProfileIds;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceKeys;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\CompleteTransaction')){

    class CompleteTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SerializedTransaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\cwstransaction
    	*/
    	public $CWSTransaction;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\BatchDetailsResponse')){

    class BatchDetailsResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayofbatchdetaildata
    	*/
    	public $TransactionDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\ElectronicCheckData')){

    class ElectronicCheckData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MaskedAccountNumber;

    	/**
    	* @var TransactionType
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $CheckNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\BatchDetailData')){

    class BatchDetailData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CaptureState
    	*/
    	public $CaptureState;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var dateTime
    	*/
    	public $BatchCaptureDate;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarydata
    	*/
    	public $SummaryData;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\transactionsummarydata
    	*/
    	public $BatchSummaryData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionInformation')){

    class TransactionInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var BooleanParameter
    	*/
    	public $IsAcknowledged;

    	/**
    	* @var TransactionState
    	*/
    	public $TransactionState;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\storedvaluedata
    	*/
    	public $StoredValueData;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\electroniccheckdata
    	*/
    	public $ElectronicCheckData;

    	/**
    	* @var decimal
    	*/
    	public $CapturedAmount;

    	/**
    	* @var boolean
    	*/
    	public $ProcessedAs3DSecure;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    	/**
    	* @var string
    	*/
    	public $CurrencyCode;

    	/**
    	* @var CaptureState
    	*/
    	public $CaptureState;

    	/**
    	* @var ReconciliationState
    	*/
    	public $ReconciliationState;

    	/**
    	* @var string
    	*/
    	public $TransactionStatusCode;

    	/**
    	* @var dateTime
    	*/
    	public $CaptureDateTime;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $TipAmount;

    	/**
    	* @var Status
    	*/
    	public $Status;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactionclasstypepair
    	*/
    	public $TransactionClassTypePair;

    	/**
    	* @var string
    	*/
    	public $OriginatorTransactionId;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionTimestamp;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $Reference;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var string
    	*/
    	public $CustomerId;

    	/**
    	* @var string
    	*/
    	public $OriginalAmount;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\bankcarddata
    	*/
    	public $BankcardData;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    	/**
    	* @var decimal
    	*/
    	public $ReconciliationBalance;

    	/**
    	* @var string
    	*/
    	public $ServiceTransactionId;

    	/**
    	* @var string
    	*/
    	public $CaptureStatusMessage;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\FamilyInformation')){

    class FamilyInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TransactionState
    	*/
    	public $FamilyState;

    	/**
    	* @var int
    	*/
    	public $FamilySequenceNumber;

    	/**
    	* @var guid
    	*/
    	public $FamilyId;

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var int
    	*/
    	public $FamilySequenceCount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\SummaryDetail')){

    class SummaryDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactioninformation
    	*/
    	public $TransactionInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\familyinformation
    	*/
    	public $FamilyInformation;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionMetaData')){

    class TransactionMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactionclasstypepair
    	*/
    	public $TransactionClassTypePair;

    	/**
    	* @var TransactionState
    	*/
    	public $TransactionState;

    	/**
    	* @var string
    	*/
    	public $CardType;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $SequenceNumber;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDateTime;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $WorkflowId;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionDetail')){

    class TransactionDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactioninformation
    	*/
    	public $TransactionInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\familyinformation
    	*/
    	public $FamilyInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactionnotification
    	*/
    	public $TransactionNotifications;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\completetransaction
    	*/
    	public $CompleteTransaction;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionClassTypePair')){

    class TransactionClassTypePair extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $TransactionClass;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionNotification')){

    class TransactionNotification extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $NotificationDate;

    	/**
    	* @var ReconciliationState
    	*/
    	public $ReconciliationState;

    	/**
    	* @var decimal
    	*/
    	public $ReconciliationBalance;

    	/**
    	* @var string
    	*/
    	public $SerializedNotification;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionFamiliesResponse')){

    class TransactionFamiliesResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoffamilydetail
    	*/
    	public $FamilyDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\BankcardData')){

    class BankcardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\avsresult
    	*/
    	public $AVSResult;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionsSummaryResponse')){

    class TransactionsSummaryResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayofsummarydetail
    	*/
    	public $TransactionDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\EcommerceSecurityData')){

    class EcommerceSecurityData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $XID;

    	/**
    	* @var TokenIndicator
    	*/
    	public $TokenIndicator;

    	/**
    	* @var string
    	*/
    	public $TokenData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Level2Data')){

    class Level2Data extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ShipmentId;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var decimal
    	*/
    	public $FreightAmount;

    	/**
    	* @var string
    	*/
    	public $CustomerCode;

    	/**
    	* @var decimal
    	*/
    	public $MiscHandlingAmount;

    	/**
    	* @var string
    	*/
    	public $ShipFromPostalCode;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tax
    	*/
    	public $Tax;

    	/**
    	* @var decimal
    	*/
    	public $DutyAmount;

    	/**
    	* @var string
    	*/
    	public $DestinationPostal;

    	/**
    	* @var decimal
    	*/
    	public $DiscountAmount;

    	/**
    	* @var dateTime
    	*/
    	public $OrderDate;

    	/**
    	* @var decimal
    	*/
    	public $BaseAmount;

    	/**
    	* @var string
    	*/
    	public $CompanyName;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\taxexempt
    	*/
    	public $TaxExempt;

    	/**
    	* @var string
    	*/
    	public $DestinationCountryCode;

    	/**
    	* @var string
    	*/
    	public $RequesterName;

    	/**
    	* @var string
    	*/
    	public $CommodityCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InternetTransactionData')){

    class InternetTransactionData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $IpAddress;

    	/**
    	* @var string
    	*/
    	public $SessionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Tax')){

    class Tax extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayofitemizedtax
    	*/
    	public $ItemizedTaxes;

    	/**
    	* @var decimal
    	*/
    	public $Rate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $InvoiceNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\EMVTerminalData')){

    class EMVTerminalData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TerminalOutputCapability
    	*/
    	public $TerminalOutputCapability;

    	/**
    	* @var TerminalOperator
    	*/
    	public $TerminalOperator;

    	/**
    	* @var boolean
    	*/
    	public $CardRetentionCapability;

    	/**
    	* @var PINMaxCharacters
    	*/
    	public $PINMaxCharacters;

    	/**
    	* @var CardholderAuthenticationCapability
    	*/
    	public $CardholderAuthenticationCapability;

    	/**
    	* @var CardDataOutputCapability
    	*/
    	public $CardDataOutputCapability;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InternationalAVSOverride')){

    class InternationalAVSOverride extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $IgnoreAVS;

    	/**
    	* @var boolean
    	*/
    	public $SkipAVS;

    	/**
    	* @var string
    	*/
    	public $AVSRejectCodes;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InstallmentDetails')){

    class InstallmentDetails extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $MonthsDeferred;

    	/**
    	* @var InstallmentPlanType
    	*/
    	public $InstallmentPlanType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ItemizedTax')){

    class ItemizedTax extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeTaxType
    	*/
    	public $Type;

    	/**
    	* @var decimal
    	*/
    	public $Rate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InternationalAVSData')){

    class InternationalAVSData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $HouseNumber;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $POBoxNumber;

    	/**
    	* @var string
    	*/
    	public $Street;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $Country;

    	/**
    	* @var string
    	*/
    	public $City;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\EMVDataResponse')){

    class EMVDataResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TransactionStatusInformation;

    	/**
    	* @var string
    	*/
    	public $CashBackAmount;

    	/**
    	* @var string
    	*/
    	public $Cryptogram;

    	/**
    	* @var string
    	*/
    	public $TerminalVerifyResult;

    	/**
    	* @var string
    	*/
    	public $ResponseCode;

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $ApplicationName;

    	/**
    	* @var string
    	*/
    	public $IssuerAppData_x0020_;

    	/**
    	* @var string
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $IssuerAuthenticationData;

    	/**
    	* @var string
    	*/
    	public $CryptogramInfoData_x0020_;

    	/**
    	* @var string
    	*/
    	public $CardAuthenticationResultsCode;

    	/**
    	* @var string
    	*/
    	public $AuthorizationResponseCode;

    	/**
    	* @var string
    	*/
    	public $IssuerScriptTemplate2;

    	/**
    	* @var string
    	*/
    	public $CardholderVerificationMethod_x0020_;

    	/**
    	* @var string
    	*/
    	public $IssuerScriptTemplate1;

    	/**
    	* @var string
    	*/
    	public $ApplicationId;

    	/**
    	* @var string
    	*/
    	public $DedicatedFileName;

    	/**
    	* @var string
    	*/
    	public $ApplicationTransactionCount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ManagedBillingInstallments')){

    class ManagedBillingInstallments extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var int
    	*/
    	public $Count;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\IIASData')){

    class IIASData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var IIASDesignation
    	*/
    	public $IIASDesignation;

    	/**
    	* @var decimal
    	*/
    	public $DentalAmount;

    	/**
    	* @var decimal
    	*/
    	public $VisionAmount;

    	/**
    	* @var decimal
    	*/
    	public $HealthcareAmount;

    	/**
    	* @var decimal
    	*/
    	public $PrescriptionAmount;

    	/**
    	* @var decimal
    	*/
    	public $ClinicOtherAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Totals')){

    class Totals extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var int
    	*/
    	public $Count;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\AVSResult')){

    class AVSResult extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CardholderNameResult
    	*/
    	public $CardholderNameResult;

    	/**
    	* @var CountryResult
    	*/
    	public $CountryResult;

    	/**
    	* @var PostalCodeResult
    	*/
    	public $PostalCodeResult;

    	/**
    	* @var string
    	*/
    	public $ActualResult;

    	/**
    	* @var StateResult
    	*/
    	public $StateResult;

    	/**
    	* @var AddressResult
    	*/
    	public $AddressResult;

    	/**
    	* @var PhoneResult
    	*/
    	public $PhoneResult;

    	/**
    	* @var CityResult
    	*/
    	public $CityResult;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardApplicationConfigurationData')){

    class BankcardApplicationConfigurationData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $ApplicationAttended;

    	/**
    	* @var ReadCapability
    	*/
    	public $ReadCapability;

    	/**
    	* @var HardwareType
    	*/
    	public $HardwareType;

    	/**
    	* @var PINCapability
    	*/
    	public $PINCapability;

    	/**
    	* @var ApplicationLocation
    	*/
    	public $ApplicationLocation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\emvterminaldata
    	*/
    	public $EMVTerminalData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\CardSecurityData')){

    class CardSecurityData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\internationalavsdata
    	*/
    	public $InternationalAVSData;

    	/**
    	* @var string
    	*/
    	public $PIN;

    	/**
    	* @var CVDataProvided
    	*/
    	public $CVDataProvided;

    	/**
    	* @var string
    	*/
    	public $KeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $CVData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\avsdata
    	*/
    	public $AVSData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\internationalavsoverride
    	*/
    	public $InternationalAVSOverride;

    	/**
    	* @var string
    	*/
    	public $IdentificationInformation;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\TokenInformation')){

    class TokenInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TokenExpirationDate;

    	/**
    	* @var string
    	*/
    	public $TokenAssuranceLevel;

    	/**
    	* @var string
    	*/
    	public $TokenRequestorId;

    	/**
    	* @var string
    	*/
    	public $Token;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\CardData')){

    class CardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CardholderName;

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var string
    	*/
    	public $CardSequenceNumber;

    	/**
    	* @var string
    	*/
    	public $Track2Data;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $Track1Data;

    	/**
    	* @var string
    	*/
    	public $ChipConditionCode;

    	/**
    	* @var TypeFallbackReason
    	*/
    	public $FallbackReason;

    	/**
    	* @var string
    	*/
    	public $PAN;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\AVSData')){

    class AVSData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CardholderName;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var string
    	*/
    	public $Street;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $Country;

    	/**
    	* @var string
    	*/
    	public $City;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\TaxExempt')){

    class TaxExempt extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TaxExemptNumber;

    	/**
    	* @var IsTaxExempt
    	*/
    	public $IsTaxExempt;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\TransactionSummaryData')){

    class TransactionSummaryData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $NetTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $ReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $CashBackTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $SaleTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $PINDebitReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $PINDebitSaleTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $VoidTotals;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ManagedBilling')){

    class ManagedBilling extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $StartDate;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\managedbillinginstallments
    	*/
    	public $Installments;

    	/**
    	* @var decimal
    	*/
    	public $DownPayment;

    	/**
    	* @var int
    	*/
    	public $Period;

    	/**
    	* @var Interval
    	*/
    	public $Interval;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\LineItemDetail')){

    class LineItemDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $UnitPrice;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var TypeUnitOfMeasure
    	*/
    	public $UnitOfMeasure;

    	/**
    	* @var string
    	*/
    	public $ProductCode;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $CommodityCode;

    	/**
    	* @var decimal
    	*/
    	public $Quantity;

    	/**
    	* @var boolean
    	*/
    	public $TaxIncluded;

    	/**
    	* @var string
    	*/
    	public $UPC;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tax
    	*/
    	public $Tax;

    	/**
    	* @var decimal
    	*/
    	public $DiscountAmount;

    	/**
    	* @var boolean
    	*/
    	public $DiscountIncluded;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\BillPayServiceData')){

    class BillPayServiceData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addressinfo
    	*/
    	public $CompanyAddress;

    	/**
    	* @var string
    	*/
    	public $CompanyName;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Geolocation')){

    class Geolocation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var double
    	*/
    	public $Latitude;

    	/**
    	* @var double
    	*/
    	public $Longitude;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Unmanaged')){

    class Unmanaged extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Any;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Addendum')){

    class Addendum extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\unmanaged
    	*/
    	public $Unmanaged;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\SummaryTotals')){

    class SummaryTotals extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var int
    	*/
    	public $Count;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\InternationalAddressInfo')){

    class InternationalAddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $HouseNumber;

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $POBoxNumber;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var string
    	*/
    	public $CountryCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionCustomerData')){

    class TransactionCustomerData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\customerinfo
    	*/
    	public $BillingData;

    	/**
    	* @var string
    	*/
    	public $CustomerId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\customerinfo
    	*/
    	public $ShippingData;

    	/**
    	* @var string
    	*/
    	public $CustomerTaxId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionReportingData')){

    class TransactionReportingData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Comment;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var string
    	*/
    	public $Reference;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\SummaryData')){

    class SummaryData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $CreditReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $NetTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $CashBackTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $DebitReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $DebitTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $CreditTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $VoidTotals;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\ServiceTransactionDateTime')){

    class ServiceTransactionDateTime extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TimeZone;

    	/**
    	* @var string
    	*/
    	public $Time;

    	/**
    	* @var string
    	*/
    	public $Date;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\DriversLicense')){

    class DriversLicense extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Number;

    	/**
    	* @var string
    	*/
    	public $State;

    	/**
    	* @var string
    	*/
    	public $Track2;

    	/**
    	* @var string
    	*/
    	public $Track1;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionData')){

    class TransactionData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\geolocation
    	*/
    	public $Geolocation;

    	/**
    	* @var string
    	*/
    	public $CampaignId;

    	/**
    	* @var string
    	*/
    	public $Reference;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDateTime;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\discountdata
    	*/
    	public $DiscountData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\AlternativeMerchantData')){

    class AlternativeMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerServiceInternet;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var string
    	*/
    	public $MerchantId;

    	/**
    	* @var string
    	*/
    	public $SIC;

    	/**
    	* @var string
    	*/
    	public $CustomerServicePhone;

    	/**
    	* @var string
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Wallet')){

    class Wallet extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AuthorizationCode;

    	/**
    	* @var string
    	*/
    	public $ConsumerId;

    	/**
    	* @var WalletIdentifier
    	*/
    	public $WalletIdentifier;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\DiscountData')){

    class DiscountData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $PromotionCodes;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var decimal
    	*/
    	public $DiscountedAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\AddressInfo')){

    class AddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var string
    	*/
    	public $CountryCode;

    	/**
    	* @var string
    	*/
    	public $County;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\PINlessDebitData')){

    class PINlessDebitData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\billpayservicedata
    	*/
    	public $BillPayServiceData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\payeedata
    	*/
    	public $PayeeData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Response')){

    class Response extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var Status
    	*/
    	public $Status;

    	/**
    	* @var boolean
    	*/
    	public $IsAcknowledged;

    	/**
    	* @var TransactionState
    	*/
    	public $TransactionState;

    	/**
    	* @var string
    	*/
    	public $OriginatorTransactionId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\geolocation
    	*/
    	public $Geolocation;

    	/**
    	* @var string
    	*/
    	public $Reference;

    	/**
    	* @var string
    	*/
    	public $StatusCode;

    	/**
    	* @var string
    	*/
    	public $StatusMessage;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var CaptureState
    	*/
    	public $CaptureState;

    	/**
    	* @var string
    	*/
    	public $TransactionCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\servicetransactiondatetime
    	*/
    	public $ServiceTransactionDateTime;

    	/**
    	* @var string
    	*/
    	public $HostMessageId;

    	/**
    	* @var string
    	*/
    	public $TransmissionNumber;

    	/**
    	* @var string
    	*/
    	public $ServiceTransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\NameInfo')){

    class NameInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Last;

    	/**
    	* @var string
    	*/
    	public $Suffix;

    	/**
    	* @var string
    	*/
    	public $Title;

    	/**
    	* @var string
    	*/
    	public $First;

    	/**
    	* @var string
    	*/
    	public $Middle;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Transaction')){

    class Transaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transactioncustomerdata
    	*/
    	public $CustomerData;

    	/**
    	* @var boolean
    	*/
    	public $IsOffline;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transactionreportingdata
    	*/
    	public $ReportingData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\PersonalInfo')){

    class PersonalInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $DateOfBirth;

    	/**
    	* @var string
    	*/
    	public $Company;

    	/**
    	* @var string
    	*/
    	public $MilitaryIdNumber;

    	/**
    	* @var string
    	*/
    	public $SocialSecurityNumber;

    	/**
    	* @var string
    	*/
    	public $EmployeeIdNumber;

    	/**
    	* @var string
    	*/
    	public $GovernmentIdNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\driverslicense
    	*/
    	public $DriversLicense;

    	/**
    	* @var string
    	*/
    	public $Gender;

    	/**
    	* @var string
    	*/
    	public $TaxId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\EMVData')){

    class EMVData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TerminalVerifyResult;

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $CVMResults;

    	/**
    	* @var string
    	*/
    	public $ApplicationVersionNumber;

    	/**
    	* @var string
    	*/
    	public $ApplicationInterchangeProfile;

    	/**
    	* @var string
    	*/
    	public $IssuerActionDefault;

    	/**
    	* @var string
    	*/
    	public $AuthorizationResponseCode;

    	/**
    	* @var string
    	*/
    	public $CurrencyCode;

    	/**
    	* @var string
    	*/
    	public $ApplicationUsageControl;

    	/**
    	* @var string
    	*/
    	public $FormFactorIndicator;

    	/**
    	* @var string
    	*/
    	public $SequenceNumber;

    	/**
    	* @var string
    	*/
    	public $CVMList;

    	/**
    	* @var string
    	*/
    	public $ApplicationTransactionCount;

    	/**
    	* @var string
    	*/
    	public $TerminalCountryCode;

    	/**
    	* @var string
    	*/
    	public $CashBackAmount;

    	/**
    	* @var string
    	*/
    	public $Cryptogram;

    	/**
    	* @var string
    	*/
    	public $UnpredictableNumber;

    	/**
    	* @var string
    	*/
    	public $IssuerActionDenial;

    	/**
    	* @var string
    	*/
    	public $CryptogramInformationData;

    	/**
    	* @var string
    	*/
    	public $InterfaceDeviceSerialNumber;

    	/**
    	* @var string
    	*/
    	public $CustomerExclusiveData;

    	/**
    	* @var string
    	*/
    	public $LocalTransactionDate;

    	/**
    	* @var string
    	*/
    	public $CardSequenceNumber;

    	/**
    	* @var string
    	*/
    	public $TerminalType;

    	/**
    	* @var string
    	*/
    	public $IssuerApplicationData;

    	/**
    	* @var string
    	*/
    	public $IssuerActionOnline;

    	/**
    	* @var string
    	*/
    	public $AuthorizationAmount;

    	/**
    	* @var string
    	*/
    	public $TerminalCapability;

    	/**
    	* @var string
    	*/
    	public $ApplicationId;

    	/**
    	* @var string
    	*/
    	public $DedicatedFileName;

    	/**
    	* @var string
    	*/
    	public $IssuerScriptResults;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\CustomerInfo')){

    class CustomerInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\internationaladdressinfo
    	*/
    	public $InternationalAddress;

    	/**
    	* @var string
    	*/
    	public $BusinessName;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var string
    	*/
    	public $Fax;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\nameinfo
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionTenderData')){

    class TransactionTenderData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SecureEMVData;

    	/**
    	* @var string
    	*/
    	public $SecurePaymentAccountData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\wallet
    	*/
    	public $Wallet;

    	/**
    	* @var string
    	*/
    	public $VendorId;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var string
    	*/
    	public $SwipeStatus;

    	/**
    	* @var string
    	*/
    	public $EMVEncryptionKeyId;

    	/**
    	* @var string
    	*/
    	public $DeviceSerialNumber;

    	/**
    	* @var string
    	*/
    	public $SecureMACData;

    	/**
    	* @var string
    	*/
    	public $EncryptionKeyId;

    	/**
    	* @var string
    	*/
    	public $MACEncryptionKeyId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\PayeeData')){

    class PayeeData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CompanyName;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\ComponentKeys')){

    class ComponentKeys extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\pincomponentkey
    	*/
    	public $PINComponentKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\genericcomponentkey
    	*/
    	public $GenericComponentKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\maccomponentkey
    	*/
    	public $MACComponentKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\emvcomponentkey
    	*/
    	public $EMVComponentKey;

    	/**
    	* @var string
    	*/
    	public $RegionId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\fieldcomponentkey
    	*/
    	public $FieldComponentKey;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\InitialEncryptionKeys')){

    class InitialEncryptionKeys extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\macinitialkey
    	*/
    	public $MACInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\pininitialkey
    	*/
    	public $PINInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\genericinitialkey
    	*/
    	public $GenericInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\fieldinitialkey
    	*/
    	public $FieldInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\emvinitialkey
    	*/
    	public $EMVInitialKey;

    	/**
    	* @var string
    	*/
    	public $RegionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\GenericComponentKey')){

    class GenericComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\GenericInitialKey')){

    class GenericInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionTenderData')){

    class EncryptionTenderData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $VendorId;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var string
    	*/
    	public $RegionId;

    	/**
    	* @var string
    	*/
    	public $DeviceSerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\MACInitialKey')){

    class MACInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\PINComponentKey')){

    class PINComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\PINInitialKey')){

    class PINInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\MACComponentKey')){

    class MACComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\FieldInitialKey')){

    class FieldInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EMVComponentKey')){

    class EMVComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EMVInitialKey')){

    class EMVInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\FieldComponentKey')){

    class FieldComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ElectronicCheckingMerchantData')){

    class ElectronicCheckingMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $OriginatorId;

    	/**
    	* @var string
    	*/
    	public $SiteId;

    	/**
    	* @var string
    	*/
    	public $ProductId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EncryptionMerchantData')){

    class EncryptionMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AgentBank;

    	/**
    	* @var string
    	*/
    	public $SecondaryTerminalId;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardMerchantData')){

    class BankcardMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AgentBank;

    	/**
    	* @var string
    	*/
    	public $SecondaryTerminalId;

    	/**
    	* @var string
    	*/
    	public $BusinessGroup;

    	/**
    	* @var string
    	*/
    	public $ReimbursementAttribute;

    	/**
    	* @var string
    	*/
    	public $MerchantType;

    	/**
    	* @var string
    	*/
    	public $SettlementAgent;

    	/**
    	* @var string
    	*/
    	public $ABANumber;

    	/**
    	* @var boolean
    	*/
    	public $Aggregator;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\accountupdatermerchantids
    	*/
    	public $AccountUpdaterMerchantIds;

    	/**
    	* @var boolean
    	*/
    	public $PrintCustomerServicePhone;

    	/**
    	* @var string
    	*/
    	public $SIC;

    	/**
    	* @var string
    	*/
    	public $BusinessRegion;

    	/**
    	* @var string
    	*/
    	public $QualificationCodes;

    	/**
    	* @var IndustryType
    	*/
    	public $IndustryType;

    	/**
    	* @var string
    	*/
    	public $TimeZoneDifferential;

    	/**
    	* @var string
    	*/
    	public $StoreId;

    	/**
    	* @var string
    	*/
    	public $AgentChain;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $AcquirerBIN;

    	/**
    	* @var string
    	*/
    	public $SharingGroup;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofcardbrandidentifiers_3dsecure
    	*/
    	public $CardBrandIdentifiers_3DSecure;

    	/**
    	* @var string
    	*/
    	public $ClientNumber;

    	/**
    	* @var string
    	*/
    	public $Location;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ApplicationData')){

    class ApplicationData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var EncryptionType
    	*/
    	public $EncryptionType;

    	/**
    	* @var string
    	*/
    	public $ApplicationName;

    	/**
    	* @var string
    	*/
    	public $VendorId;

    	/**
    	* @var PINCapability
    	*/
    	public $PINCapability;

    	/**
    	* @var ApplicationLocation
    	*/
    	public $ApplicationLocation;

    	/**
    	* @var string
    	*/
    	public $DeviceSerialNumber;

    	/**
    	* @var dateTime
    	*/
    	public $SoftwareVersionDate;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\emvterminaldata
    	*/
    	public $EMVTerminalData;

    	/**
    	* @var boolean
    	*/
    	public $ApplicationAttended;

    	/**
    	* @var ReadCapability
    	*/
    	public $ReadCapability;

    	/**
    	* @var string
    	*/
    	public $SoftwareVersion;

    	/**
    	* @var HardwareType
    	*/
    	public $HardwareType;

    	/**
    	* @var string
    	*/
    	public $SerialNumber;

    	/**
    	* @var string
    	*/
    	public $DeveloperId;

    	/**
    	* @var string
    	*/
    	public $PTLSSocketId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\AccountUpdaterMerchantIds')){

    class AccountUpdaterMerchantIds extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MastercardMerchantId;

    	/**
    	* @var string
    	*/
    	public $VisaMerchantId;

    	/**
    	* @var string
    	*/
    	public $DiscoverMerchantId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\CardBrandIdentifiers_3DSecure')){

    class CardBrandIdentifiers_3DSecure extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantUrl;

    	/**
    	* @var CardBrand3DSecureProgram
    	*/
    	public $CardBrand3DSecureProgram;

    	/**
    	* @var string
    	*/
    	public $MerchantNumber;

    	/**
    	* @var string
    	*/
    	public $MerchantBankId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\StoredValueMerchantData')){

    class StoredValueMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $StoreId;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $AgentChain;

    	/**
    	* @var string
    	*/
    	public $SIC;

    	/**
    	* @var string
    	*/
    	public $ClientNumber;

    	/**
    	* @var IndustryType
    	*/
    	public $IndustryType;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EMVTerminalData')){

    class EMVTerminalData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TerminalOutputCapability
    	*/
    	public $TerminalOutputCapability;

    	/**
    	* @var TerminalOperator
    	*/
    	public $TerminalOperator;

    	/**
    	* @var boolean
    	*/
    	public $CardRetentionCapability;

    	/**
    	* @var PINMaxCharacters
    	*/
    	public $PINMaxCharacters;

    	/**
    	* @var CardholderAuthenticationCapability
    	*/
    	public $CardholderAuthenticationCapability;

    	/**
    	* @var CardDataOutputCapability
    	*/
    	public $CardDataOutputCapability;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\MerchantProfileMerchantData')){

    class MerchantProfileMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerServiceInternet;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\electroniccheckingmerchantdata
    	*/
    	public $ElectronicCheckingMerchantData;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $Language;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\encryptionmerchantdata
    	*/
    	public $EncryptionMerchantData;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\bankcardmerchantdata
    	*/
    	public $BankcardMerchantData;

    	/**
    	* @var string
    	*/
    	public $MerchantId;

    	/**
    	* @var string
    	*/
    	public $TaxId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\storedvaluemerchantdata
    	*/
    	public $StoredValueMerchantData;

    	/**
    	* @var string
    	*/
    	public $CustomerServicePhone;

    	/**
    	* @var string
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\AddressInfo')){

    class AddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var TypeISOCountryCodeA3
    	*/
    	public $CountryCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ReturnInformation')){

    class ReturnInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $ReturnDate;

    	/**
    	* @var string
    	*/
    	public $ReturnCode;

    	/**
    	* @var string
    	*/
    	public $ReturnReason;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\CheckData')){

    class CheckData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CheckCountryCode
    	*/
    	public $CheckCountryCode;

    	/**
    	* @var string
    	*/
    	public $RoutingNumber;

    	/**
    	* @var OwnerType
    	*/
    	public $OwnerType;

    	/**
    	* @var UseType
    	*/
    	public $UseType;

    	/**
    	* @var string
    	*/
    	public $CheckNumber;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\VirtualCardData')){

    class VirtualCardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $AccountNumberLength;

    	/**
    	* @var string
    	*/
    	public $BIN;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\ConsumerIdentification')){

    class ConsumerIdentification extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $IdData;

    	/**
    	* @var IdEntryMode
    	*/
    	public $IdEntryMode;

    	/**
    	* @var IdType
    	*/
    	public $IdType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\CardSecurityData')){

    class CardSecurityData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CVDataProvided
    	*/
    	public $CVDataProvided;

    	/**
    	* @var string
    	*/
    	public $CVData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\CardData')){

    class CardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var string
    	*/
    	public $Track2Data;

    	/**
    	* @var string
    	*/
    	public $Track1Data;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardInterchangeData')){

    class BankcardInterchangeData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var RequestCommercialCard
    	*/
    	public $RequestCommercialCard;

    	/**
    	* @var ExistingDebt
    	*/
    	public $ExistingDebt;

    	/**
    	* @var int
    	*/
    	public $CurrentInstallmentNumber;

    	/**
    	* @var BillPayment
    	*/
    	public $BillPayment;

    	/**
    	* @var RequestAdvice
    	*/
    	public $RequestAdvice;

    	/**
    	* @var int
    	*/
    	public $TotalNumberOfInstallments;

    	/**
    	* @var RequestACI
    	*/
    	public $RequestACI;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\installmentdetails
    	*/
    	public $InstallmentDetails;

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\BaseFault')){

    class BaseFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $ErrorID;

    	/**
    	* @var string
    	*/
    	public $ProblemType;

    	/**
    	* @var string
    	*/
    	public $Operation;

    	/**
    	* @var string
    	*/
    	public $HelpURL;

    }
}

namespace Evosnap\Ipc\General\Wcf\Contracts\Common\External;

if(!class_exists('\Evosnap\Ipc\General\Wcf\Contracts\Common\External\PingResponse')){

    class PingResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $IsSuccess;

    	/**
    	* @var string
    	*/
    	public $Message;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSUnknownServiceKeyFault')){

    class TMSUnknownServiceKeyFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSUnknownServiceKeyFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSUnavailableFault')){

    class TMSUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSTransactionFailedFault')){

    class TMSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSOperationNotSupportedFault')){

    class TMSOperationNotSupportedFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSOperationNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Fault\TMSValidationResultFault')){

    class TMSValidationResultFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Fault') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\Fault\arrayoftmsvalidationerror
    	*/
    	public $Errors;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionTransactionData')){

    class EncryptionTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'EncryptionTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Encryption') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTransactionData')){

    class ElectronicCheckingTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'ElectronicCheckingTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var boolean
    	*/
    	public $IsRecurring;

    	/**
    	* @var string
    	*/
    	public $PayeeId;

    	/**
    	* @var TransactionType
    	*/
    	public $TransactionType;

    	/**
    	* @var ServiceType
    	*/
    	public $ServiceType;

    	/**
    	* @var string
    	*/
    	public $PayeeEmail;

    	/**
    	* @var SECCode
    	*/
    	public $SECCode;

    	/**
    	* @var dateTime
    	*/
    	public $EffectiveDate;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTransactionData')){

    class StoredValueTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'StoredValueTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $CardRestrictionValue;

    	/**
    	* @var boolean
    	*/
    	public $Unload;

    	/**
    	* @var boolean
    	*/
    	public $IsCashOut;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var OperationType
    	*/
    	public $OperationType;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionData')){

    class BankcardTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'BankcardTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var boolean
    	*/
    	public $Is3DSecure;

    	/**
    	* @var GoodsType
    	*/
    	public $GoodsType;

    	/**
    	* @var string
    	*/
    	public $ContractNumber;

    	/**
    	* @var CustomerPresent
    	*/
    	public $CustomerPresent;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\internettransactiondata
    	*/
    	public $InternetTransactionData;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var boolean
    	*/
    	public $IsQuickPaymentService;

    	/**
    	* @var string
    	*/
    	public $BatchAssignment;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var boolean
    	*/
    	public $IsQuasiCash;

    	/**
    	* @var string
    	*/
    	public $InvoiceNumber;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    	/**
    	* @var boolean
    	*/
    	public $CardPresence;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    	/**
    	* @var decimal
    	*/
    	public $CashBackAmount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\alternativemerchantdata
    	*/
    	public $AlternativeMerchantData;

    	/**
    	* @var string
    	*/
    	public $ScoreThreshold;

    	/**
    	* @var boolean
    	*/
    	public $SignatureCaptured;

    	/**
    	* @var boolean
    	*/
    	public $IsPartialShipment;

    	/**
    	* @var AccountType
    	*/
    	public $AccountType;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var TypeCardholderAuthenticationEntity
    	*/
    	public $CardholderAuthenticationEntity;

    	/**
    	* @var PartialApprovalSupportType
    	*/
    	public $PartialApprovalCapable;

    	/**
    	* @var string
    	*/
    	public $LaneId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionResponse')){

    class EncryptionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'EncryptionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Encryption') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\arrayofcomponentkeys
    	*/
    	public $ComponentKeys;

    	/**
    	* @var string
    	*/
    	public $MessageAuthenticationCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\arrayofinitialencryptionkeys
    	*/
    	public $InitialEncryptionKeys;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingCaptureResponse')){

    class ElectronicCheckingCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'ElectronicCheckingCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarydata
    	*/
    	public $SummaryData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTransactionResponse')){

    class ElectronicCheckingTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'ElectronicCheckingTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $ModifiedRoutingNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\returninformation
    	*/
    	public $ReturnInformation;

    	/**
    	* @var boolean
    	*/
    	public $ACHCapable;

    	/**
    	* @var dateTime
    	*/
    	public $SubmitDate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var string
    	*/
    	public $ModifiedAccountNumber;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueCaptureResponse')){

    class StoredValueCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'StoredValueCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarydata
    	*/
    	public $SummaryData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTransactionResponse')){

    class StoredValueTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'StoredValueTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $CashBackAmount;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var decimal
    	*/
    	public $LockAmount;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    	/**
    	* @var string
    	*/
    	public $CVData;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    	/**
    	* @var string
    	*/
    	public $CardRestrictionValue;

    	/**
    	* @var decimal
    	*/
    	public $NewBalance;

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var decimal
    	*/
    	public $PreviousBalance;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionResponse')){

    class BankcardTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'BankcardTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var PrepaidCard
    	*/
    	public $PrepaidCard;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var string
    	*/
    	public $MerchantId;

    	/**
    	* @var string
    	*/
    	public $AuthorizationServerUrl;

    	/**
    	* @var string
    	*/
    	public $BankResponseCode;

    	/**
    	* @var string
    	*/
    	public $ForcePostCode;

    	/**
    	* @var string
    	*/
    	public $ErrorType;

    	/**
    	* @var decimal
    	*/
    	public $BatchAmount;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var boolean
    	*/
    	public $ProcessedAs3D;

    	/**
    	* @var TypeLevel3Added
    	*/
    	public $Level3Added;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    	/**
    	* @var decimal
    	*/
    	public $CashBackAmount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\emvdataresponse
    	*/
    	public $EMVDataResponse;

    	/**
    	* @var string
    	*/
    	public $LastPANDigits;

    	/**
    	* @var string
    	*/
    	public $MessageAuthenticationCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\arrayofinitialencryptionkeys
    	*/
    	public $InitialEncryptionKeys;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\avsresult
    	*/
    	public $AVSResult;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tokeninformation
    	*/
    	public $TokenInformation;

    	/**
    	* @var string
    	*/
    	public $PaymentAuthorizationRequest;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var string
    	*/
    	public $CardLevel;

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var string
    	*/
    	public $DowngradeCode;

    	/**
    	* @var dateTime
    	*/
    	public $SettlementDate;

    	/**
    	* @var string
    	*/
    	public $RetrievalReferenceNumber;

    	/**
    	* @var Resubmit
    	*/
    	public $Resubmit;

    	/**
    	* @var decimal
    	*/
    	public $FinalBalance;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCaptureResponse')){

    class BankcardCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'BankcardCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\transactionsummarydata
    	*/
    	public $TransactionSummaryData;

    	/**
    	* @var string
    	*/
    	public $ErrorType;

    	/**
    	* @var PrepaidCard
    	*/
    	public $PrepaidCard;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var IndustryType
    	*/
    	public $IndustryType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionTransaction')){

    class EncryptionTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'EncryptionTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Encryption') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\encryptiontenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\encryptiontransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTransaction')){

    class ElectronicCheckingTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'ElectronicCheckingTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\electroniccheckingtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\electroniccheckingtransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTransaction')){

    class StoredValueTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'StoredValueTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\storedvaluetenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\storedvaluetransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransaction')){

    class BankcardTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'BankcardTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardapplicationconfigurationdata
    	*/
    	public $ApplicationConfigurationData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTenderData')){

    class ElectronicCheckingTenderData extends \Evosnap\Cws\V2\I0\Transactions\TransactionTenderData {

    	public function __construct($type = 'ElectronicCheckingTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\checkdata
    	*/
    	public $CheckData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData')){

    class StoredValueTenderData extends \Evosnap\Cws\V2\I0\Transactions\TransactionTenderData {

    	public function __construct($type = 'StoredValueTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $CardholderId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\cardsecuritydata
    	*/
    	public $CardSecurityData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\arrayofconsumeridentification
    	*/
    	public $ConsumerIdentifications;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\carddata
    	*/
    	public $CardData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTenderData')){

    class BankcardTenderData extends \Evosnap\Cws\V2\I0\Transactions\TransactionTenderData {

    	public function __construct($type = 'BankcardTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\ecommercesecuritydata
    	*/
    	public $EcommerceSecurityData;

    	/**
    	* @var DeviceTypeIndicator
    	*/
    	public $DeviceTypeIndicator;

    	/**
    	* @var TypeCardholderId
    	*/
    	public $CardholderIdType;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\cardsecuritydata
    	*/
    	public $CardSecurityData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tokeninformation
    	*/
    	public $TokenInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\carddata
    	*/
    	public $CardData;

    	/**
    	* @var TenderType
    	*/
    	public $TenderType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingCustomerData')){

    class ElectronicCheckingCustomerData extends \Evosnap\Cws\V2\I0\Transactions\TransactionCustomerData {

    	public function __construct($type = 'ElectronicCheckingCustomerData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\personalinfo
    	*/
    	public $AdditionalBillingData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueActivateTenderData')){

    class StoredValueActivateTenderData extends \Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData {

    	public function __construct($type = 'StoredValueActivateTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\virtualcarddata
    	*/
    	public $VirtualCardData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueBalanceTransferTenderData')){

    class StoredValueBalanceTransferTenderData extends \Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData {

    	public function __construct($type = 'StoredValueBalanceTransferTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\consumeridentification
    	*/
    	public $ConsumerIdentification;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\carddata
    	*/
    	public $SourceCardData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\DataServicesUnavailableFault')){

    class DataServicesUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\DSBaseFault {

    	public function __construct($type = 'DataServicesUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTransactionResponsePro')){

    class BankcardTransactionResponsePro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionResponse {

    	public function __construct($type = 'BankcardTransactionResponsePro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $ReturnedACI;

    	/**
    	* @var CommercialCardResponse
    	*/
    	public $CommercialCardResponse;

    	/**
    	* @var AdviceResponse
    	*/
    	public $AdviceResponse;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTenderDataPro')){

    class BankcardTenderDataPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTenderData {

    	public function __construct($type = 'BankcardTenderDataPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\emvdata
    	*/
    	public $EMVData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTransactionDataPro')){

    class BankcardTransactionDataPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionData {

    	public function __construct($type = 'BankcardTransactionDataPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\level2data
    	*/
    	public $Level2Data;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\iiasdata
    	*/
    	public $IIASData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
    	*/
    	public $LineItemDetails;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\managedbilling
    	*/
    	public $ManagedBilling;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\pinlessdebitdata
    	*/
    	public $PINlessDebitData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTransactionPro')){

    class BankcardTransactionPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransaction {

    	public function __construct($type = 'BankcardTransactionPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\bankcardinterchangedata
    	*/
    	public $InterchangeData;

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\ExpiredTokenFault')){

    class ExpiredTokenFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'ExpiredTokenFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\InvalidTokenFault')){

    class InvalidTokenFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'InvalidTokenFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\AuthenticationFault')){

    class AuthenticationFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'AuthenticationFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

