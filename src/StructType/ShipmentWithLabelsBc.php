<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentBc
     */
    public $Shipment;
    /**
     * The Labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfLabel
     */
    public $Labels;
    /**
     * Constructor method for ShipmentWithLabelsBc
     * @uses ShipmentWithLabelsBc::setShipment()
     * @uses ShipmentWithLabelsBc::setLabels()
     * @param \Dpd\StructType\ShipmentBc $shipment
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\Dpd\StructType\ShipmentBc $shipment = null, \Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels);
    }
    /**
     * Get Shipment value
     * @return \Dpd\StructType\ShipmentBc|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }
    /**
     * Set Shipment value
     * @param \Dpd\StructType\ShipmentBc $shipment
     * @return \Dpd\StructType\ShipmentWithLabelsBc
     */
    public function setShipment(\Dpd\StructType\ShipmentBc $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
    /**
     * Get Labels value
     * @return \Dpd\ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->Labels;
    }
    /**
     * Set Labels value
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     * @return \Dpd\StructType\ShipmentWithLabelsBc
     */
    public function setLabels(\Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->Labels = $labels;
        return $this;
    }
}
