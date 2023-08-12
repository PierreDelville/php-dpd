<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Address
     */
    public $shipperaddress;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
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
     * @var \Dpd\StructType\PickupData
     */
    public $data;
    /**
     * Constructor method for PickupAtCustomerRequestBase
     * @uses PickupAtCustomerRequestBase::setShipperaddress()
     * @uses PickupAtCustomerRequestBase::setCustomer()
     * @uses PickupAtCustomerRequestBase::setPick_date()
     * @uses PickupAtCustomerRequestBase::setData()
     * @param \Dpd\StructType\Address $shipperaddress
     * @param \Dpd\StructType\Customer $customer
     * @param string $pick_date
     * @param \Dpd\StructType\PickupData $data
     */
    public function __construct(\Dpd\StructType\Address $shipperaddress = null, \Dpd\StructType\Customer $customer = null, $pick_date = null, \Dpd\StructType\PickupData $data = null)
    {
        $this
            ->setShipperaddress($shipperaddress)
            ->setCustomer($customer)
            ->setPick_date($pick_date)
            ->setData($data);
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
     * @return \Dpd\StructType\PickupAtCustomerRequestBase
     */
    public function setShipperaddress(\Dpd\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
        return $this;
    }
    /**
     * Get customer value
     * @return \Dpd\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \Dpd\StructType\Customer $customer
     * @return \Dpd\StructType\PickupAtCustomerRequestBase
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
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
     * @return \Dpd\StructType\PickupAtCustomerRequestBase
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
     * @return \Dpd\StructType\PickupData|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param \Dpd\StructType\PickupData $data
     * @return \Dpd\StructType\PickupAtCustomerRequestBase
     */
    public function setData(\Dpd\StructType\PickupData $data = null)
    {
        $this->data = $data;
        return $this;
    }
}
