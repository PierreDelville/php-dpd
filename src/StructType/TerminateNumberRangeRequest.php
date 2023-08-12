<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRangeRequest StructType
 * @subpackage Structs
 */
class TerminateNumberRangeRequest extends TerminateNumberRangeBaseRequest
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CountryCode;
    /**
     * The ShippingCenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ShippingCenterNumber;
    /**
     * Constructor method for TerminateNumberRangeRequest
     * @uses TerminateNumberRangeRequest::setCountryCode()
     * @uses TerminateNumberRangeRequest::setShippingCenterNumber()
     * @param int $countryCode
     * @param int $shippingCenterNumber
     */
    public function __construct($countryCode = null, $shippingCenterNumber = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setShippingCenterNumber($shippingCenterNumber);
    }
    /**
     * Get CountryCode value
     * @return int
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param int $countryCode
     * @return \Dpd\StructType\TerminateNumberRangeRequest
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: int
        if (!is_null($countryCode) && !(is_int($countryCode) || ctype_digit($countryCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get ShippingCenterNumber value
     * @return int
     */
    public function getShippingCenterNumber()
    {
        return $this->ShippingCenterNumber;
    }
    /**
     * Set ShippingCenterNumber value
     * @param int $shippingCenterNumber
     * @return \Dpd\StructType\TerminateNumberRangeRequest
     */
    public function setShippingCenterNumber($shippingCenterNumber = null)
    {
        // validation for constraint: int
        if (!is_null($shippingCenterNumber) && !(is_int($shippingCenterNumber) || ctype_digit($shippingCenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingCenterNumber, true), gettype($shippingCenterNumber)), __LINE__);
        }
        $this->ShippingCenterNumber = $shippingCenterNumber;
        return $this;
    }
}
