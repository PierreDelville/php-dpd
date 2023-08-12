<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfShipmentTrace
     */
    public $GetShipmentTraceByReferenceResult;
    /**
     * Constructor method for GetShipmentTraceByReferenceResponse
     * @uses GetShipmentTraceByReferenceResponse::setGetShipmentTraceByReferenceResult()
     * @param \Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult = null)
    {
        $this
            ->setGetShipmentTraceByReferenceResult($getShipmentTraceByReferenceResult);
    }
    /**
     * Get GetShipmentTraceByReferenceResult value
     * @return \Dpd\ArrayType\ArrayOfShipmentTrace|null
     */
    public function getGetShipmentTraceByReferenceResult()
    {
        return $this->GetShipmentTraceByReferenceResult;
    }
    /**
     * Set GetShipmentTraceByReferenceResult value
     * @param \Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult
     * @return \Dpd\StructType\GetShipmentTraceByReferenceResponse
     */
    public function setGetShipmentTraceByReferenceResult(\Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult = null)
    {
        $this->GetShipmentTraceByReferenceResult = $getShipmentTraceByReferenceResult;
        return $this;
    }
}
