<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEntry ArrayType
 * @subpackage Arrays
 */
class ArrayOfEntry extends AbstractStructArrayBase
{
    /**
     * The Entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Entry[]
     */
    public $Entry;
    /**
     * Constructor method for ArrayOfEntry
     * @uses ArrayOfEntry::setEntry()
     * @param \StructType\Entry[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get Entry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Entry[]|null
     */
    public function getEntry()
    {
        return isset($this->Entry) ? $this->Entry : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEntryEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfEntryEntryItem instanceof \StructType\Entry) {
                $invalidValues[] = is_object($arrayOfEntryEntryItem) ? get_class($arrayOfEntryEntryItem) : sprintf('%s(%s)', gettype($arrayOfEntryEntryItem), var_export($arrayOfEntryEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Entry property can only contain items of type \StructType\Entry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Entry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Entry[] $entry
     * @return \ArrayType\ArrayOfEntry
     */
    public function setEntry(array $entry = array())
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new \InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        if (is_null($entry) || (is_array($entry) && empty($entry))) {
            unset($this->Entry);
        } else {
            $this->Entry = $entry;
        }
        return $this;
    }
    /**
     * Add item to Entry value
     * @throws \InvalidArgumentException
     * @param \StructType\Entry $item
     * @return \ArrayType\ArrayOfEntry
     */
    public function addToEntry(\StructType\Entry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Entry) {
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of type \StructType\Entry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Entry[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Entry|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Entry|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Entry|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Entry|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Entry|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Entry
     */
    public function getAttributeName()
    {
        return 'Entry';
    }
}
