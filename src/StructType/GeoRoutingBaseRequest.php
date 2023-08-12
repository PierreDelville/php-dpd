<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoRoutingBaseRequest StructType
 * @subpackage Structs
 */
class GeoRoutingBaseRequest extends AbstractStructBase
{
    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $destinationDepot;
    /**
     * The countryPrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $countryPrefix;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * Constructor method for GeoRoutingBaseRequest
     * @uses GeoRoutingBaseRequest::setDestinationDepot()
     * @uses GeoRoutingBaseRequest::setCountryPrefix()
     * @uses GeoRoutingBaseRequest::setZipCode()
     * @uses GeoRoutingBaseRequest::setDate()
     * @param int $destinationDepot
     * @param string $countryPrefix
     * @param string $zipCode
     * @param string $date
     */
    public function __construct($destinationDepot = null, $countryPrefix = null, $zipCode = null, $date = null)
    {
        $this
            ->setDestinationDepot($destinationDepot)
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setDate($date);
    }
    /**
     * Get destinationDepot value
     * @return int
     */
    public function getDestinationDepot()
    {
        return $this->destinationDepot;
    }
    /**
     * Set destinationDepot value
     * @param int $destinationDepot
     * @return \Dpd\StructType\GeoRoutingBaseRequest
     */
    public function setDestinationDepot($destinationDepot = null)
    {
        // validation for constraint: int
        if (!is_null($destinationDepot) && !(is_int($destinationDepot) || ctype_digit($destinationDepot))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationDepot, true), gettype($destinationDepot)), __LINE__);
        }
        $this->destinationDepot = $destinationDepot;
        return $this;
    }
    /**
     * Get countryPrefix value
     * @return string|null
     */
    public function getCountryPrefix()
    {
        return $this->countryPrefix;
    }
    /**
     * Set countryPrefix value
     * @param string $countryPrefix
     * @return \Dpd\StructType\GeoRoutingBaseRequest
     */
    public function setCountryPrefix($countryPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($countryPrefix) && !is_string($countryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefix, true), gettype($countryPrefix)), __LINE__);
        }
        $this->countryPrefix = $countryPrefix;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Dpd\StructType\GeoRoutingBaseRequest
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Dpd\StructType\GeoRoutingBaseRequest
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
}
