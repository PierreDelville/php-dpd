<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcMultiResponse StructType
 * @subpackage Structs
 */
class GetShipmentBcMultiResponse extends AbstractStructBase
{
    /**
     * The GetShipmentBcMultiResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetShipmentBcMultiResponse
     */
    public $GetShipmentBcMultiResult;
    /**
     * The Shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfGetShipmentEntry
     */
    public $Shipments;
    /**
     * Constructor method for GetShipmentBcMultiResponse
     * @uses GetShipmentBcMultiResponse::setGetShipmentBcMultiResult()
     * @uses GetShipmentBcMultiResponse::setShipments()
     * @param \StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult
     * @param \ArrayType\ArrayOfGetShipmentEntry $shipments
     */
    public function __construct(\StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult = null, \ArrayType\ArrayOfGetShipmentEntry $shipments = null)
    {
        $this
            ->setGetShipmentBcMultiResult($getShipmentBcMultiResult)
            ->setShipments($shipments);
    }
    /**
     * Get GetShipmentBcMultiResult value
     * @return \StructType\GetShipmentBcMultiResponse|null
     */
    public function getGetShipmentBcMultiResult()
    {
        return $this->GetShipmentBcMultiResult;
    }
    /**
     * Set GetShipmentBcMultiResult value
     * @param \StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult
     * @return \StructType\GetShipmentBcMultiResponse
     */
    public function setGetShipmentBcMultiResult(\StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult = null)
    {
        $this->GetShipmentBcMultiResult = $getShipmentBcMultiResult;
        return $this;
    }
    /**
     * Get Shipments value
     * @return \ArrayType\ArrayOfGetShipmentEntry|null
     */
    public function getShipments()
    {
        return $this->Shipments;
    }
    /**
     * Set Shipments value
     * @param \ArrayType\ArrayOfGetShipmentEntry $shipments
     * @return \StructType\GetShipmentBcMultiResponse
     */
    public function setShipments(\ArrayType\ArrayOfGetShipmentEntry $shipments = null)
    {
        $this->Shipments = $shipments;
        return $this;
    }
}
