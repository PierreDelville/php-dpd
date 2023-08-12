<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentWithLabels
     */
    public $CreateReverseInverseShipmentWithLabelsResult;
    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsResponse
     * @uses CreateReverseInverseShipmentWithLabelsResponse::setCreateReverseInverseShipmentWithLabelsResult()
     * @param \Dpd\StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult
     */
    public function __construct(\Dpd\StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsResult($createReverseInverseShipmentWithLabelsResult);
    }
    /**
     * Get CreateReverseInverseShipmentWithLabelsResult value
     * @return \Dpd\StructType\ShipmentWithLabels|null
     */
    public function getCreateReverseInverseShipmentWithLabelsResult()
    {
        return $this->CreateReverseInverseShipmentWithLabelsResult;
    }
    /**
     * Set CreateReverseInverseShipmentWithLabelsResult value
     * @param \Dpd\StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult
     * @return \Dpd\StructType\CreateReverseInverseShipmentWithLabelsResponse
     */
    public function setCreateReverseInverseShipmentWithLabelsResult(\Dpd\StructType\ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null)
    {
        $this->CreateReverseInverseShipmentWithLabelsResult = $createReverseInverseShipmentWithLabelsResult;
        return $this;
    }
}
