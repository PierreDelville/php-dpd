<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLocation ArrayType
 * @subpackage Arrays
 */
class ArrayOfLocation extends AbstractStructArrayBase
{
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Location[]
     */
    public $Location;
    /**
     * Constructor method for ArrayOfLocation
     * @uses ArrayOfLocation::setLocation()
     * @param \StructType\Location[] $location
     */
    public function __construct(array $location = array())
    {
        $this
            ->setLocation($location);
    }
    /**
     * Get Location value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Location[]|null
     */
    public function getLocation()
    {
        return isset($this->Location) ? $this->Location : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocationForArrayConstraintsFromSetLocation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLocationLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfLocationLocationItem instanceof \StructType\Location) {
                $invalidValues[] = is_object($arrayOfLocationLocationItem) ? get_class($arrayOfLocationLocationItem) : sprintf('%s(%s)', gettype($arrayOfLocationLocationItem), var_export($arrayOfLocationLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location property can only contain items of type \StructType\Location, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Location[] $location
     * @return \ArrayType\ArrayOfLocation
     */
    public function setLocation(array $location = array())
    {
        // validation for constraint: array
        if ('' !== ($locationArrayErrorMessage = self::validateLocationForArrayConstraintsFromSetLocation($location))) {
            throw new \InvalidArgumentException($locationArrayErrorMessage, __LINE__);
        }
        if (is_null($location) || (is_array($location) && empty($location))) {
            unset($this->Location);
        } else {
            $this->Location = $location;
        }
        return $this;
    }
    /**
     * Add item to Location value
     * @throws \InvalidArgumentException
     * @param \StructType\Location $item
     * @return \ArrayType\ArrayOfLocation
     */
    public function addToLocation(\StructType\Location $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Location) {
            throw new \InvalidArgumentException(sprintf('The Location property can only contain items of type \StructType\Location, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Location|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Location|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Location|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Location|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Location|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Location
     */
    public function getAttributeName()
    {
        return 'Location';
    }
}
