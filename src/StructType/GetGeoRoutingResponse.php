<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GeoRouting
     */
    public $GetGeoRoutingResult;
    /**
     * Constructor method for GetGeoRoutingResponse
     * @uses GetGeoRoutingResponse::setGetGeoRoutingResult()
     * @param \Dpd\StructType\GeoRouting $getGeoRoutingResult
     */
    public function __construct(\Dpd\StructType\GeoRouting $getGeoRoutingResult = null)
    {
        $this
            ->setGetGeoRoutingResult($getGeoRoutingResult);
    }
    /**
     * Get GetGeoRoutingResult value
     * @return \Dpd\StructType\GeoRouting|null
     */
    public function getGetGeoRoutingResult()
    {
        return $this->GetGeoRoutingResult;
    }
    /**
     * Set GetGeoRoutingResult value
     * @param \Dpd\StructType\GeoRouting $getGeoRoutingResult
     * @return \Dpd\StructType\GetGeoRoutingResponse
     */
    public function setGetGeoRoutingResult(\Dpd\StructType\GeoRouting $getGeoRoutingResult = null)
    {
        $this->GetGeoRoutingResult = $getGeoRoutingResult;
        return $this;
    }
}
