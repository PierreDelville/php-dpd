<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfImage ArrayType
 * @subpackage Arrays
 */
class ArrayOfImage extends AbstractStructArrayBase
{
    /**
     * The Image
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Image[]
     */
    public $Image;
    /**
     * Constructor method for ArrayOfImage
     * @uses ArrayOfImage::setImage()
     * @param \StructType\Image[] $image
     */
    public function __construct(array $image = array())
    {
        $this
            ->setImage($image);
    }
    /**
     * Get Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Image[]|null
     */
    public function getImage()
    {
        return isset($this->Image) ? $this->Image : null;
    }
    /**
     * This method is responsible for validating the values passed to the setImage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImageForArrayConstraintsFromSetImage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfImageImageItem) {
            // validation for constraint: itemType
            if (!$arrayOfImageImageItem instanceof \StructType\Image) {
                $invalidValues[] = is_object($arrayOfImageImageItem) ? get_class($arrayOfImageImageItem) : sprintf('%s(%s)', gettype($arrayOfImageImageItem), var_export($arrayOfImageImageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Image property can only contain items of type \StructType\Image, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Image[] $image
     * @return \ArrayType\ArrayOfImage
     */
    public function setImage(array $image = array())
    {
        // validation for constraint: array
        if ('' !== ($imageArrayErrorMessage = self::validateImageForArrayConstraintsFromSetImage($image))) {
            throw new \InvalidArgumentException($imageArrayErrorMessage, __LINE__);
        }
        if (is_null($image) || (is_array($image) && empty($image))) {
            unset($this->Image);
        } else {
            $this->Image = $image;
        }
        return $this;
    }
    /**
     * Add item to Image value
     * @throws \InvalidArgumentException
     * @param \StructType\Image $item
     * @return \ArrayType\ArrayOfImage
     */
    public function addToImage(\StructType\Image $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Image) {
            throw new \InvalidArgumentException(sprintf('The Image property can only contain items of type \StructType\Image, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Image[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Image|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Image|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Image|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Image|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Image|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Image
     */
    public function getAttributeName()
    {
        return 'Image';
    }
}
