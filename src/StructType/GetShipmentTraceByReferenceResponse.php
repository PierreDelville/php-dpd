<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceByReferenceResponse StructType
 * @subpackage Structs
 */
class GetShipmentTraceByReferenceResponse extends AbstractStructBase
{
    /**
     * The GetShipmentTraceByReferenceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipmentTrace
     */
    public $GetShipmentTraceByReferenceResult;
    /**
     * Constructor method for GetShipmentTraceByReferenceResponse
     * @uses GetShipmentTraceByReferenceResponse::setGetShipmentTraceByReferenceResult()
     * @param \ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult
     */
    public function __construct(\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult = null)
    {
        $this
            ->setGetShipmentTraceByReferenceResult($getShipmentTraceByReferenceResult);
    }
    /**
     * Get GetShipmentTraceByReferenceResult value
     * @return \ArrayType\ArrayOfShipmentTrace|null
     */
    public function getGetShipmentTraceByReferenceResult()
    {
        return $this->GetShipmentTraceByReferenceResult;
    }
    /**
     * Set GetShipmentTraceByReferenceResult value
     * @param \ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult
     * @return \StructType\GetShipmentTraceByReferenceResponse
     */
    public function setGetShipmentTraceByReferenceResult(\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult = null)
    {
        $this->GetShipmentTraceByReferenceResult = $getShipmentTraceByReferenceResult;
        return $this;
    }
}
