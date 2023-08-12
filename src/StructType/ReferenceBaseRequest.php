<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceBaseRequest StructType
 * @subpackage Structs
 */
class ReferenceBaseRequest extends RequestBase
{
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference;
    /**
     * The ShippingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingDate;
    /**
     * Constructor method for ReferenceBaseRequest
     * @uses ReferenceBaseRequest::setReference()
     * @uses ReferenceBaseRequest::setShippingDate()
     * @param string $reference
     * @param string $shippingDate
     */
    public function __construct($reference = null, $shippingDate = null)
    {
        $this
            ->setReference($reference)
            ->setShippingDate($shippingDate);
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param string $reference
     * @return \StructType\ReferenceBaseRequest
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get ShippingDate value
     * @return string|null
     */
    public function getShippingDate()
    {
        return $this->ShippingDate;
    }
    /**
     * Set ShippingDate value
     * @param string $shippingDate
     * @return \StructType\ReferenceBaseRequest
     */
    public function setShippingDate($shippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->ShippingDate = $shippingDate;
        return $this;
    }
}
