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

namespace Evosnap\Cws\V2\I0\Dataservices\Businessintelligence;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Businessintelligence\QueryCustomerTransactionsParameters')){

    class QueryCustomerTransactionsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $TransactionDateRange;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Businessintelligence;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Businessintelligence\TransactionsResponse')){

    class TransactionsResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Businessintelligence\arrayoftransactioninfo
    	*/
    	public $Transactions;

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

namespace Evosnap\Cws\V2\I0\Dataservices\Businessintelligence;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Businessintelligence\TransactionInfo')){

    class TransactionInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $TransactionClass;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

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

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\QueryCustomersParameters')){

    class QueryCustomersParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Memberships;

    	/**
    	* @var TypeMaritalStatus
    	*/
    	public $MaritalStatus;

    	/**
    	* @var boolean
    	*/
    	public $LimitToCustomersWithoutTransactions;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $PostalCodes;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $BirthDateRange;

    	/**
    	* @var TypeGender
    	*/
    	public $Gender;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
    	*/
    	public $CustomerId;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CustomerReferenceIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayoftypeinteresttype
    	*/
    	public $Interests;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\MerchantDetail')){

    class MerchantDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\merchant
    	*/
    	public $Merchant;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerSummaryResponse')){

    class CustomerSummaryResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomersummary
    	*/
    	public $CustomerSummaries;

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

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerDetailResponse')){

    class CustomerDetailResponse extends \Evosnap\Cws\Model\BaseObject {

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
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomerdetail
    	*/
    	public $CustomerDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\UniqueConstraint')){

    class UniqueConstraint extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $MerchantReferenceId;

    	/**
    	* @var boolean
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var boolean
    	*/
    	public $EmailAddress;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerProfile')){

    class CustomerProfile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Memberships;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofpaymentdatainfo
    	*/
    	public $PaymentData;

    	/**
    	* @var boolean
    	*/
    	public $EmailNotifications;

    	/**
    	* @var boolean
    	*/
    	public $IsActive;

    	/**
    	* @var TypeGender
    	*/
    	public $Gender;

    	/**
    	* @var dateTime
    	*/
    	public $DateMembershipsVerified;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var dateTime
    	*/
    	public $Birthdate;

    	/**
    	* @var string
    	*/
    	public $EmailAddress;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayoftypeinteresttype
    	*/
    	public $Interests;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
    	*/
    	public $Name;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofaddressinfo
    	*/
    	public $Addresses;

    	/**
    	* @var string
    	*/
    	public $OAuthToken;

    	/**
    	* @var TypeMaritalStatus
    	*/
    	public $MaritalStatus;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofinternationaladdressinfo
    	*/
    	public $InternationalAddresses;

    	/**
    	* @var boolean
    	*/
    	public $SMSNotifcations;

    	/**
    	* @var string
    	*/
    	public $MerchantCustomerId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerId')){

    class CustomerId extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var string
    	*/
    	public $MerchantCustomerId;

    	/**
    	* @var string
    	*/
    	public $EmailAddress;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerDetail')){

    class CustomerDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $LastProcessed;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var TypeConsent
    	*/
    	public $CustomerConsent;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $ReceiptLanguage;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerprofile
    	*/
    	public $CustomerProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\AddressInfo')){

    class AddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $HouseNumber;

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
    	* @var TypeAddressType
    	*/
    	public $AddressType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerSummary')){

    class CustomerSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $LastProcessed;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $ReceiptLanguage;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var string
    	*/
    	public $MerchantCustomerId;

    	/**
    	* @var string
    	*/
    	public $EmailAddress;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\NameInfo')){

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

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\Merchant')){

    class Merchant extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\internationaladdressinfo
    	*/
    	public $InternationalAddress;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var string
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\InternationalAddressInfo')){

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

    	/**
    	* @var TypeAddressType
    	*/
    	public $AddressType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerInfo')){

    class CustomerInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Company;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var string
    	*/
    	public $LastName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Order')){

    class Order extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ShipmentId;

    	/**
    	* @var string
    	*/
    	public $ShipMethod;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofitem
    	*/
    	public $OrderItems;

    	/**
    	* @var string
    	*/
    	public $CustomerCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerinfo
    	*/
    	public $BillingData;

    	/**
    	* @var string
    	*/
    	public $PromotionCode;

    	/**
    	* @var boolean
    	*/
    	public $Enable3D;

    	/**
    	* @var string
    	*/
    	public $ShipCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\tax
    	*/
    	public $Tax;

    	/**
    	* @var string
    	*/
    	public $TaxExemptNumber;

    	/**
    	* @var decimal
    	*/
    	public $DutyAmount;

    	/**
    	* @var decimal
    	*/
    	public $SubTotal;

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var IsTaxExempt
    	*/
    	public $TaxExempt;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofitemizedtax
    	*/
    	public $ItemizedTaxes;

    	/**
    	* @var decimal
    	*/
    	public $ShippingTotal;

    	/**
    	* @var decimal
    	*/
    	public $DiscountTotal;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerinfo
    	*/
    	public $ShippingData;

    	/**
    	* @var dateTime
    	*/
    	public $OrderTimeStamp;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\ProcessingResponse')){

    class ProcessingResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var Status
    	*/
    	public $Status;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    	/**
    	* @var string
    	*/
    	public $StatusCode;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    	/**
    	* @var string
    	*/
    	public $StatusMessage;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\InvoiceResponse')){

    class InvoiceResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofinvoicedetail
    	*/
    	public $Invoices;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalFound;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Invoice')){

    class Invoice extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\order
    	*/
    	public $Order;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
    	*/
    	public $PaymentData;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $MerchantInvoiceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\automationinfo
    	*/
    	public $AutomationInfo;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Tax')){

    class Tax extends \Evosnap\Cws\Model\BaseObject {

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

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\QueryInvoiceParameters')){

    class QueryInvoiceParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    	/**
    	* @var string
    	*/
    	public $MerchantInvoiceId;

    	/**
    	* @var InvoiceState
    	*/
    	public $InvoiceState;

    	/**
    	* @var string
    	*/
    	public $SubscriptionReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\QuerySubscriptionParameters')){

    class QuerySubscriptionParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var SubscriptionState
    	*/
    	public $SubscriptionState;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var string
    	*/
    	public $MerchantSubscriptionId;

    	/**
    	* @var string
    	*/
    	public $SubscriptionReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\PaymentDataInfo')){

    class PaymentDataInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $PaymentRoutingNumber;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountExpiration;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountNumber;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountName;

    	/**
    	* @var TypePaymentType
    	*/
    	public $PaymentType;

    	/**
    	* @var TypeBankAccountType
    	*/
    	public $BankAccountType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\ItemizedTax')){

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

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Item')){

    class Item extends \Evosnap\Cws\Model\BaseObject {

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
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\tax
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

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\SubscriptionResponse')){

    class SubscriptionResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofsubscriptiondetail
    	*/
    	public $Subscriptions;

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
    	public $TotalFound;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\AutomationInfo')){

    class AutomationInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $ProcessPayment;

    	/**
    	* @var boolean
    	*/
    	public $EmailInvoice;

    	/**
    	* @var boolean
    	*/
    	public $NoAutomation;

    	/**
    	* @var boolean
    	*/
    	public $CreateInvoice;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\ProcessingInformation')){

    class ProcessingInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
    	*/
    	public $PaymentDataInfo;

    	/**
    	* @var TypeTransactionType
    	*/
    	public $TransactionType;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\automationinfo
    	*/
    	public $AutomationInfo;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Subscription')){

    class Subscription extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $TotalTrialInvoices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\order
    	*/
    	public $Order;

    	/**
    	* @var int
    	*/
    	public $IntervalLength;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
    	*/
    	public $PaymentData;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var dateTime
    	*/
    	public $NextProcessingDate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var boolean
    	*/
    	public $AutoRenew;

    	/**
    	* @var decimal
    	*/
    	public $TrialAmount;

    	/**
    	* @var string
    	*/
    	public $MerchantSubscriptionId;

    	/**
    	* @var dateTime
    	*/
    	public $EndDate;

    	/**
    	* @var dateTime
    	*/
    	public $StartDate;

    	/**
    	* @var TypeIntervalUnit
    	*/
    	public $IntervalUnit;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var int
    	*/
    	public $IntervalCount;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Fault\CMSValidationError')){

    class CMSValidationError extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RuleMessage;

    	/**
    	* @var CMSValidationError_EErrorType
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

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault')){

    class CMSBaseFault extends \Evosnap\Cws\Model\BaseObject {

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

    	/**
    	* @var string
    	*/
    	public $TransactionID;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryRewardsProgramParameters')){

    class QueryRewardsProgramParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreationDate;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $RewardProgramNames;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\DistributionListDetail')){

    class DistributionListDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\distributionlist
    	*/
    	public $DistributionList;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\Promotion')){

    class Promotion extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Memberships;

    	/**
    	* @var boolean
    	*/
    	public $IsTemplate;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var decimal
    	*/
    	public $Discount;

    	/**
    	* @var string
    	*/
    	public $PromotionCode;

    	/**
    	* @var boolean
    	*/
    	public $IsValidWithOtherPromotions;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\promotionitem
    	*/
    	public $Item;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var dateTime
    	*/
    	public $ExpirationDate;

    	/**
    	* @var TypeDiscountType
    	*/
    	public $DiscountType;

    	/**
    	* @var boolean
    	*/
    	public $IsOneTimeOffer;

    	/**
    	* @var TypeTargetType
    	*/
    	public $TargetType;

    	/**
    	* @var string
    	*/
    	public $DistributionListName;

    	/**
    	* @var boolean
    	*/
    	public $NewCustomerOnly;

    	/**
    	* @var TypeBirthdayPromotionType
    	*/
    	public $BirthdayPromotionType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\PromotionItem')){

    class PromotionItem extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var string
    	*/
    	public $Category;

    	/**
    	* @var decimal
    	*/
    	public $Price;

    	/**
    	* @var string
    	*/
    	public $SubCategory;

    	/**
    	* @var string
    	*/
    	public $SKU;

    	/**
    	* @var string
    	*/
    	public $SmallIconUrl;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryCustomerSavingsParameters')){

    class QueryCustomerSavingsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $TransactionDateRange;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\RewardsProgramResponse')){

    class RewardsProgramResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofrewardsprogramdetail
    	*/
    	public $RewardsPrograms;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CustomerSavingsResponse')){

    class CustomerSavingsResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofcustomersavings
    	*/
    	public $CustomerSavings;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryPromotionsParameters')){

    class QueryPromotionsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $IncludeInactive;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $SKUs;

    	/**
    	* @var boolean
    	*/
    	public $QueryTemplates;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $ExpirationDateRange;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $PromotionCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
    	*/
    	public $CustomerName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\PromotionDetail')){

    class PromotionDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId_x0020_;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\promotion
    	*/
    	public $Promotion;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryDistributionListParameters')){

    class QueryDistributionListParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $DistributionListName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CampaignResponse')){

    class CampaignResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofcampaigndetail
    	*/
    	public $Campaigns;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\PromotionResponse')){

    class PromotionResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofmerchantdetail
    	*/
    	public $Merchants;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofpromotiondetail
    	*/
    	public $Promotions;

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomersummary
    	*/
    	public $Customers;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CustomerSavings')){

    class CustomerSavings extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $MerchantName;

    	/**
    	* @var decimal
    	*/
    	public $DiscountedAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryCampaignParameters')){

    class QueryCampaignParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CampaignIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $SentDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CampaignNames;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\RewardsProgram')){

    class RewardsProgram extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $StartDate;

    	/**
    	* @var decimal
    	*/
    	public $MinimumPurchaseAmount;

    	/**
    	* @var int
    	*/
    	public $RequiredPurchaseCount;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePurchasesBasedOnAmount;

    	/**
    	* @var string
    	*/
    	public $RewardsProgramName;

    	/**
    	* @var dateTime
    	*/
    	public $EndDate;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CampaignTestData')){

    class CampaignTestData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TelephoneNumbers;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $EmailAddresses;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CampaignDetail')){

    class CampaignDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $DateSent;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $CampaignName;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var dateTime
    	*/
    	public $DateCreated;

    	/**
    	* @var string
    	*/
    	public $CampaignReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\RewardsProgramDetail')){

    class RewardsProgramDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\rewardsprogram
    	*/
    	public $RewardsProgram;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\DistributionList')){

    class DistributionList extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $DistributionListName;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CustomerReferenceIds;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\DistributionListResponse')){

    class DistributionListResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofdistributionlistdetail
    	*/
    	public $DistribuionLists;

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

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

namespace Evosnap\Cws\V2\I0\Dataservices;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\DataServicesUnavailableFault')){

    class DataServicesUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\DSBaseFault {

    	public function __construct($type = 'DataServicesUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSCustomerAlreadyExistsFault')){

    class CMSCustomerAlreadyExistsFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSCustomerAlreadyExistsFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSUnavailableFault')){

    class CMSUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSTransactionFailedFault')){

    class CMSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSUnknownServiceKeyFault')){

    class CMSUnknownServiceKeyFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSUnknownServiceKeyFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Fault\CMSValidationResultFault')){

    class CMSValidationResultFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Fault') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Fault\arrayofcmsvalidationerror
    	*/
    	public $Errors;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\InvoiceDetail')){

    class InvoiceDetail extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Invoice {

    	public function __construct($type = 'InvoiceDetail, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Subscriptions') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var dateTime
    	*/
    	public $LastUpdatedDate;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var dateTime
    	*/
    	public $CreatedDate;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var int
    	*/
    	public $TransactionAttempts;

    	/**
    	* @var dateTime
    	*/
    	public $DateLastAttempted;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    	/**
    	* @var InvoiceState
    	*/
    	public $InvoiceState;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\SubscriptionDetail')){

    class SubscriptionDetail extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Subscription {

    	public function __construct($type = 'SubscriptionDetail, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Subscriptions') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var dateTime
    	*/
    	public $LastUpdatedDate;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var SubscriptionState
    	*/
    	public $SubscriptionState;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var int
    	*/
    	public $InvoiceCount;

    	/**
    	* @var dateTime
    	*/
    	public $CreatedDate;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    	/**
    	* @var int
    	*/
    	public $TrialInvoiceCount;

    	/**
    	* @var string
    	*/
    	public $SubscriptionReferenceId;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

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

