<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3Routing StructType
 * @subpackage Structs
 */
class GetBic3Routing extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetBic3RoutingRequest
     */
    public $request;
    /**
     * Constructor method for GetBic3Routing
     * @uses GetBic3Routing::setRequest()
     * @param \Dpd\StructType\GetBic3RoutingRequest $request
     */
    public function __construct(\Dpd\StructType\GetBic3RoutingRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetBic3RoutingRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetBic3RoutingRequest $request
     * @return \Dpd\StructType\GetBic3Routing
     */
    public function setRequest(\Dpd\StructType\GetBic3RoutingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
