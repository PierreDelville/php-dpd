<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfShipment
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
     * Constructor method for ShipmentsWithLabels
     * @uses ShipmentsWithLabels::setShipments()
     * @uses ShipmentsWithLabels::setLabels()
     * @param \Dpd\ArrayType\ArrayOfShipment $shipments
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipment $shipments = null, \Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels);
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
     * @return \Dpd\StructType\ShipmentsWithLabels
     */
    public function setShipments(\Dpd\ArrayType\ArrayOfShipment $shipments = null)
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
     * @return \Dpd\StructType\ShipmentsWithLabels
     */
    public function setLabels(\Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
