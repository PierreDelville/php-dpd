<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ReferenceDetailRequest
     */
    public $request;
    /**
     * Constructor method for GetShipmentTraceByReference
     * @uses GetShipmentTraceByReference::setRequest()
     * @param \Dpd\StructType\ReferenceDetailRequest $request
     */
    public function __construct(\Dpd\StructType\ReferenceDetailRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ReferenceDetailRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ReferenceDetailRequest $request
     * @return \Dpd\StructType\GetShipmentTraceByReference
     */
    public function setRequest(\Dpd\StructType\ReferenceDetailRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
