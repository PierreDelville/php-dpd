<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDataBase StructType
 * @subpackage Structs
 */
class ShipmentDataBase extends AbstractStructBase
{
    /**
     * The customer_centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $customer_centernumber;
    /**
     * The customernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $customernumber;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $shipperaddress;
    /**
     * The customeraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $customeraddress;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $receiveraddress;
    /**
     * Constructor method for ShipmentDataBase
     * @uses ShipmentDataBase::setCustomer_centernumber()
     * @uses ShipmentDataBase::setCustomernumber()
     * @uses ShipmentDataBase::setShipperaddress()
     * @uses ShipmentDataBase::setCustomeraddress()
     * @uses ShipmentDataBase::setReceiveraddress()
     * @param string $customer_centernumber
     * @param string $customernumber
     * @param \StructType\Address $shipperaddress
     * @param \StructType\Address $customeraddress
     * @param \StructType\Address $receiveraddress
     */
    public function __construct($customer_centernumber = null, $customernumber = null, \StructType\Address $shipperaddress = null, \StructType\Address $customeraddress = null, \StructType\Address $receiveraddress = null)
    {
        $this
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomernumber($customernumber)
            ->setShipperaddress($shipperaddress)
            ->setCustomeraddress($customeraddress)
            ->setReceiveraddress($receiveraddress);
    }
    /**
     * Get customer_centernumber value
     * @return string|null
     */
    public function getCustomer_centernumber()
    {
        return $this->customer_centernumber;
    }
    /**
     * Set customer_centernumber value
     * @param string $customer_centernumber
     * @return \StructType\ShipmentDataBase
     */
    public function setCustomer_centernumber($customer_centernumber = null)
    {
        // validation for constraint: string
        if (!is_null($customer_centernumber) && !is_string($customer_centernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_centernumber, true), gettype($customer_centernumber)), __LINE__);
        }
        $this->customer_centernumber = $customer_centernumber;
        return $this;
    }
    /**
     * Get customernumber value
     * @return string|null
     */
    public function getCustomernumber()
    {
        return $this->customernumber;
    }
    /**
     * Set customernumber value
     * @param string $customernumber
     * @return \StructType\ShipmentDataBase
     */
    public function setCustomernumber($customernumber = null)
    {
        // validation for constraint: string
        if (!is_null($customernumber) && !is_string($customernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customernumber, true), gettype($customernumber)), __LINE__);
        }
        $this->customernumber = $customernumber;
        return $this;
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
     * @return \StructType\ShipmentDataBase
     */
    public function setShipperaddress(\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
        return $this;
    }
    /**
     * Get customeraddress value
     * @return \StructType\Address|null
     */
    public function getCustomeraddress()
    {
        return $this->customeraddress;
    }
    /**
     * Set customeraddress value
     * @param \StructType\Address $customeraddress
     * @return \StructType\ShipmentDataBase
     */
    public function setCustomeraddress(\StructType\Address $customeraddress = null)
    {
        $this->customeraddress = $customeraddress;
        return $this;
    }
    /**
     * Get receiveraddress value
     * @return \StructType\Address|null
     */
    public function getReceiveraddress()
    {
        return $this->receiveraddress;
    }
    /**
     * Set receiveraddress value
     * @param \StructType\Address $receiveraddress
     * @return \StructType\ShipmentDataBase
     */
    public function setReceiveraddress(\StructType\Address $receiveraddress = null)
    {
        $this->receiveraddress = $receiveraddress;
        return $this;
    }
}
