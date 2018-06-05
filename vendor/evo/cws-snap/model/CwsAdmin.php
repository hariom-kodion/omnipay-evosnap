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

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\UserMetaData')){

    class UserMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $LastPasswordResetDate;

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
    	* @var boolean
    	*/
    	public $UserMustChangePassword;

    	/**
    	* @var dateTime
    	*/
    	public $LastLoginDate;

    	/**
    	* @var string
    	*/
    	public $UserCredentialGuid;

    	/**
    	* @var dateTime
    	*/
    	public $SystemLockedTimeStamp;

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
    	public $LastName;

    	/**
    	* @var boolean
    	*/
    	public $IsAdminLocked;

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

namespace Evosnap\Identity\I1\I0;

if(!class_exists('\Evosnap\Identity\I1\I0\STSUnavailableFault')){

    class STSUnavailableFault extends \Evosnap\Identity\I1\I0\BaseFault {

    	public function __construct($type = 'STSUnavailableFault, http://schemas.evosnap.com/Identity/1.0/') {
    	    parent::__construct($type);
    	}

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

