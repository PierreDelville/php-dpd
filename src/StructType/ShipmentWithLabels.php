<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Shipment
     */
    public $shipment;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfLabel
     */
    public $labels;
    /**
     * Constructor method for ShipmentWithLabels
     * @uses ShipmentWithLabels::setShipment()
     * @uses ShipmentWithLabels::setLabels()
     * @param \Dpd\StructType\Shipment $shipment
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\Dpd\StructType\Shipment $shipment = null, \Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels);
    }
    /**
     * Get shipment value
     * @return \Dpd\StructType\Shipment|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @param \Dpd\StructType\Shipment $shipment
     * @return \Dpd\StructType\ShipmentWithLabels
     */
    public function setShipment(\Dpd\StructType\Shipment $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Get labels value
     * @return \Dpd\ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * Set labels value
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     * @return \Dpd\StructType\ShipmentWithLabels
     */
    public function setLabels(\Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
