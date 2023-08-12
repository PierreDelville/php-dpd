<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcResponse StructType
 * @subpackage Structs
 */
class GetShipmentBcResponse extends AbstractStructBase
{
    /**
     * The GetShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentDataExtendedBc
     */
    public $GetShipmentBcResult;
    /**
     * Constructor method for GetShipmentBcResponse
     * @uses GetShipmentBcResponse::setGetShipmentBcResult()
     * @param \StructType\ShipmentDataExtendedBc $getShipmentBcResult
     */
    public function __construct(\StructType\ShipmentDataExtendedBc $getShipmentBcResult = null)
    {
        $this
            ->setGetShipmentBcResult($getShipmentBcResult);
    }
    /**
     * Get GetShipmentBcResult value
     * @return \StructType\ShipmentDataExtendedBc|null
     */
    public function getGetShipmentBcResult()
    {
        return $this->GetShipmentBcResult;
    }
    /**
     * Set GetShipmentBcResult value
     * @param \StructType\ShipmentDataExtendedBc $getShipmentBcResult
     * @return \StructType\GetShipmentBcResponse
     */
    public function setGetShipmentBcResult(\StructType\ShipmentDataExtendedBc $getShipmentBcResult = null)
    {
        $this->GetShipmentBcResult = $getShipmentBcResult;
        return $this;
    }
}
