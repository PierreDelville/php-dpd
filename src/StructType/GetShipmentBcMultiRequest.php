<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcMultiRequest StructType
 * @subpackage Structs
 */
class GetShipmentBcMultiRequest extends ShipmentRequestBc
{
    /**
     * The LinkedType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LinkedType;
    /**
     * Constructor method for GetShipmentBcMultiRequest
     * @uses GetShipmentBcMultiRequest::setLinkedType()
     * @param string $linkedType
     */
    public function __construct($linkedType = null)
    {
        $this
            ->setLinkedType($linkedType);
    }
    /**
     * Get LinkedType value
     * @return string
     */
    public function getLinkedType()
    {
        return $this->LinkedType;
    }
    /**
     * Set LinkedType value
     * @uses \EnumType\ELinkedType::valueIsValid()
     * @uses \EnumType\ELinkedType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $linkedType
     * @return \StructType\GetShipmentBcMultiRequest
     */
    public function setLinkedType($linkedType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ELinkedType::valueIsValid($linkedType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ELinkedType', is_array($linkedType) ? implode(', ', $linkedType) : var_export($linkedType, true), implode(', ', \EnumType\ELinkedType::getValidValues())), __LINE__);
        }
        $this->LinkedType = $linkedType;
        return $this;
    }
}
