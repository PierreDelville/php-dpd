<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiveLabelBcRequest StructType
 * @subpackage Structs
 */
class ReceiveLabelBcRequest extends ReceiveLabelRequestBase
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
     * @var \Dpd\StructType\Customer
     */
    public $customer;
    /**
     * Constructor method for ReceiveLabelBcRequest
     * @uses ReceiveLabelBcRequest::setShipmentNumber()
     * @uses ReceiveLabelBcRequest::setCustomer()
     * @param string $shipmentNumber
     * @param \Dpd\StructType\Customer $customer
     */
    public function __construct($shipmentNumber = null, \Dpd\StructType\Customer $customer = null)
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
     * @return \Dpd\StructType\ReceiveLabelBcRequest
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
     * @return \Dpd\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \Dpd\StructType\Customer $customer
     * @return \Dpd\StructType\ReceiveLabelBcRequest
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
