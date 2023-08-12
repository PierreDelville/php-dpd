<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceByReference StructType
 * @subpackage Structs
 */
class GetShipmentTraceByReference extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReferenceDetailRequest
     */
    public $request;
    /**
     * Constructor method for GetShipmentTraceByReference
     * @uses GetShipmentTraceByReference::setRequest()
     * @param \StructType\ReferenceDetailRequest $request
     */
    public function __construct(\StructType\ReferenceDetailRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ReferenceDetailRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ReferenceDetailRequest $request
     * @return \StructType\GetShipmentTraceByReference
     */
    public function setRequest(\StructType\ReferenceDetailRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
