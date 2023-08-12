<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAtCustomerRequestBase StructType
 * @subpackage Structs
 */
class PickupAtCustomerRequestBase extends AbstractStructBase
{
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $shipperaddress;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Customer
     */
    public $customer;
    /**
     * The pick_date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pick_date;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PickupData
     */
    public $data;
    /**
     * Constructor method for PickupAtCustomerRequestBase
     * @uses PickupAtCustomerRequestBase::setShipperaddress()
     * @uses PickupAtCustomerRequestBase::setCustomer()
     * @uses PickupAtCustomerRequestBase::setPick_date()
     * @uses PickupAtCustomerRequestBase::setData()
     * @param \StructType\Address $shipperaddress
     * @param \StructType\Customer $customer
     * @param string $pick_date
     * @param \StructType\PickupData $data
     */
    public function __construct(\StructType\Address $shipperaddress = null, \StructType\Customer $customer = null, $pick_date = null, \StructType\PickupData $data = null)
    {
        $this
            ->setShipperaddress($shipperaddress)
            ->setCustomer($customer)
            ->setPick_date($pick_date)
            ->setData($data);
    }
    /**
     * Get shipperaddress value
     * @return \StructType\Address|null
     */
    public function getShipperaddress()
    {
        return $this->shipperaddress;
    }
    /**
     * Set shipperaddress value
     * @param \StructType\Address $shipperaddress
     * @return \StructType\PickupAtCustomerRequestBase
     */
    public function setShipperaddress(\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
        return $this;
    }
    /**
     * Get customer value
     * @return \StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \StructType\Customer $customer
     * @return \StructType\PickupAtCustomerRequestBase
     */
    public function setCustomer(\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
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
     * @return \StructType\PickupAtCustomerRequestBase
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
     * Get data value
     * @return \StructType\PickupData|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \StructType\PickupData $data
     * @return \StructType\PickupAtCustomerRequestBase
     */
    public function setData(\StructType\PickupData $data = null)
    {
        $this->data = $data;
        return $this;
    }
}
