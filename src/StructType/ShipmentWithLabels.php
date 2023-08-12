<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentWithLabels StructType
 * @subpackage Structs
 */
class ShipmentWithLabels extends AbstractStructBase
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Shipment
     */
    public $shipment;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfLabel
     */
    public $labels;
    /**
     * Constructor method for ShipmentWithLabels
     * @uses ShipmentWithLabels::setShipment()
     * @uses ShipmentWithLabels::setLabels()
     * @param \StructType\Shipment $shipment
     * @param \ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\StructType\Shipment $shipment = null, \ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels);
    }
    /**
     * Get shipment value
     * @return \StructType\Shipment|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @param \StructType\Shipment $shipment
     * @return \StructType\ShipmentWithLabels
     */
    public function setShipment(\StructType\Shipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Get labels value
     * @return \ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * Set labels value
     * @param \ArrayType\ArrayOfLabel $labels
     * @return \StructType\ShipmentWithLabels
     */
    public function setLabels(\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
