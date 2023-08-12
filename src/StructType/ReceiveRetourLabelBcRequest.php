<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiveRetourLabelBcRequest StructType
 * @subpackage Structs
 */
class ReceiveRetourLabelBcRequest extends ReceiveRetourLabelRequestBase
{
    /**
     * The shipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $shipmentNumber;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Customer
     */
    public $customer;
    /**
     * Constructor method for ReceiveRetourLabelBcRequest
     * @uses ReceiveRetourLabelBcRequest::setShipmentNumber()
     * @uses ReceiveRetourLabelBcRequest::setCustomer()
     * @param string $shipmentNumber
     * @param \StructType\Customer $customer
     */
    public function __construct($shipmentNumber = null, \StructType\Customer $customer = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setCustomer($customer);
    }
    /**
     * Get shipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }
    /**
     * Set shipmentNumber value
     * @param string $shipmentNumber
     * @return \StructType\ReceiveRetourLabelBcRequest
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), gettype($shipmentNumber)), __LINE__);
        }
        $this->shipmentNumber = $shipmentNumber;
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
     * @return \StructType\ReceiveRetourLabelBcRequest
     */
    public function setCustomer(\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
