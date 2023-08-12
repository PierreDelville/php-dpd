<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfImage
     */
    public $images;
    /**
     * Constructor method for ShipmentTrace
     * @uses ShipmentTrace::setImages()
     * @param \ArrayType\ArrayOfImage $images
     */
    public function __construct(\ArrayType\ArrayOfImage $images = null)
    {
        $this
            ->setImages($images);
    }
    /**
     * Get images value
     * @return \ArrayType\ArrayOfImage|null
     */
    public function getImages()
    {
        return $this->images;
    }
    /**
     * Set images value
     * @param \ArrayType\ArrayOfImage $images
     * @return \StructType\ShipmentTrace
     */
    public function setImages(\ArrayType\ArrayOfImage $images = null)
    {
        $this->images = $images;
        return $this;
    }
}
