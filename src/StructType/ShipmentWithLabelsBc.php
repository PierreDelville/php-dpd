<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentWithLabelsBc StructType
 * @subpackage Structs
 */
class ShipmentWithLabelsBc extends AbstractStructBase
{
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentBc
     */
    public $Shipment;
    /**
     * The Labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfLabel
     */
    public $Labels;
    /**
     * Constructor method for ShipmentWithLabelsBc
     * @uses ShipmentWithLabelsBc::setShipment()
     * @uses ShipmentWithLabelsBc::setLabels()
     * @param \StructType\ShipmentBc $shipment
     * @param \ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\StructType\ShipmentBc $shipment = null, \ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels);
    }
    /**
     * Get Shipment value
     * @return \StructType\ShipmentBc|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \StructType\ShipmentBc $shipment
     * @return \StructType\ShipmentWithLabelsBc
     */
    public function setShipment(\StructType\ShipmentBc $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
    /**
     * Get Labels value
     * @return \ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->Labels;
    }
    /**
     * Set Labels value
     * @param \ArrayType\ArrayOfLabel $labels
     * @return \StructType\ShipmentWithLabelsBc
     */
    public function setLabels(\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->Labels = $labels;
        return $this;
    }
}
