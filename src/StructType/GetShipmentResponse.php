<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentResponse StructType
 * @subpackage Structs
 */
class GetShipmentResponse extends AbstractStructBase
{
    /**
     * The GetShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ShipmentDataExtended
     */
    public $GetShipmentResult;
    /**
     * Constructor method for GetShipmentResponse
     * @uses GetShipmentResponse::setGetShipmentResult()
     * @param \Dpd\StructType\ShipmentDataExtended $getShipmentResult
     */
    public function __construct(\Dpd\StructType\ShipmentDataExtended $getShipmentResult = null)
    {
        $this
            ->setGetShipmentResult($getShipmentResult);
    }
    /**
     * Get GetShipmentResult value
     * @return \Dpd\StructType\ShipmentDataExtended|null
     */
    public function getGetShipmentResult()
    {
        return $this->GetShipmentResult;
    }
    /**
     * Set GetShipmentResult value
     * @param \Dpd\StructType\ShipmentDataExtended $getShipmentResult
     * @return \Dpd\StructType\GetShipmentResponse
     */
    public function setGetShipmentResult(\Dpd\StructType\ShipmentDataExtended $getShipmentResult = null)
    {
        $this->GetShipmentResult = $getShipmentResult;
        return $this;
    }
}
