<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentWithLabelsBc
     */
    public $CreateReverseInverseShipmentWithLabelsBcResult;
    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsBcResponse
     * @uses CreateReverseInverseShipmentWithLabelsBcResponse::setCreateReverseInverseShipmentWithLabelsBcResult()
     * @param \Dpd\StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult
     */
    public function __construct(\Dpd\StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsBcResult($createReverseInverseShipmentWithLabelsBcResult);
    }
    /**
     * Get CreateReverseInverseShipmentWithLabelsBcResult value
     * @return \Dpd\StructType\ShipmentWithLabelsBc|null
     */
    public function getCreateReverseInverseShipmentWithLabelsBcResult()
    {
        return $this->CreateReverseInverseShipmentWithLabelsBcResult;
    }
    /**
     * Set CreateReverseInverseShipmentWithLabelsBcResult value
     * @param \Dpd\StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult
     * @return \Dpd\StructType\CreateReverseInverseShipmentWithLabelsBcResponse
     */
    public function setCreateReverseInverseShipmentWithLabelsBcResult(\Dpd\StructType\ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null)
    {
        $this->CreateReverseInverseShipmentWithLabelsBcResult = $createReverseInverseShipmentWithLabelsBcResult;
        return $this;
    }
}
