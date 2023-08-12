<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RetourServices
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
     * @var \Dpd\StructType\Address
     */
    public $shipperaddress;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
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
     * @param \Dpd\StructType\RetourServices $services
     * @param string $weight
     * @param \Dpd\StructType\Address $shipperaddress
     * @param \Dpd\StructType\Address $receiveraddress
     * @param string $customLabelText
     */
    public function __construct(\Dpd\StructType\RetourServices $services = null, $weight = null, \Dpd\StructType\Address $shipperaddress = null, \Dpd\StructType\Address $receiveraddress = null, $customLabelText = null)
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
     * @return \Dpd\StructType\RetourServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \Dpd\StructType\RetourServices $services
     * @return \Dpd\StructType\ReceiveRetourLabelRequestBase
     */
    public function setServices(\Dpd\StructType\RetourServices $services = null)
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
     * @return \Dpd\StructType\ReceiveRetourLabelRequestBase
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
     * @return \Dpd\StructType\Address|null
     */
    public function getShipperaddress()
    {
        return $this->shipperaddress;
    }
    /**
     * Set shipperaddress value
     * @param \Dpd\StructType\Address $shipperaddress
     * @return \Dpd\StructType\ReceiveRetourLabelRequestBase
     */
    public function setShipperaddress(\Dpd\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
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
     * @return \Dpd\StructType\ReceiveRetourLabelRequestBase
     */
    public function setReceiveraddress(\Dpd\StructType\Address $receiveraddress = null)
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
     * @return \Dpd\StructType\ReceiveRetourLabelRequestBase
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
