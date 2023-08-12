<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentBc StructType
 * @subpackage Structs
 */
class ShipmentBc extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\BcDataExt
     */
    public $Shipment;
    /**
     * Constructor method for ShipmentBc
     * @uses ShipmentBc::setType()
     * @uses ShipmentBc::setShipment()
     * @param string $type
     * @param \StructType\BcDataExt $shipment
     */
    public function __construct($type = null, \StructType\BcDataExt $shipment = null)
    {
        $this
            ->setType($type)
            ->setShipment($shipment);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\Etype::valueIsValid()
     * @uses \EnumType\Etype::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\ShipmentBc
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Etype::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Etype', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\Etype::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Shipment value
     * @return \StructType\BcDataExt|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \StructType\BcDataExt $shipment
     * @return \StructType\ShipmentBc
     */
    public function setShipment(\StructType\BcDataExt $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
}
