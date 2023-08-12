<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentEntry StructType
 * @subpackage Structs
 */
class GetShipmentEntry extends ShipmentDataExtendedBc
{
    /**
     * The LinkedShipmentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LinkedShipmentType;
    /**
     * Constructor method for GetShipmentEntry
     * @uses GetShipmentEntry::setLinkedShipmentType()
     * @param string $linkedShipmentType
     */
    public function __construct($linkedShipmentType = null)
    {
        $this
            ->setLinkedShipmentType($linkedShipmentType);
    }
    /**
     * Get LinkedShipmentType value
     * @return string
     */
    public function getLinkedShipmentType()
    {
        return $this->LinkedShipmentType;
    }
    /**
     * Set LinkedShipmentType value
     * @uses \EnumType\ELinkedShipmentType::valueIsValid()
     * @uses \EnumType\ELinkedShipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $linkedShipmentType
     * @return \StructType\GetShipmentEntry
     */
    public function setLinkedShipmentType($linkedShipmentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ELinkedShipmentType::valueIsValid($linkedShipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ELinkedShipmentType', is_array($linkedShipmentType) ? implode(', ', $linkedShipmentType) : var_export($linkedShipmentType, true), implode(', ', \EnumType\ELinkedShipmentType::getValidValues())), __LINE__);
        }
        $this->LinkedShipmentType = $linkedShipmentType;
        return $this;
    }
}
