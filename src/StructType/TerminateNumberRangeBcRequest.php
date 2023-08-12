<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRangeBcRequest StructType
 * @subpackage Structs
 */
class TerminateNumberRangeBcRequest extends TerminateNumberRangeBaseRequest
{
    /**
     * The BarcodecSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BarcodecSource;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Domain;
    /**
     * Constructor method for TerminateNumberRangeBcRequest
     * @uses TerminateNumberRangeBcRequest::setBarcodecSource()
     * @uses TerminateNumberRangeBcRequest::setDomain()
     * @param int $barcodecSource
     * @param string $domain
     */
    public function __construct($barcodecSource = null, $domain = null)
    {
        $this
            ->setBarcodecSource($barcodecSource)
            ->setDomain($domain);
    }
    /**
     * Get BarcodecSource value
     * @return int
     */
    public function getBarcodecSource()
    {
        return $this->BarcodecSource;
    }
    /**
     * Set BarcodecSource value
     * @param int $barcodecSource
     * @return \StructType\TerminateNumberRangeBcRequest
     */
    public function setBarcodecSource($barcodecSource = null)
    {
        // validation for constraint: int
        if (!is_null($barcodecSource) && !(is_int($barcodecSource) || ctype_digit($barcodecSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodecSource, true), gettype($barcodecSource)), __LINE__);
        }
        $this->BarcodecSource = $barcodecSource;
        return $this;
    }
    /**
     * Get Domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @param string $domain
     * @return \StructType\TerminateNumberRangeBcRequest
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;
        return $this;
    }
}
