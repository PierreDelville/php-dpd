<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetShipmentBcMultiResponse
     */
    public $GetShipmentBcMultiResult;
    /**
     * The Shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfGetShipmentEntry
     */
    public $Shipments;
    /**
     * Constructor method for GetShipmentBcMultiResponse
     * @uses GetShipmentBcMultiResponse::setGetShipmentBcMultiResult()
     * @uses GetShipmentBcMultiResponse::setShipments()
     * @param \Dpd\StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult
     * @param \Dpd\ArrayType\ArrayOfGetShipmentEntry $shipments
     */
    public function __construct(\Dpd\StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult = null, \Dpd\ArrayType\ArrayOfGetShipmentEntry $shipments = null)
    {
        $this
            ->setGetShipmentBcMultiResult($getShipmentBcMultiResult)
            ->setShipments($shipments);
    }
    /**
     * Get GetShipmentBcMultiResult value
     * @return \Dpd\StructType\GetShipmentBcMultiResponse|null
     */
    public function getGetShipmentBcMultiResult()
    {
        return $this->GetShipmentBcMultiResult;
    }
    /**
     * Set GetShipmentBcMultiResult value
     * @param \Dpd\StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult
     * @return \Dpd\StructType\GetShipmentBcMultiResponse
     */
    public function setGetShipmentBcMultiResult(\Dpd\StructType\GetShipmentBcMultiResponse $getShipmentBcMultiResult = null)
    {
        $this->GetShipmentBcMultiResult = $getShipmentBcMultiResult;
        return $this;
    }
    /**
     * Get Shipments value
     * @return \Dpd\ArrayType\ArrayOfGetShipmentEntry|null
     */
    public function getShipments()
    {
        return $this->Shipments;
    }
    /**
     * Set Shipments value
     * @param \Dpd\ArrayType\ArrayOfGetShipmentEntry $shipments
     * @return \Dpd\StructType\GetShipmentBcMultiResponse
     */
    public function setShipments(\Dpd\ArrayType\ArrayOfGetShipmentEntry $shipments = null)
    {
        $this->Shipments = $shipments;
        return $this;
    }
}
