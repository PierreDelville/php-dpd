<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Image StructType
 * @subpackage Structs
 */
class Image extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $type;
    /**
     * The image
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $image;
    /**
     * Constructor method for Image
     * @uses Image::setType()
     * @uses Image::setImage()
     * @param string $type
     * @param string $image
     */
    public function __construct($type = null, $image = null)
    {
        $this
            ->setType($type)
            ->setImage($image);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\ImageType::valueIsValid()
     * @uses \EnumType\ImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Image
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ImageType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ImageType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ImageType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \StructType\Image
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->image = $image;
        return $this;
    }
}
