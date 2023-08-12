<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentBcResponse StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentBc
     */
    public $CreateReverseInverseShipmentBcResult;
    /**
     * Constructor method for CreateReverseInverseShipmentBcResponse
     * @uses CreateReverseInverseShipmentBcResponse::setCreateReverseInverseShipmentBcResult()
     * @param \StructType\ShipmentBc $createReverseInverseShipmentBcResult
     */
    public function __construct(\StructType\ShipmentBc $createReverseInverseShipmentBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentBcResult($createReverseInverseShipmentBcResult);
    }
    /**
     * Get CreateReverseInverseShipmentBcResult value
     * @return \StructType\ShipmentBc|null
     */
    public function getCreateReverseInverseShipmentBcResult()
    {
        return $this->CreateReverseInverseShipmentBcResult;
    }
    /**
     * Set CreateReverseInverseShipmentBcResult value
     * @param \StructType\ShipmentBc $createReverseInverseShipmentBcResult
     * @return \StructType\CreateReverseInverseShipmentBcResponse
     */
    public function setCreateReverseInverseShipmentBcResult(\StructType\ShipmentBc $createReverseInverseShipmentBcResult = null)
    {
        $this->CreateReverseInverseShipmentBcResult = $createReverseInverseShipmentBcResult;
        return $this;
    }
}
