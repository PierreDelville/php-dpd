<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfShipmentTrace
     */
    public $GetShipmentTraceResult;
    /**
     * Constructor method for GetShipmentTraceResponse
     * @uses GetShipmentTraceResponse::setGetShipmentTraceResult()
     * @param \Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult = null)
    {
        $this
            ->setGetShipmentTraceResult($getShipmentTraceResult);
    }
    /**
     * Get GetShipmentTraceResult value
     * @return \Dpd\ArrayType\ArrayOfShipmentTrace|null
     */
    public function getGetShipmentTraceResult()
    {
        return $this->GetShipmentTraceResult;
    }
    /**
     * Set GetShipmentTraceResult value
     * @param \Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult
     * @return \Dpd\StructType\GetShipmentTraceResponse
     */
    public function setGetShipmentTraceResult(\Dpd\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult = null)
    {
        $this->GetShipmentTraceResult = $getShipmentTraceResult;
        return $this;
    }
}
