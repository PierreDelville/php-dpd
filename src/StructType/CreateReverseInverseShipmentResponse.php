<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Shipment
     */
    public $CreateReverseInverseShipmentResult;
    /**
     * Constructor method for CreateReverseInverseShipmentResponse
     * @uses CreateReverseInverseShipmentResponse::setCreateReverseInverseShipmentResult()
     * @param \Dpd\StructType\Shipment $createReverseInverseShipmentResult
     */
    public function __construct(\Dpd\StructType\Shipment $createReverseInverseShipmentResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentResult($createReverseInverseShipmentResult);
    }
    /**
     * Get CreateReverseInverseShipmentResult value
     * @return \Dpd\StructType\Shipment|null
     */
    public function getCreateReverseInverseShipmentResult()
    {
        return $this->CreateReverseInverseShipmentResult;
    }
    /**
     * Set CreateReverseInverseShipmentResult value
     * @param \Dpd\StructType\Shipment $createReverseInverseShipmentResult
     * @return \Dpd\StructType\CreateReverseInverseShipmentResponse
     */
    public function setCreateReverseInverseShipmentResult(\Dpd\StructType\Shipment $createReverseInverseShipmentResult = null)
    {
        $this->CreateReverseInverseShipmentResult = $createReverseInverseShipmentResult;
        return $this;
    }
}
