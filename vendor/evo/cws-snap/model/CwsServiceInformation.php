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

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\ScopeMetaData')){

    class ScopeMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ScopeName;

    	/**
    	* @var int
    	*/
    	public $ScopeId;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofidentitytypeenum
    	*/
    	public $AllowableIdentityTypes;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\TokenResponse')){

    class TokenResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SessionToken;

    	/**
    	* @var string
    	*/
    	public $UserAccessToken;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\SecurityQuestionResponse')){

    class SecurityQuestionResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SecurityQuestionToken;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\securityquestion
    	*/
    	public $SecurityQuestion;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\ClaimMetaData')){

    class ClaimMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\scopemetadata
    	*/
    	public $ClaimScope;

    	/**
    	* @var string
    	*/
    	public $ClaimNS;

    	/**
    	* @var string
    	*/
    	public $ClaimValue;

    	/**
    	* @var string
    	*/
    	public $ClaimDescription;

    	/**
    	* @var ClaimTypeEnum
    	*/
    	public $ClaimType;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\SecurityQuestion')){

    class SecurityQuestion extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $QuestionCode;

    	/**
    	* @var string
    	*/
    	public $QuestionText;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\SecurityAnswer')){

    class SecurityAnswer extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Answer;

    	/**
    	* @var string
    	*/
    	public $QuestionCode;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault')){

    class CWSBaseFault extends \Evosnap\Cws\Model\BaseObject {

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

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSValidationErrorFault')){

    class CWSValidationErrorFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RuleMessage;

    	/**
    	* @var CWSValidationErrorFault_EErrorType
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

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Rest\MerchantProfileId')){

    class MerchantProfileId extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $id;

    	/**
    	* @var string
    	*/
    	public $href;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Rest\UserInfo')){

    class UserInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SecurityQuestionToken;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $UserName;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofsecurityanswer
    	*/
    	public $SecurityAnswers;

    	/**
    	* @var string
    	*/
    	public $Password;

    	/**
    	* @var string
    	*/
    	public $SecurityAnswer;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Rest\ApplicationProfileId')){

    class ApplicationProfileId extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $id;

    	/**
    	* @var string
    	*/
    	public $href;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\WorkflowService')){

    class WorkflowService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var string
    	*/
    	public $ServiceType;

    	/**
    	* @var int
    	*/
    	public $Ordinal;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Operations')){

    class Operations extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $CaptureAll;

    	/**
    	* @var boolean
    	*/
    	public $QueryRejected;

    	/**
    	* @var boolean
    	*/
    	public $ManageAccountById;

    	/**
    	* @var boolean
    	*/
    	public $Undo;

    	/**
    	* @var boolean
    	*/
    	public $QueryAccount;

    	/**
    	* @var CloseBatch
    	*/
    	public $CloseBatch;

    	/**
    	* @var boolean
    	*/
    	public $Capture;

    	/**
    	* @var boolean
    	*/
    	public $Authorize;

    	/**
    	* @var boolean
    	*/
    	public $Adjust;

    	/**
    	* @var boolean
    	*/
    	public $AuthAndCapture;

    	/**
    	* @var boolean
    	*/
    	public $ManageAccount;

    	/**
    	* @var boolean
    	*/
    	public $Disburse;

    	/**
    	* @var boolean
    	*/
    	public $CaptureSelective;

    	/**
    	* @var boolean
    	*/
    	public $ReturnUnlinked;

    	/**
    	* @var boolean
    	*/
    	public $RequestKey;

    	/**
    	* @var boolean
    	*/
    	public $Verify;

    	/**
    	* @var boolean
    	*/
    	public $ReturnById;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Tenders')){

    class Tenders extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TrackDataSupportType
    	*/
    	public $TrackDataSupport;

    	/**
    	* @var CreditAuthorizeSupportType
    	*/
    	public $CreditAuthorizeSupport;

    	/**
    	* @var boolean
    	*/
    	public $PINDebitUndoTenderDataRequired;

    	/**
    	* @var boolean
    	*/
    	public $CredentialsRequired;

    	/**
    	* @var CreditReversalSupportType
    	*/
    	public $CreditReversalSupportType;

    	/**
    	* @var boolean
    	*/
    	public $Credit;

    	/**
    	* @var CreditReturnSupportType
    	*/
    	public $CreditReturnSupportType;

    	/**
    	* @var BatchAssignmentSupport
    	*/
    	public $BatchAssignmentSupport;

    	/**
    	* @var boolean
    	*/
    	public $PINlessDebit;

    	/**
    	* @var PINDebitReturnSupportType
    	*/
    	public $PINDebitReturnSupportType;

    	/**
    	* @var PinDebitUndoSupportType
    	*/
    	public $PinDebitUndoSupport;

    	/**
    	* @var QueryRejectedSupportType
    	*/
    	public $QueryRejectedSupport;

    	/**
    	* @var boolean
    	*/
    	public $PINDebit;

    	/**
    	* @var PartialApprovalSupportType
    	*/
    	public $PartialApprovalSupportType;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\MerchantProfile')){

    class MerchantProfile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofilemerchantdata
    	*/
    	public $MerchantData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayoftyperestrictedoperation
    	*/
    	public $RestrictedOperations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\servicecredentials
    	*/
    	public $ServiceCredentials;

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayoftyperulecategory
    	*/
    	public $RuleCategories;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var dateTime
    	*/
    	public $LastUpdated;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofiletransactiondata
    	*/
    	public $TransactionData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\hostedpayments
    	*/
    	public $HostedPayments;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ServiceCredentials')){

    class ServiceCredentials extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $Password;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ElectronicCheckingService')){

    class ElectronicCheckingService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\tenders
    	*/
    	public $Tenders;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardServiceAVSData')){

    class BankcardServiceAVSData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $CardholderName;

    	/**
    	* @var boolean
    	*/
    	public $StateProvince;

    	/**
    	* @var boolean
    	*/
    	public $Phone;

    	/**
    	* @var boolean
    	*/
    	public $Street;

    	/**
    	* @var boolean
    	*/
    	public $PostalCode;

    	/**
    	* @var boolean
    	*/
    	public $Country;

    	/**
    	* @var boolean
    	*/
    	public $City;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Workflow')){

    class Workflow extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofworkflowservice
    	*/
    	public $WorkflowServices;

    	/**
    	* @var string
    	*/
    	public $WorkflowId;

    	/**
    	* @var string
    	*/
    	public $Name;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\HostedPayments')){

    class HostedPayments extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Code;

    	/**
    	* @var string
    	*/
    	public $Key;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardTransactionDataDefaults')){

    class BankcardTransactionDataDefaults extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var CustomerPresent
    	*/
    	public $CustomerPresent;

    	/**
    	* @var RequestAdvice
    	*/
    	public $RequestAdvice;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var RequestACI
    	*/
    	public $RequestACI;

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

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardService')){

    class BankcardService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $AlternativeMerchantData;

    	/**
    	* @var string
    	*/
    	public $EncryptionKey;

    	/**
    	* @var long
    	*/
    	public $MaximumBatchItems;

    	/**
    	* @var PurchaseCardLevel
    	*/
    	public $PurchaseCardLevel;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\bankcardserviceavsdata
    	*/
    	public $AVSData;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    	/**
    	* @var dateTime
    	*/
    	public $CutoffTime;

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePartialCapture;

    	/**
    	* @var boolean
    	*/
    	public $ResubmitCorrection;

    	/**
    	* @var boolean
    	*/
    	public $ManagedBilling;

    	/**
    	* @var boolean
    	*/
    	public $AutoBatch;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\tenders
    	*/
    	public $Tenders;

    	/**
    	* @var long
    	*/
    	public $MaximumLineItems;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\MerchantProfileTransactionData')){

    class MerchantProfileTransactionData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\bankcardtransactiondatadefaults
    	*/
    	public $BankcardTransactionDataDefaults;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\StoredValueService')){

    class StoredValueService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var boolean
    	*/
    	public $SecureMSRAllowed;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\tenders
    	*/
    	public $Tenders;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ServiceInformation')){

    class ServiceInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofencryptionservice
    	*/
    	public $EncryptionServices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofbankcardservice
    	*/
    	public $BankcardServices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofworkflow
    	*/
    	public $Workflows;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofelectroniccheckingservice
    	*/
    	public $ElectronicCheckingServices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofstoredvalueservice
    	*/
    	public $StoredValueServices;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EncryptionService')){

    class EncryptionService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EmailTemplate')){

    class EmailTemplate extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Greeting;

    	/**
    	* @var string
    	*/
    	public $TwitterLink;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $Language;

    	/**
    	* @var string
    	*/
    	public $PrimaryColor;

    	/**
    	* @var string
    	*/
    	public $ReturnPolicy;

    	/**
    	* @var string
    	*/
    	public $SecondaryColor;

    	/**
    	* @var string
    	*/
    	public $FacebookLink;

    	/**
    	* @var string
    	*/
    	public $Closing;

    	/**
    	* @var string
    	*/
    	public $FromEmail;

    	/**
    	* @var TypeEmailFont
    	*/
    	public $Font;

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

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSValidationResultFault')){

    class CWSValidationResultFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\Faults\arrayofcwsvalidationerrorfault
    	*/
    	public $Errors;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSFault')){

    class CWSFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSServiceInformationUnavailableFault')){

    class CWSServiceInformationUnavailableFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSServiceInformationUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\PasswordExpiredFault')){

    class PasswordExpiredFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'PasswordExpiredFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

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

if(!class_exists('\Evosnap\Identity\I1\I0\InvalidEmailFault')){

    class InvalidEmailFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'InvalidEmailFault, http://schemas.evosnap.com/Identity/1.0/') {
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

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\SecurityQuestionNotFoundFault')){

    class SecurityQuestionNotFoundFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'SecurityQuestionNotFoundFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\OneTimePasswordFault')){

    class OneTimePasswordFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'OneTimePasswordFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\LockedByAdminFault')){

    class LockedByAdminFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'LockedByAdminFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\ArgumentNullFault')){

    class ArgumentNullFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'ArgumentNullFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\BadAttemptThresholdExceededFault')){

    class BadAttemptThresholdExceededFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'BadAttemptThresholdExceededFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\SendEmailFault')){

    class SendEmailFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'SendEmailFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\PasswordInvalidFault')){

    class PasswordInvalidFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'PasswordInvalidFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\UserNotFoundFault')){

    class UserNotFoundFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'UserNotFoundFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\SystemFault')){

    class SystemFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'SystemFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\STSUnavailableFault')){

    class STSUnavailableFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'STSUnavailableFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

    }
}

