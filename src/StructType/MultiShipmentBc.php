<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentBc
     */
    public $mastershipment;
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfShipmentBc
     */
    public $shipments;
    /**
     * Constructor method for MultiShipmentBc
     * @uses MultiShipmentBc::setMastershipment()
     * @uses MultiShipmentBc::setShipments()
     * @param \Dpd\StructType\ShipmentBc $mastershipment
     * @param \Dpd\ArrayType\ArrayOfShipmentBc $shipments
     */
    public function __construct(\Dpd\StructType\ShipmentBc $mastershipment = null, \Dpd\ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments);
    }
    /**
     * Get mastershipment value
     * @return \Dpd\StructType\ShipmentBc|null
     */
    public function getMastershipment()
    {
        return $this->mastershipment;
    }
    /**
     * Set mastershipment value
     * @param \Dpd\StructType\ShipmentBc $mastershipment
     * @return \Dpd\StructType\MultiShipmentBc
     */
    public function setMastershipment(\Dpd\StructType\ShipmentBc $mastershipment = null)
    {
        $this->mastershipment = $mastershipment;
        return $this;
    }
    /**
     * Get shipments value
     * @return \Dpd\ArrayType\ArrayOfShipmentBc|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \Dpd\ArrayType\ArrayOfShipmentBc $shipments
     * @return \Dpd\StructType\MultiShipmentBc
     */
    public function setShipments(\Dpd\ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
