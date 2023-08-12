<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentsWithLabels StructType
 * @subpackage Structs
 */
class ShipmentsWithLabels extends AbstractStructBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipment
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
     * Constructor method for ShipmentsWithLabels
     * @uses ShipmentsWithLabels::setShipments()
     * @uses ShipmentsWithLabels::setLabels()
     * @param \ArrayType\ArrayOfShipment $shipments
     * @param \ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\ArrayType\ArrayOfShipment $shipments = null, \ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels);
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
     * @return \StructType\ShipmentsWithLabels
     */
    public function setShipments(\ArrayType\ArrayOfShipment $shipments = null)
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
     * @return \StructType\ShipmentsWithLabels
     */
    public function setLabels(\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
