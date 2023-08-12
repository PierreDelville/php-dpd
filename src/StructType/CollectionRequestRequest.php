<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectionRequestRequest StructType
 * @subpackage Structs
 */
class CollectionRequestRequest extends AbstractStructBase
{
    /**
     * The customer_countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $customer_countrycode;
    /**
     * The customer_centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $customer_centernumber;
    /**
     * The customer_number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $customer_number;
    /**
     * The parcel_count
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $parcel_count;
    /**
     * The dayCheckDone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $dayCheckDone;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $receiveraddress;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $shipperaddress;
    /**
     * The pick_date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pick_date;
    /**
     * The time_from
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $time_from;
    /**
     * The time_to
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $time_to;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $remark;
    /**
     * The pick_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pick_remark;
    /**
     * The delivery_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $delivery_remark;
    /**
     * The referencenumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $referencenumber;
    /**
     * The reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference2;
    /**
     * The reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference3;
    /**
     * The reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference4;
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\CollectionRequestServices
     */
    public $services;
    /**
     * Constructor method for CollectionRequestRequest
     * @uses CollectionRequestRequest::setCustomer_countrycode()
     * @uses CollectionRequestRequest::setCustomer_centernumber()
     * @uses CollectionRequestRequest::setCustomer_number()
     * @uses CollectionRequestRequest::setParcel_count()
     * @uses CollectionRequestRequest::setDayCheckDone()
     * @uses CollectionRequestRequest::setReceiveraddress()
     * @uses CollectionRequestRequest::setShipperaddress()
     * @uses CollectionRequestRequest::setPick_date()
     * @uses CollectionRequestRequest::setTime_from()
     * @uses CollectionRequestRequest::setTime_to()
     * @uses CollectionRequestRequest::setRemark()
     * @uses CollectionRequestRequest::setPick_remark()
     * @uses CollectionRequestRequest::setDelivery_remark()
     * @uses CollectionRequestRequest::setReferencenumber()
     * @uses CollectionRequestRequest::setReference2()
     * @uses CollectionRequestRequest::setReference3()
     * @uses CollectionRequestRequest::setReference4()
     * @uses CollectionRequestRequest::setServices()
     * @param int $customer_countrycode
     * @param int $customer_centernumber
     * @param int $customer_number
     * @param int $parcel_count
     * @param bool $dayCheckDone
     * @param \Dpd\StructType\Address $receiveraddress
     * @param \Dpd\StructType\Address $shipperaddress
     * @param string $pick_date
     * @param string $time_from
     * @param string $time_to
     * @param string $remark
     * @param string $pick_remark
     * @param string $delivery_remark
     * @param string $referencenumber
     * @param string $reference2
     * @param string $reference3
     * @param string $reference4
     * @param \Dpd\StructType\CollectionRequestServices $services
     */
    public function __construct($customer_countrycode = null, $customer_centernumber = null, $customer_number = null, $parcel_count = null, $dayCheckDone = null, \Dpd\StructType\Address $receiveraddress = null, \Dpd\StructType\Address $shipperaddress = null, $pick_date = null, $time_from = null, $time_to = null, $remark = null, $pick_remark = null, $delivery_remark = null, $referencenumber = null, $reference2 = null, $reference3 = null, $reference4 = null, \Dpd\StructType\CollectionRequestServices $services = null)
    {
        $this
            ->setCustomer_countrycode($customer_countrycode)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomer_number($customer_number)
            ->setParcel_count($parcel_count)
            ->setDayCheckDone($dayCheckDone)
            ->setReceiveraddress($receiveraddress)
            ->setShipperaddress($shipperaddress)
            ->setPick_date($pick_date)
            ->setTime_from($time_from)
            ->setTime_to($time_to)
            ->setRemark($remark)
            ->setPick_remark($pick_remark)
            ->setDelivery_remark($delivery_remark)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setServices($services);
    }
    /**
     * Get customer_countrycode value
     * @return int
     */
    public function getCustomer_countrycode()
    {
        return $this->customer_countrycode;
    }
    /**
     * Set customer_countrycode value
     * @param int $customer_countrycode
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setCustomer_countrycode($customer_countrycode = null)
    {
        // validation for constraint: int
        if (!is_null($customer_countrycode) && !(is_int($customer_countrycode) || ctype_digit($customer_countrycode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_countrycode, true), gettype($customer_countrycode)), __LINE__);
        }
        $this->customer_countrycode = $customer_countrycode;
        return $this;
    }
    /**
     * Get customer_centernumber value
     * @return int
     */
    public function getCustomer_centernumber()
    {
        return $this->customer_centernumber;
    }
    /**
     * Set customer_centernumber value
     * @param int $customer_centernumber
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setCustomer_centernumber($customer_centernumber = null)
    {
        // validation for constraint: int
        if (!is_null($customer_centernumber) && !(is_int($customer_centernumber) || ctype_digit($customer_centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_centernumber, true), gettype($customer_centernumber)), __LINE__);
        }
        $this->customer_centernumber = $customer_centernumber;
        return $this;
    }
    /**
     * Get customer_number value
     * @return int
     */
    public function getCustomer_number()
    {
        return $this->customer_number;
    }
    /**
     * Set customer_number value
     * @param int $customer_number
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setCustomer_number($customer_number = null)
    {
        // validation for constraint: int
        if (!is_null($customer_number) && !(is_int($customer_number) || ctype_digit($customer_number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_number, true), gettype($customer_number)), __LINE__);
        }
        $this->customer_number = $customer_number;
        return $this;
    }
    /**
     * Get parcel_count value
     * @return int
     */
    public function getParcel_count()
    {
        return $this->parcel_count;
    }
    /**
     * Set parcel_count value
     * @param int $parcel_count
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setParcel_count($parcel_count = null)
    {
        // validation for constraint: int
        if (!is_null($parcel_count) && !(is_int($parcel_count) || ctype_digit($parcel_count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parcel_count, true), gettype($parcel_count)), __LINE__);
        }
        $this->parcel_count = $parcel_count;
        return $this;
    }
    /**
     * Get dayCheckDone value
     * @return bool
     */
    public function getDayCheckDone()
    {
        return $this->dayCheckDone;
    }
    /**
     * Set dayCheckDone value
     * @param bool $dayCheckDone
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setDayCheckDone($dayCheckDone = null)
    {
        // validation for constraint: boolean
        if (!is_null($dayCheckDone) && !is_bool($dayCheckDone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dayCheckDone, true), gettype($dayCheckDone)), __LINE__);
        }
        $this->dayCheckDone = $dayCheckDone;
        return $this;
    }
    /**
     * Get receiveraddress value
     * @return \Dpd\StructType\Address|null
     */
    public function getReceiveraddress()
    {
        return $this->receiveraddress;
    }
    /**
     * Set receiveraddress value
     * @param \Dpd\StructType\Address $receiveraddress
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setReceiveraddress(\Dpd\StructType\Address $receiveraddress = null)
    {
        $this->receiveraddress = $receiveraddress;
        return $this;
    }
    /**
     * Get shipperaddress value
     * @return \Dpd\StructType\Address|null
     */
    public function getShipperaddress()
    {
        return $this->shipperaddress;
    }
    /**
     * Set shipperaddress value
     * @param \Dpd\StructType\Address $shipperaddress
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setShipperaddress(\Dpd\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
        return $this;
    }
    /**
     * Get pick_date value
     * @return string|null
     */
    public function getPick_date()
    {
        return $this->pick_date;
    }
    /**
     * Set pick_date value
     * @param string $pick_date
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setPick_date($pick_date = null)
    {
        // validation for constraint: string
        if (!is_null($pick_date) && !is_string($pick_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pick_date, true), gettype($pick_date)), __LINE__);
        }
        $this->pick_date = $pick_date;
        return $this;
    }
    /**
     * Get time_from value
     * @return string|null
     */
    public function getTime_from()
    {
        return $this->time_from;
    }
    /**
     * Set time_from value
     * @param string $time_from
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setTime_from($time_from = null)
    {
        // validation for constraint: string
        if (!is_null($time_from) && !is_string($time_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_from, true), gettype($time_from)), __LINE__);
        }
        $this->time_from = $time_from;
        return $this;
    }
    /**
     * Get time_to value
     * @return string|null
     */
    public function getTime_to()
    {
        return $this->time_to;
    }
    /**
     * Set time_to value
     * @param string $time_to
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setTime_to($time_to = null)
    {
        // validation for constraint: string
        if (!is_null($time_to) && !is_string($time_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_to, true), gettype($time_to)), __LINE__);
        }
        $this->time_to = $time_to;
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        return $this;
    }
    /**
     * Get pick_remark value
     * @return string|null
     */
    public function getPick_remark()
    {
        return $this->pick_remark;
    }
    /**
     * Set pick_remark value
     * @param string $pick_remark
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setPick_remark($pick_remark = null)
    {
        // validation for constraint: string
        if (!is_null($pick_remark) && !is_string($pick_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pick_remark, true), gettype($pick_remark)), __LINE__);
        }
        $this->pick_remark = $pick_remark;
        return $this;
    }
    /**
     * Get delivery_remark value
     * @return string|null
     */
    public function getDelivery_remark()
    {
        return $this->delivery_remark;
    }
    /**
     * Set delivery_remark value
     * @param string $delivery_remark
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setDelivery_remark($delivery_remark = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_remark) && !is_string($delivery_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delivery_remark, true), gettype($delivery_remark)), __LINE__);
        }
        $this->delivery_remark = $delivery_remark;
        return $this;
    }
    /**
     * Get referencenumber value
     * @return string|null
     */
    public function getReferencenumber()
    {
        return $this->referencenumber;
    }
    /**
     * Set referencenumber value
     * @param string $referencenumber
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setReferencenumber($referencenumber = null)
    {
        // validation for constraint: string
        if (!is_null($referencenumber) && !is_string($referencenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencenumber, true), gettype($referencenumber)), __LINE__);
        }
        $this->referencenumber = $referencenumber;
        return $this;
    }
    /**
     * Get reference2 value
     * @return string|null
     */
    public function getReference2()
    {
        return $this->reference2;
    }
    /**
     * Set reference2 value
     * @param string $reference2
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setReference2($reference2 = null)
    {
        // validation for constraint: string
        if (!is_null($reference2) && !is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), gettype($reference2)), __LINE__);
        }
        $this->reference2 = $reference2;
        return $this;
    }
    /**
     * Get reference3 value
     * @return string|null
     */
    public function getReference3()
    {
        return $this->reference3;
    }
    /**
     * Set reference3 value
     * @param string $reference3
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setReference3($reference3 = null)
    {
        // validation for constraint: string
        if (!is_null($reference3) && !is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), gettype($reference3)), __LINE__);
        }
        $this->reference3 = $reference3;
        return $this;
    }
    /**
     * Get reference4 value
     * @return string|null
     */
    public function getReference4()
    {
        return $this->reference4;
    }
    /**
     * Set reference4 value
     * @param string $reference4
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setReference4($reference4 = null)
    {
        // validation for constraint: string
        if (!is_null($reference4) && !is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), gettype($reference4)), __LINE__);
        }
        $this->reference4 = $reference4;
        return $this;
    }
    /**
     * Get services value
     * @return \Dpd\StructType\CollectionRequestServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \Dpd\StructType\CollectionRequestServices $services
     * @return \Dpd\StructType\CollectionRequestRequest
     */
    public function setServices(\Dpd\StructType\CollectionRequestServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
