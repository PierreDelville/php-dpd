<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentBaseRequest StructType
 * @subpackage Structs
 */
class ShipmentBaseRequest extends RequestShipmentBase
{
    /**
     * The ShipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentNumber;
    /**
     * Constructor method for ShipmentBaseRequest
     * @uses ShipmentBaseRequest::setShipmentNumber()
     * @param string $shipmentNumber
     */
    public function __construct($shipmentNumber = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber);
    }
    /**
     * Get ShipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->ShipmentNumber;
    }
    /**
     * Set ShipmentNumber value
     * @param string $shipmentNumber
     * @return \Dpd\StructType\ShipmentBaseRequest
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), gettype($shipmentNumber)), __LINE__);
        }
        $this->ShipmentNumber = $shipmentNumber;
        return $this;
    }
}
