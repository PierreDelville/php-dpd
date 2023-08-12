<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentTrace StructType
 * @subpackage Structs
 */
class ShipmentTrace extends ClsShipmentTraceBase
{
    /**
     * The images
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfImage
     */
    public $images;
    /**
     * Constructor method for ShipmentTrace
     * @uses ShipmentTrace::setImages()
     * @param \Dpd\ArrayType\ArrayOfImage $images
     */
    public function __construct(\Dpd\ArrayType\ArrayOfImage $images = null)
    {
        $this
            ->setImages($images);
    }
    /**
     * Get images value
     * @return \Dpd\ArrayType\ArrayOfImage|null
     */
    public function getImages()
    {
        return $this->images;
    }
    /**
     * Set images value
     * @param \Dpd\ArrayType\ArrayOfImage $images
     * @return \Dpd\StructType\ShipmentTrace
     */
    public function setImages(\Dpd\ArrayType\ArrayOfImage $images = null)
    {
        $this->images = $images;
        return $this;
    }
}
