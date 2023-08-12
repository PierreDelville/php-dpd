<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRoutingResponse StructType
 * @subpackage Structs
 */
class GetGeoRoutingResponse extends AbstractStructBase
{
    /**
     * The GetGeoRoutingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GeoRouting
     */
    public $GetGeoRoutingResult;
    /**
     * Constructor method for GetGeoRoutingResponse
     * @uses GetGeoRoutingResponse::setGetGeoRoutingResult()
     * @param \StructType\GeoRouting $getGeoRoutingResult
     */
    public function __construct(\StructType\GeoRouting $getGeoRoutingResult = null)
    {
        $this
            ->setGetGeoRoutingResult($getGeoRoutingResult);
    }
    /**
     * Get GetGeoRoutingResult value
     * @return \StructType\GeoRouting|null
     */
    public function getGetGeoRoutingResult()
    {
        return $this->GetGeoRoutingResult;
    }
    /**
     * Set GetGeoRoutingResult value
     * @param \StructType\GeoRouting $getGeoRoutingResult
     * @return \StructType\GetGeoRoutingResponse
     */
    public function setGetGeoRoutingResult(\StructType\GeoRouting $getGeoRoutingResult = null)
    {
        $this->GetGeoRoutingResult = $getGeoRoutingResult;
        return $this;
    }
}
