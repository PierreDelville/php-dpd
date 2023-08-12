<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentsWithLabelsBc StructType
 * @subpackage Structs
 */
class ShipmentsWithLabelsBc extends AbstractStructBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfShipmentBc
     */
    public $shipments;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfLabel
     */
    public $labels;
    /**
     * Constructor method for ShipmentsWithLabelsBc
     * @uses ShipmentsWithLabelsBc::setShipments()
     * @uses ShipmentsWithLabelsBc::setLabels()
     * @param \Dpd\ArrayType\ArrayOfShipmentBc $shipments
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipmentBc $shipments = null, \Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels);
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
     * @return \Dpd\StructType\ShipmentsWithLabelsBc
     */
    public function setShipments(\Dpd\ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this->shipments = $shipments;
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
     * @return \Dpd\StructType\ShipmentsWithLabelsBc
     */
    public function setLabels(\Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
