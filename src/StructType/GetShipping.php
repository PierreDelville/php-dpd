<?php

namespace StructType;

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
     * @var \StructType\GetShippingRequest
     */
    public $request;
    /**
     * Constructor method for GetShipping
     * @uses GetShipping::setRequest()
     * @param \StructType\GetShippingRequest $request
     */
    public function __construct(\StructType\GetShippingRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetShippingRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetShippingRequest $request
     * @return \StructType\GetShipping
     */
    public function setRequest(\StructType\GetShippingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
