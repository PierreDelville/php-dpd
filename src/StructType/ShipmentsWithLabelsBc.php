<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfShipmentBc
     */
    public $shipments;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfLabel
     */
    public $labels;
    /**
     * Constructor method for ShipmentsWithLabelsBc
     * @uses ShipmentsWithLabelsBc::setShipments()
     * @uses ShipmentsWithLabelsBc::setLabels()
     * @param \ArrayType\ArrayOfShipmentBc $shipments
     * @param \ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\ArrayType\ArrayOfShipmentBc $shipments = null, \ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels);
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
     * @return \StructType\ShipmentsWithLabelsBc
     */
    public function setShipments(\ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this->shipments = $shipments;
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
     * @return \StructType\ShipmentsWithLabelsBc
     */
    public function setLabels(\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
