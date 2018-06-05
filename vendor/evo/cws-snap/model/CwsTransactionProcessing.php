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

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\RoleMetaData')){

    class RoleMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RoleName;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var string
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $RoleGuid;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\MerchantQueryParameters')){

    class MerchantQueryParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SalesChannel;

    	/**
    	* @var string
    	*/
    	public $MerchantName;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\UserInfo')){

    class UserInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Role;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $LastName;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\UserQueryParameters')){

    class UserQueryParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SalesChannel;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $Merchant;

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $LastName;

    	/**
    	* @var LockState
    	*/
    	public $LockState;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\IdentityMetaData')){

    class IdentityMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var IdentityTypeEnum
    	*/
    	public $IdentityType;

    	/**
    	* @var string
    	*/
    	public $IdentityDescription;

    	/**
    	* @var string
    	*/
    	public $IdentityGuid;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\scopemetadata
    	*/
    	public $Scope;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofusercredmetadata
    	*/
    	public $UserCreds;

    	/**
    	* @var string
    	*/
    	public $IdentityName;

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

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\UserCredMetaData')){

    class UserCredMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $LastPasswordResetDate;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Merchants;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $AssignedRoles;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var boolean
    	*/
    	public $IsSystemLocked;

    	/**
    	* @var dateTime
    	*/
    	public $LastLoginDate;

    	/**
    	* @var string
    	*/
    	public $UserCredentialGuid;

    	/**
    	* @var boolean
    	*/
    	public $UserMustChangePassword;

    	/**
    	* @var dateTime
    	*/
    	public $SystemLockedTimeStamp;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofmerchantinfo
    	*/
    	public $AssignedMerchants;

    	/**
    	* @var int
    	*/
    	public $LockCount;

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var string
    	*/
    	public $LastName;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofidentitymetadata
    	*/
    	public $Identities;

    	/**
    	* @var boolean
    	*/
    	public $IsAdminLocked;

    	/**
    	* @var string
    	*/
    	public $Password;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\MerchantResponse')){

    class MerchantResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofmerchantmetadata
    	*/
    	public $Merchants;

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

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\MerchantMetaData')){

    class MerchantMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SalesChannel;

    	/**
    	* @var guid
    	*/
    	public $IdentityGuid;

    	/**
    	* @var string
    	*/
    	public $FriendlyName;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var dateTime
    	*/
    	public $UpdatedDate;

    	/**
    	* @var dateTime
    	*/
    	public $CreatedDate;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Roles;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceKeys;

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

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\RoleClaimMetaData')){

    class RoleClaimMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RoleName;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofclaimmetadata
    	*/
    	public $Claims;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\PaymentApplicationQueryParameters')){

    class PaymentApplicationQueryParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SalesChannel;

    	/**
    	* @var string
    	*/
    	public $Region;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\UserResponse')){

    class UserResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofusercredmetadata
    	*/
    	public $Users;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\PaymentApplicationResponse')){

    class PaymentApplicationResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofpaymentapplicationmetadata
    	*/
    	public $PaymentApplications;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\MerchantInfo')){

    class MerchantInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $FriendlyName;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofkeyvalueofstringstring
    	*/
    	public $MerchantMetaData;

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

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\PaymentApplicationMetaData')){

    class PaymentApplicationMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $FriendlyName;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Capture')){

    class Capture extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\CwsReturn')){

    class CwsReturn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDateTime;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Manage')){

    class Manage extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Undo')){

    class Undo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Adjust')){

    class Adjust extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Resubmit')){

    class Resubmit extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $CVV;

    	/**
    	* @var ResubmitReason
    	*/
    	public $ResubmitReason;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

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

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSValidationErrorFault')){

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

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault')){

    class CWSBaseFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TransactionState
    	*/
    	public $TransactionState;

    	/**
    	* @var int
    	*/
    	public $ErrorID;

    	/**
    	* @var string
    	*/
    	public $BatchId;

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

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SignOn')){

    class SignOn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\merchantinfo
    	*/
    	public $MerchantInfo;

    	/**
    	* @var string
    	*/
    	public $FederatedIdentityToken;

    	/**
    	* @var string
    	*/
    	public $Domain;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SubmitLogo')){

    class SubmitLogo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var TypeFileType
    	*/
    	public $FileType;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $Logo;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\TransactionRequest')){

    class TransactionRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transactiontenderdata
    	*/
    	public $TransactionTenderData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction')){

    class ChangeTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions')){

    class CaptureTransactions extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\FederatedSignOn')){

    class FederatedSignOn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ExternalDomainToken;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\DelegatedSignOn')){

    class DelegatedSignOn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $OnBehalfOfServiceKey;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReceiptRequest')){

    class ReceiptRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $Language;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile')){

    class SubmitTransactionWithProfile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Authentication')){

    class Authentication extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AuthnRequest;

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

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction')){

    class SubmitTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

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

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardReturn')){

    class BankcardReturn extends \Evosnap\Cws\V2\I0\Transactions\CwsReturn {

    	public function __construct($type = 'BankcardReturn, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueReturn')){

    class StoredValueReturn extends \Evosnap\Cws\V2\I0\Transactions\CwsReturn {

    	public function __construct($type = 'StoredValueReturn, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Resubmit3DSecure')){

    class Resubmit3DSecure extends \Evosnap\Cws\V2\I0\Transactions\Resubmit {

    	public function __construct($type = 'Resubmit3DSecure, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $PaymentAuthorizationResponse;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardUndo')){

    class BankcardUndo extends \Evosnap\Cws\V2\I0\Transactions\Undo {

    	public function __construct($type = 'BankcardUndo, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var Reason
    	*/
    	public $UndoReason;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var boolean
    	*/
    	public $ForceVoid;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var PINDebitUndoReason
    	*/
    	public $PINDebitReason;

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

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCapture')){

    class BankcardCapture extends \Evosnap\Cws\V2\I0\Transactions\Capture {

    	public function __construct($type = 'BankcardCapture, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var ChargeType
    	*/
    	public $ChargeType;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var dateTime
    	*/
    	public $ShipDate;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueCapture')){

    class StoredValueCapture extends \Evosnap\Cws\V2\I0\Transactions\Capture {

    	public function __construct($type = 'StoredValueCapture, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardCapturePro')){

    class BankcardCapturePro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCapture {

    	public function __construct($type = 'BankcardCapturePro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\level2data
    	*/
    	public $Level2Data;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePartialCapture;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
    	*/
    	public $LineItemDetails;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\customerinfo
    	*/
    	public $ShippingData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardReturnPro')){

    class BankcardReturnPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardReturn {

    	public function __construct($type = 'BankcardReturnPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
    	*/
    	public $LineItemDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardCaptureResponsePro')){

    class BankcardCaptureResponsePro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCaptureResponse {

    	public function __construct($type = 'BankcardCaptureResponsePro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
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

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSConnectionFault')){

    class CWSConnectionFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSConnectionFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSOperationNotSupportedFault')){

    class CWSOperationNotSupportedFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSOperationNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSValidationResultFault')){

    class CWSValidationResultFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Faults\arrayofcwsvalidationerrorfault
    	*/
    	public $Errors;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSTransactionAlreadySettledFault')){

    class CWSTransactionAlreadySettledFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSTransactionAlreadySettledFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSTransactionServiceUnavailableFault')){

    class CWSTransactionServiceUnavailableFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSTransactionServiceUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSTransactionFailedFault')){

    class CWSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSExtendedDataNotSupportedFault')){

    class CWSExtendedDataNotSupportedFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSExtendedDataNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSInvalidOperationFault')){

    class CWSInvalidOperationFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSInvalidOperationFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSInvalidServiceInformationFault')){

    class CWSInvalidServiceInformationFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSInvalidServiceInformationFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSInvalidMessageFormatFault')){

    class CWSInvalidMessageFormatFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSInvalidMessageFormatFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSFault')){

    class CWSFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Faults\CWSDeserializationFault')){

    class CWSDeserializationFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSDeserializationFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllWithProfile')){

    class CaptureAllWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions {

    	public function __construct($type = 'CaptureAllWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var boolean
    	*/
    	public $ForceClose;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapture
    	*/
    	public $DifferenceData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelective')){

    class CaptureSelective extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions {

    	public function __construct($type = 'CaptureSelective, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapture
    	*/
    	public $DifferenceData;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAll')){

    class CaptureAll extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions {

    	public function __construct($type = 'CaptureAll, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var boolean
    	*/
    	public $ForceClose;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapture
    	*/
    	public $DifferenceData;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Acknowledge')){

    class Acknowledge extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Acknowledge, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ManageAccountById')){

    class ManageAccountById extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'ManageAccountById, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\manage
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Undo')){

    class Undo extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Undo, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\undo
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Adjust')){

    class Adjust extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Adjust, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\adjust
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Capture')){

    class Capture extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Capture, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\capture
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\DisburseWithProfile')){

    class DisburseWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'DisburseWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile')){

    class AuthorizeTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'AuthorizeTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnByIdWithProfile')){

    class ReturnByIdWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'ReturnByIdWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\cwsreturn
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ResubmitTransactionWithProfile')){

    class ResubmitTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'ResubmitTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ManageAccountWithProfile')){

    class ManageAccountWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'ManageAccountWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ResubmitTransaction')){

    class ResubmitTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'ResubmitTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\resubmit
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\DisburseTransaction')){

    class DisburseTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'DisburseTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnById')){

    class ReturnById extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'ReturnById, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\cwsreturn
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction')){

    class AuthorizeTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'AuthorizeTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ManageAccount')){

    class ManageAccount extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'ManageAccount, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\KeyTransaction')){

    class KeyTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'KeyTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueManage')){

    class StoredValueManage extends \Evosnap\Cws\V2\I0\Transactions\Manage {

    	public function __construct($type = 'StoredValueManage, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var boolean
    	*/
    	public $IsCashOut;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\carddata
    	*/
    	public $SourceCardData;

    	/**
    	* @var OperationType
    	*/
    	public $OperationType;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

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

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllAsync')){

    class CaptureAllAsync extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAll {

    	public function __construct($type = 'CaptureAllAsync, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnTransactionWithProfile')){

    class ReturnTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile {

    	public function __construct($type = 'ReturnTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeAndCaptureTransactionWithProfile')){

    class AuthorizeAndCaptureTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile {

    	public function __construct($type = 'AuthorizeAndCaptureTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllAsyncWithProfile')){

    class CaptureAllAsyncWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllWithProfile {

    	public function __construct($type = 'CaptureAllAsyncWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnTransaction')){

    class ReturnTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction {

    	public function __construct($type = 'ReturnTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeAndCaptureTransaction')){

    class AuthorizeAndCaptureTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction {

    	public function __construct($type = 'AuthorizeAndCaptureTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelectiveAsync')){

    class CaptureSelectiveAsync extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelective {

    	public function __construct($type = 'CaptureSelectiveAsync, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

