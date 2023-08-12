<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipping StructType
 * @subpackage Structs
 */
class GetShipping extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetShippingRequest
     */
    public $request;
    /**
     * Constructor method for GetShipping
     * @uses GetShipping::setRequest()
     * @param \Dpd\StructType\GetShippingRequest $request
     */
    public function __construct(\Dpd\StructType\GetShippingRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetShippingRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetShippingRequest $request
     * @return \Dpd\StructType\GetShipping
     */
    public function setRequest(\Dpd\StructType\GetShippingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
