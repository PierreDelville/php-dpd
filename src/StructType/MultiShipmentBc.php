<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiShipmentBc StructType
 * @subpackage Structs
 */
class MultiShipmentBc extends AbstractStructBase
{
    /**
     * The mastershipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentBc
     */
    public $mastershipment;
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipmentBc
     */
    public $shipments;
    /**
     * Constructor method for MultiShipmentBc
     * @uses MultiShipmentBc::setMastershipment()
     * @uses MultiShipmentBc::setShipments()
     * @param \StructType\ShipmentBc $mastershipment
     * @param \ArrayType\ArrayOfShipmentBc $shipments
     */
    public function __construct(\StructType\ShipmentBc $mastershipment = null, \ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments);
    }
    /**
     * Get mastershipment value
     * @return \StructType\ShipmentBc|null
     */
    public function getMastershipment()
    {
        return $this->mastershipment;
    }
    /**
     * Set mastershipment value
     * @param \StructType\ShipmentBc $mastershipment
     * @return \StructType\MultiShipmentBc
     */
    public function setMastershipment(\StructType\ShipmentBc $mastershipment = null)
    {
        $this->mastershipment = $mastershipment;
        return $this;
    }
    /**
     * Get shipments value
     * @return \ArrayType\ArrayOfShipmentBc|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \ArrayType\ArrayOfShipmentBc $shipments
     * @return \StructType\MultiShipmentBc
     */
    public function setShipments(\ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
