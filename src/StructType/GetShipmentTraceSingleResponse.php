<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentTrace
     */
    public $GetShipmentTraceSingleResult;
    /**
     * Constructor method for GetShipmentTraceSingleResponse
     * @uses GetShipmentTraceSingleResponse::setGetShipmentTraceSingleResult()
     * @param \Dpd\StructType\ShipmentTrace $getShipmentTraceSingleResult
     */
    public function __construct(\Dpd\StructType\ShipmentTrace $getShipmentTraceSingleResult = null)
    {
        $this
            ->setGetShipmentTraceSingleResult($getShipmentTraceSingleResult);
    }
    /**
     * Get GetShipmentTraceSingleResult value
     * @return \Dpd\StructType\ShipmentTrace|null
     */
    public function getGetShipmentTraceSingleResult()
    {
        return $this->GetShipmentTraceSingleResult;
    }
    /**
     * Set GetShipmentTraceSingleResult value
     * @param \Dpd\StructType\ShipmentTrace $getShipmentTraceSingleResult
     * @return \Dpd\StructType\GetShipmentTraceSingleResponse
     */
    public function setGetShipmentTraceSingleResult(\Dpd\StructType\ShipmentTrace $getShipmentTraceSingleResult = null)
    {
        $this->GetShipmentTraceSingleResult = $getShipmentTraceSingleResult;
        return $this;
    }
}
