<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetShipmentEntry ArrayType
 * @subpackage Arrays
 */
class ArrayOfGetShipmentEntry extends AbstractStructArrayBase
{
    /**
     * The GetShipmentEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetShipmentEntry[]
     */
    public $GetShipmentEntry;
    /**
     * Constructor method for ArrayOfGetShipmentEntry
     * @uses ArrayOfGetShipmentEntry::setGetShipmentEntry()
     * @param \StructType\GetShipmentEntry[] $getShipmentEntry
     */
    public function __construct(array $getShipmentEntry = array())
    {
        $this
            ->setGetShipmentEntry($getShipmentEntry);
    }
    /**
     * Get GetShipmentEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetShipmentEntry[]|null
     */
    public function getGetShipmentEntry()
    {
        return isset($this->GetShipmentEntry) ? $this->GetShipmentEntry : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGetShipmentEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetShipmentEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetShipmentEntryForArrayConstraintsFromSetGetShipmentEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGetShipmentEntryGetShipmentEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetShipmentEntryGetShipmentEntryItem instanceof \StructType\GetShipmentEntry) {
                $invalidValues[] = is_object($arrayOfGetShipmentEntryGetShipmentEntryItem) ? get_class($arrayOfGetShipmentEntryGetShipmentEntryItem) : sprintf('%s(%s)', gettype($arrayOfGetShipmentEntryGetShipmentEntryItem), var_export($arrayOfGetShipmentEntryGetShipmentEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetShipmentEntry property can only contain items of type \StructType\GetShipmentEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GetShipmentEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GetShipmentEntry[] $getShipmentEntry
     * @return \ArrayType\ArrayOfGetShipmentEntry
     */
    public function setGetShipmentEntry(array $getShipmentEntry = array())
    {
        // validation for constraint: array
        if ('' !== ($getShipmentEntryArrayErrorMessage = self::validateGetShipmentEntryForArrayConstraintsFromSetGetShipmentEntry($getShipmentEntry))) {
            throw new \InvalidArgumentException($getShipmentEntryArrayErrorMessage, __LINE__);
        }
        if (is_null($getShipmentEntry) || (is_array($getShipmentEntry) && empty($getShipmentEntry))) {
            unset($this->GetShipmentEntry);
        } else {
            $this->GetShipmentEntry = $getShipmentEntry;
        }
        return $this;
    }
    /**
     * Add item to GetShipmentEntry value
     * @throws \InvalidArgumentException
     * @param \StructType\GetShipmentEntry $item
     * @return \ArrayType\ArrayOfGetShipmentEntry
     */
    public function addToGetShipmentEntry(\StructType\GetShipmentEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GetShipmentEntry) {
            throw new \InvalidArgumentException(sprintf('The GetShipmentEntry property can only contain items of type \StructType\GetShipmentEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetShipmentEntry[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\GetShipmentEntry|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\GetShipmentEntry|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\GetShipmentEntry|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\GetShipmentEntry|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\GetShipmentEntry|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GetShipmentEntry
     */
    public function getAttributeName()
    {
        return 'GetShipmentEntry';
    }
}
