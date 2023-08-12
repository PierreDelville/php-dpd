<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentDataExtendedBc
     */
    public $GetShipmentBcResult;
    /**
     * Constructor method for GetShipmentBcResponse
     * @uses GetShipmentBcResponse::setGetShipmentBcResult()
     * @param \Dpd\StructType\ShipmentDataExtendedBc $getShipmentBcResult
     */
    public function __construct(\Dpd\StructType\ShipmentDataExtendedBc $getShipmentBcResult = null)
    {
        $this
            ->setGetShipmentBcResult($getShipmentBcResult);
    }
    /**
     * Get GetShipmentBcResult value
     * @return \Dpd\StructType\ShipmentDataExtendedBc|null
     */
    public function getGetShipmentBcResult()
    {
        return $this->GetShipmentBcResult;
    }
    /**
     * Set GetShipmentBcResult value
     * @param \Dpd\StructType\ShipmentDataExtendedBc $getShipmentBcResult
     * @return \Dpd\StructType\GetShipmentBcResponse
     */
    public function setGetShipmentBcResult(\Dpd\StructType\ShipmentDataExtendedBc $getShipmentBcResult = null)
    {
        $this->GetShipmentBcResult = $getShipmentBcResult;
        return $this;
    }
}
