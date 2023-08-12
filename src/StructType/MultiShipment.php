<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiShipment StructType
 * @subpackage Structs
 */
class MultiShipment extends AbstractStructBase
{
    /**
     * The mastershipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Shipment
     */
    public $mastershipment;
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipment
     */
    public $shipments;
    /**
     * Constructor method for MultiShipment
     * @uses MultiShipment::setMastershipment()
     * @uses MultiShipment::setShipments()
     * @param \StructType\Shipment $mastershipment
     * @param \ArrayType\ArrayOfShipment $shipments
     */
    public function __construct(\StructType\Shipment $mastershipment = null, \ArrayType\ArrayOfShipment $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments);
    }
    /**
     * Get mastershipment value
     * @return \StructType\Shipment|null
     */
    public function getMastershipment()
    {
        return $this->mastershipment;
    }
    /**
     * Set mastershipment value
     * @param \StructType\Shipment $mastershipment
     * @return \StructType\MultiShipment
     */
    public function setMastershipment(\StructType\Shipment $mastershipment = null)
    {
        $this->mastershipment = $mastershipment;
        return $this;
    }
    /**
     * Get shipments value
     * @return \ArrayType\ArrayOfShipment|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \ArrayType\ArrayOfShipment $shipments
     * @return \StructType\MultiShipment
     */
    public function setShipments(\ArrayType\ArrayOfShipment $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
