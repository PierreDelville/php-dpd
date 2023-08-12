<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceResponse StructType
 * @subpackage Structs
 */
class GetShipmentTraceResponse extends AbstractStructBase
{
    /**
     * The GetShipmentTraceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipmentTrace
     */
    public $GetShipmentTraceResult;
    /**
     * Constructor method for GetShipmentTraceResponse
     * @uses GetShipmentTraceResponse::setGetShipmentTraceResult()
     * @param \ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult
     */
    public function __construct(\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult = null)
    {
        $this
            ->setGetShipmentTraceResult($getShipmentTraceResult);
    }
    /**
     * Get GetShipmentTraceResult value
     * @return \ArrayType\ArrayOfShipmentTrace|null
     */
    public function getGetShipmentTraceResult()
    {
        return $this->GetShipmentTraceResult;
    }
    /**
     * Set GetShipmentTraceResult value
     * @param \ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult
     * @return \StructType\GetShipmentTraceResponse
     */
    public function setGetShipmentTraceResult(\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult = null)
    {
        $this->GetShipmentTraceResult = $getShipmentTraceResult;
        return $this;
    }
}
