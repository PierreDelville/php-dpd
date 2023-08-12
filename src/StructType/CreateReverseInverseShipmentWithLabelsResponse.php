<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsResponse StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipmentWithLabelsResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentWithLabelsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentWithLabels
     */
    public $CreateReverseInverseShipmentWithLabelsResult;
    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsResponse
     * @uses CreateReverseInverseShipmentWithLabelsResponse::setCreateReverseInverseShipmentWithLabelsResult()
     * @param \StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult
     */
    public function __construct(\StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsResult($createReverseInverseShipmentWithLabelsResult);
    }
    /**
     * Get CreateReverseInverseShipmentWithLabelsResult value
     * @return \StructType\ShipmentWithLabels|null
     */
    public function getCreateReverseInverseShipmentWithLabelsResult()
    {
        return $this->CreateReverseInverseShipmentWithLabelsResult;
    }
    /**
     * Set CreateReverseInverseShipmentWithLabelsResult value
     * @param \StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult
     * @return \StructType\CreateReverseInverseShipmentWithLabelsResponse
     */
    public function setCreateReverseInverseShipmentWithLabelsResult(\StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null)
    {
        $this->CreateReverseInverseShipmentWithLabelsResult = $createReverseInverseShipmentWithLabelsResult;
        return $this;
    }
}
