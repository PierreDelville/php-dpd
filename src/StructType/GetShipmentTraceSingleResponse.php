<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceSingleResponse StructType
 * @subpackage Structs
 */
class GetShipmentTraceSingleResponse extends AbstractStructBase
{
    /**
     * The GetShipmentTraceSingleResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentTrace
     */
    public $GetShipmentTraceSingleResult;
    /**
     * Constructor method for GetShipmentTraceSingleResponse
     * @uses GetShipmentTraceSingleResponse::setGetShipmentTraceSingleResult()
     * @param \StructType\ShipmentTrace $getShipmentTraceSingleResult
     */
    public function __construct(\StructType\ShipmentTrace $getShipmentTraceSingleResult = null)
    {
        $this
            ->setGetShipmentTraceSingleResult($getShipmentTraceSingleResult);
    }
    /**
     * Get GetShipmentTraceSingleResult value
     * @return \StructType\ShipmentTrace|null
     */
    public function getGetShipmentTraceSingleResult()
    {
        return $this->GetShipmentTraceSingleResult;
    }
    /**
     * Set GetShipmentTraceSingleResult value
     * @param \StructType\ShipmentTrace $getShipmentTraceSingleResult
     * @return \StructType\GetShipmentTraceSingleResponse
     */
    public function setGetShipmentTraceSingleResult(\StructType\ShipmentTrace $getShipmentTraceSingleResult = null)
    {
        $this->GetShipmentTraceSingleResult = $getShipmentTraceSingleResult;
        return $this;
    }
}
