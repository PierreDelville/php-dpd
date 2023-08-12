<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentBc
     */
    public $CreateReverseInverseShipmentBcResult;
    /**
     * Constructor method for CreateReverseInverseShipmentBcResponse
     * @uses CreateReverseInverseShipmentBcResponse::setCreateReverseInverseShipmentBcResult()
     * @param \Dpd\StructType\ShipmentBc $createReverseInverseShipmentBcResult
     */
    public function __construct(\Dpd\StructType\ShipmentBc $createReverseInverseShipmentBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentBcResult($createReverseInverseShipmentBcResult);
    }
    /**
     * Get CreateReverseInverseShipmentBcResult value
     * @return \Dpd\StructType\ShipmentBc|null
     */
    public function getCreateReverseInverseShipmentBcResult()
    {
        return $this->CreateReverseInverseShipmentBcResult;
    }
    /**
     * Set CreateReverseInverseShipmentBcResult value
     * @param \Dpd\StructType\ShipmentBc $createReverseInverseShipmentBcResult
     * @return \Dpd\StructType\CreateReverseInverseShipmentBcResponse
     */
    public function setCreateReverseInverseShipmentBcResult(\Dpd\StructType\ShipmentBc $createReverseInverseShipmentBcResult = null)
    {
        $this->CreateReverseInverseShipmentBcResult = $createReverseInverseShipmentBcResult;
        return $this;
    }
}
