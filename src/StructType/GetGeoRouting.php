<?php

namespace StructType;

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
     * @var \StructType\GeoRoutingRequest
     */
    public $request;
    /**
     * Constructor method for GetGeoRouting
     * @uses GetGeoRouting::setRequest()
     * @param \StructType\GeoRoutingRequest $request
     */
    public function __construct(\StructType\GeoRoutingRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GeoRoutingRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GeoRoutingRequest $request
     * @return \StructType\GetGeoRouting
     */
    public function setRequest(\StructType\GeoRoutingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
