<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRouting StructType
 * @subpackage Structs
 */
class GetGeoRouting extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GeoRoutingRequest
     */
    public $request;
    /**
     * Constructor method for GetGeoRouting
     * @uses GetGeoRouting::setRequest()
     * @param \Dpd\StructType\GeoRoutingRequest $request
     */
    public function __construct(\Dpd\StructType\GeoRoutingRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GeoRoutingRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GeoRoutingRequest $request
     * @return \Dpd\StructType\GetGeoRouting
     */
    public function setRequest(\Dpd\StructType\GeoRoutingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
