<?php

namespace Dpd\StructType;

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
     * @uses \Dpd\EnumType\ELinkedType::valueIsValid()
     * @uses \Dpd\EnumType\ELinkedType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $linkedType
     * @return \Dpd\StructType\GetShipmentBcMultiRequest
     */
    public function setLinkedType($linkedType = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\ELinkedType::valueIsValid($linkedType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\ELinkedType', is_array($linkedType) ? implode(', ', $linkedType) : var_export($linkedType, true), implode(', ', \Dpd\EnumType\ELinkedType::getValidValues())), __LINE__);
        }
        $this->LinkedType = $linkedType;
        return $this;
    }
}
