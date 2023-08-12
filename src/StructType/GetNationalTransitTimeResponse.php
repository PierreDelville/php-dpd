<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransitTimeResponse StructType
 * @subpackage Structs
 */
class GetNationalTransitTimeResponse extends AbstractStructBase
{
    /**
     * The TransitTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TransitTime;
    /**
     * The GetNationalTransitTimeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetNationalTransitTimeResponse
     */
    public $GetNationalTransitTimeResult;
    /**
     * Constructor method for GetNationalTransitTimeResponse
     * @uses GetNationalTransitTimeResponse::setTransitTime()
     * @uses GetNationalTransitTimeResponse::setGetNationalTransitTimeResult()
     * @param int $transitTime
     * @param \Dpd\StructType\GetNationalTransitTimeResponse $getNationalTransitTimeResult
     */
    public function __construct($transitTime = null, \Dpd\StructType\GetNationalTransitTimeResponse $getNationalTransitTimeResult = null)
    {
        $this
            ->setTransitTime($transitTime)
            ->setGetNationalTransitTimeResult($getNationalTransitTimeResult);
    }
    /**
     * Get TransitTime value
     * @return int
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    /**
     * Set TransitTime value
     * @param int $transitTime
     * @return \Dpd\StructType\GetNationalTransitTimeResponse
     */
    public function setTransitTime($transitTime = null)
    {
        // validation for constraint: int
        if (!is_null($transitTime) && !(is_int($transitTime) || ctype_digit($transitTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transitTime, true), gettype($transitTime)), __LINE__);
        }
        $this->TransitTime = $transitTime;
        return $this;
    }
    /**
     * Get GetNationalTransitTimeResult value
     * @return \Dpd\StructType\GetNationalTransitTimeResponse|null
     */
    public function getGetNationalTransitTimeResult()
    {
        return $this->GetNationalTransitTimeResult;
    }
    /**
     * Set GetNationalTransitTimeResult value
     * @param \Dpd\StructType\GetNationalTransitTimeResponse $getNationalTransitTimeResult
     * @return \Dpd\StructType\GetNationalTransitTimeResponse
     */
    public function setGetNationalTransitTimeResult(\Dpd\StructType\GetNationalTransitTimeResponse $getNationalTransitTimeResult = null)
    {
        $this->GetNationalTransitTimeResult = $getNationalTransitTimeResult;
        return $this;
    }
}
