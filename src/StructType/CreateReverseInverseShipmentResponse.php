<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentResponse StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Shipment
     */
    public $CreateReverseInverseShipmentResult;
    /**
     * Constructor method for CreateReverseInverseShipmentResponse
     * @uses CreateReverseInverseShipmentResponse::setCreateReverseInverseShipmentResult()
     * @param \StructType\Shipment $createReverseInverseShipmentResult
     */
    public function __construct(\StructType\Shipment $createReverseInverseShipmentResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentResult($createReverseInverseShipmentResult);
    }
    /**
     * Get CreateReverseInverseShipmentResult value
     * @return \StructType\Shipment|null
     */
    public function getCreateReverseInverseShipmentResult()
    {
        return $this->CreateReverseInverseShipmentResult;
    }
    /**
     * Set CreateReverseInverseShipmentResult value
     * @param \StructType\Shipment $createReverseInverseShipmentResult
     * @return \StructType\CreateReverseInverseShipmentResponse
     */
    public function setCreateReverseInverseShipmentResult(\StructType\Shipment $createReverseInverseShipmentResult = null)
    {
        $this->CreateReverseInverseShipmentResult = $createReverseInverseShipmentResult;
        return $this;
    }
}
