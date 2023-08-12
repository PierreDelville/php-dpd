<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\BcDataExt
     */
    public $Shipment;
    /**
     * Constructor method for ShipmentBc
     * @uses ShipmentBc::setType()
     * @uses ShipmentBc::setShipment()
     * @param string $type
     * @param \Dpd\StructType\BcDataExt $shipment
     */
    public function __construct($type = null, \Dpd\StructType\BcDataExt $shipment = null)
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
     * @uses \Dpd\EnumType\Etype::valueIsValid()
     * @uses \Dpd\EnumType\Etype::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Dpd\StructType\ShipmentBc
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\Etype::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\Etype', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Dpd\EnumType\Etype::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Shipment value
     * @return \Dpd\StructType\BcDataExt|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \Dpd\StructType\BcDataExt $shipment
     * @return \Dpd\StructType\ShipmentBc
     */
    public function setShipment(\Dpd\StructType\BcDataExt $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
}
