<?php

namespace StructType;

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
     * @var \StructType\ShipmentDataExtended
     */
    public $GetShipmentResult;
    /**
     * Constructor method for GetShipmentResponse
     * @uses GetShipmentResponse::setGetShipmentResult()
     * @param \StructType\ShipmentDataExtended $getShipmentResult
     */
    public function __construct(\StructType\ShipmentDataExtended $getShipmentResult = null)
    {
        $this
            ->setGetShipmentResult($getShipmentResult);
    }
    /**
     * Get GetShipmentResult value
     * @return \StructType\ShipmentDataExtended|null
     */
    public function getGetShipmentResult()
    {
        return $this->GetShipmentResult;
    }
    /**
     * Set GetShipmentResult value
     * @param \StructType\ShipmentDataExtended $getShipmentResult
     * @return \StructType\GetShipmentResponse
     */
    public function setGetShipmentResult(\StructType\ShipmentDataExtended $getShipmentResult = null)
    {
        $this->GetShipmentResult = $getShipmentResult;
        return $this;
    }
}
