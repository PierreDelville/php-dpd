<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Shipment
     */
    public $mastershipment;
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfShipment
     */
    public $shipments;
    /**
     * Constructor method for MultiShipment
     * @uses MultiShipment::setMastershipment()
     * @uses MultiShipment::setShipments()
     * @param \Dpd\StructType\Shipment $mastershipment
     * @param \Dpd\ArrayType\ArrayOfShipment $shipments
     */
    public function __construct(\Dpd\StructType\Shipment $mastershipment = null, \Dpd\ArrayType\ArrayOfShipment $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments);
    }
    /**
     * Get mastershipment value
     * @return \Dpd\StructType\Shipment|null
     */
    public function getMastershipment()
    {
        return $this->mastershipment;
    }
    /**
     * Set mastershipment value
     * @param \Dpd\StructType\Shipment $mastershipment
     * @return \Dpd\StructType\MultiShipment
     */
    public function setMastershipment(\Dpd\StructType\Shipment $mastershipment = null)
    {
        $this->mastershipment = $mastershipment;
        return $this;
    }
    /**
     * Get shipments value
     * @return \Dpd\ArrayType\ArrayOfShipment|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \Dpd\ArrayType\ArrayOfShipment $shipments
     * @return \Dpd\StructType\MultiShipment
     */
    public function setShipments(\Dpd\ArrayType\ArrayOfShipment $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
