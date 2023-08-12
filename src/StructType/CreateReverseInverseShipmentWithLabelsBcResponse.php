<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsBcResponse
 * StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipmentWithLabelsBcResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentWithLabelsBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentWithLabelsBc
     */
    public $CreateReverseInverseShipmentWithLabelsBcResult;
    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsBcResponse
     * @uses CreateReverseInverseShipmentWithLabelsBcResponse::setCreateReverseInverseShipmentWithLabelsBcResult()
     * @param \StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult
     */
    public function __construct(\StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsBcResult($createReverseInverseShipmentWithLabelsBcResult);
    }
    /**
     * Get CreateReverseInverseShipmentWithLabelsBcResult value
     * @return \StructType\ShipmentWithLabelsBc|null
     */
    public function getCreateReverseInverseShipmentWithLabelsBcResult()
    {
        return $this->CreateReverseInverseShipmentWithLabelsBcResult;
    }
    /**
     * Set CreateReverseInverseShipmentWithLabelsBcResult value
     * @param \StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult
     * @return \StructType\CreateReverseInverseShipmentWithLabelsBcResponse
     */
    public function setCreateReverseInverseShipmentWithLabelsBcResult(\StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null)
    {
        $this->CreateReverseInverseShipmentWithLabelsBcResult = $createReverseInverseShipmentWithLabelsBcResult;
        return $this;
    }
}
