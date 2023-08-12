<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3RoutingResponse StructType
 * @subpackage Structs
 */
class GetBic3RoutingResponse extends AbstractStructBase
{
    /**
     * The bic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $bic3;
    /**
     * The GetBic3RoutingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetBic3RoutingResponse
     */
    public $GetBic3RoutingResult;
    /**
     * The route
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GeoRouting
     */
    public $route;
    /**
     * Constructor method for GetBic3RoutingResponse
     * @uses GetBic3RoutingResponse::setBic3()
     * @uses GetBic3RoutingResponse::setGetBic3RoutingResult()
     * @uses GetBic3RoutingResponse::setRoute()
     * @param int $bic3
     * @param \StructType\GetBic3RoutingResponse $getBic3RoutingResult
     * @param \StructType\GeoRouting $route
     */
    public function __construct($bic3 = null, \StructType\GetBic3RoutingResponse $getBic3RoutingResult = null, \StructType\GeoRouting $route = null)
    {
        $this
            ->setBic3($bic3)
            ->setGetBic3RoutingResult($getBic3RoutingResult)
            ->setRoute($route);
    }
    /**
     * Get bic3 value
     * @return int
     */
    public function getBic3()
    {
        return $this->bic3;
    }
    /**
     * Set bic3 value
     * @param int $bic3
     * @return \StructType\GetBic3RoutingResponse
     */
    public function setBic3($bic3 = null)
    {
        // validation for constraint: int
        if (!is_null($bic3) && !(is_int($bic3) || ctype_digit($bic3))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bic3, true), gettype($bic3)), __LINE__);
        }
        $this->bic3 = $bic3;
        return $this;
    }
    /**
     * Get GetBic3RoutingResult value
     * @return \StructType\GetBic3RoutingResponse|null
     */
    public function getGetBic3RoutingResult()
    {
        return $this->GetBic3RoutingResult;
    }
    /**
     * Set GetBic3RoutingResult value
     * @param \StructType\GetBic3RoutingResponse $getBic3RoutingResult
     * @return \StructType\GetBic3RoutingResponse
     */
    public function setGetBic3RoutingResult(\StructType\GetBic3RoutingResponse $getBic3RoutingResult = null)
    {
        $this->GetBic3RoutingResult = $getBic3RoutingResult;
        return $this;
    }
    /**
     * Get route value
     * @return \StructType\GeoRouting|null
     */
    public function getRoute()
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param \StructType\GeoRouting $route
     * @return \StructType\GetBic3RoutingResponse
     */
    public function setRoute(\StructType\GeoRouting $route = null)
    {
        $this->route = $route;
        return $this;
    }
}
