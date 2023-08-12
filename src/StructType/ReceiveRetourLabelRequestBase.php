<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiveRetourLabelRequestBase StructType
 * @subpackage Structs
 */
abstract class ReceiveRetourLabelRequestBase extends ReceiveLabelRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RetourServices
     */
    public $services;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $weight;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $shipperaddress;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $receiveraddress;
    /**
     * The customLabelText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $customLabelText;
    /**
     * Constructor method for ReceiveRetourLabelRequestBase
     * @uses ReceiveRetourLabelRequestBase::setServices()
     * @uses ReceiveRetourLabelRequestBase::setWeight()
     * @uses ReceiveRetourLabelRequestBase::setShipperaddress()
     * @uses ReceiveRetourLabelRequestBase::setReceiveraddress()
     * @uses ReceiveRetourLabelRequestBase::setCustomLabelText()
     * @param \StructType\RetourServices $services
     * @param string $weight
     * @param \StructType\Address $shipperaddress
     * @param \StructType\Address $receiveraddress
     * @param string $customLabelText
     */
    public function __construct(\StructType\RetourServices $services = null, $weight = null, \StructType\Address $shipperaddress = null, \StructType\Address $receiveraddress = null, $customLabelText = null)
    {
        $this
            ->setServices($services)
            ->setWeight($weight)
            ->setShipperaddress($shipperaddress)
            ->setReceiveraddress($receiveraddress)
            ->setCustomLabelText($customLabelText);
    }
    /**
     * Get services value
     * @return \StructType\RetourServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \StructType\RetourServices $services
     * @return \StructType\ReceiveRetourLabelRequestBase
     */
    public function setServices(\StructType\RetourServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \StructType\ReceiveRetourLabelRequestBase
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
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
     * @return \StructType\ReceiveRetourLabelRequestBase
     */
    public function setShipperaddress(\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
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
     * @return \StructType\ReceiveRetourLabelRequestBase
     */
    public function setReceiveraddress(\StructType\Address $receiveraddress = null)
    {
        $this->receiveraddress = $receiveraddress;
        return $this;
    }
    /**
     * Get customLabelText value
     * @return string|null
     */
    public function getCustomLabelText()
    {
        return $this->customLabelText;
    }
    /**
     * Set customLabelText value
     * @param string $customLabelText
     * @return \StructType\ReceiveRetourLabelRequestBase
     */
    public function setCustomLabelText($customLabelText = null)
    {
        // validation for constraint: string
        if (!is_null($customLabelText) && !is_string($customLabelText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabelText, true), gettype($customLabelText)), __LINE__);
        }
        $this->customLabelText = $customLabelText;
        return $this;
    }
}
