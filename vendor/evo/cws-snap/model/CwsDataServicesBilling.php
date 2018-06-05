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

namespace Evosnap\Cws\V2\I0\Dataservices\Billing\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Billing\Rest\BillingRequest')){

    class BillingRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Billing\querybillingeventparameters
    	*/
    	public $QueryBillingEventParameters;

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

namespace Evosnap\Cws\V2\I0\Dataservices\Billing;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Billing\BillingEventMetaData')){

    class BillingEventMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $UserName;

    	/**
    	* @var string
    	*/
    	public $EventType;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var dateTime
    	*/
    	public $EventTime;

    	/**
    	* @var string
    	*/
    	public $SourceId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $SourceName;

    	/**
    	* @var string
    	*/
    	public $WorkflowId;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Billing;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Billing\BillingBaseFault')){

    class BillingBaseFault extends \Evosnap\Cws\Model\BaseObject {

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

namespace Evosnap\Cws\V2\I0\Dataservices\Billing;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Billing\BillingEventDetail')){

    class BillingEventDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Billing\billingeventmetadata
    	*/
    	public $BillingEventMetaData;

    	/**
    	* @var string
    	*/
    	public $SerializedBillingData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Billing;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Billing\BillingEventSummary')){

    class BillingEventSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $EventCount;

    	/**
    	* @var string
    	*/
    	public $Breakdown2;

    	/**
    	* @var string
    	*/
    	public $SourceId;

    	/**
    	* @var string
    	*/
    	public $Breakdown;

    	/**
    	* @var string
    	*/
    	public $SourceName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Billing;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Billing\QueryBillingEventParameters')){

    class QueryBillingEventParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $MerchantProfileIds;

    	/**
    	* @var BreakdownType
    	*/
    	public $BreakdownType;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BillingEventSourceIds;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceKeys;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $EventDateRange;

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

namespace Evosnap\Cws\V2\I0\Dataservices\Billing;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Billing\BillingTransactionFailedFault')){

    class BillingTransactionFailedFault extends \Evosnap\Cws\V2\I0\Dataservices\Billing\BillingBaseFault {

    	public function __construct($type = 'BillingTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/Billing') {
    	    parent::__construct($type);
    	}

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

