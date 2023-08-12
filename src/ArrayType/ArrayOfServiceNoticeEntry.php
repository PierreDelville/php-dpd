<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceNoticeEntry ArrayType
 * @subpackage Arrays
 */
class ArrayOfServiceNoticeEntry extends AbstractStructArrayBase
{
    /**
     * The ServiceNoticeEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\ServiceNoticeEntry[]
     */
    public $ServiceNoticeEntry;
    /**
     * Constructor method for ArrayOfServiceNoticeEntry
     * @uses ArrayOfServiceNoticeEntry::setServiceNoticeEntry()
     * @param \Dpd\StructType\ServiceNoticeEntry[] $serviceNoticeEntry
     */
    public function __construct(array $serviceNoticeEntry = array())
    {
        $this
            ->setServiceNoticeEntry($serviceNoticeEntry);
    }
    /**
     * Get ServiceNoticeEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\ServiceNoticeEntry[]|null
     */
    public function getServiceNoticeEntry()
    {
        return isset($this->ServiceNoticeEntry) ? $this->ServiceNoticeEntry : null;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceNoticeEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceNoticeEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceNoticeEntryForArrayConstraintsFromSetServiceNoticeEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceNoticeEntryServiceNoticeEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceNoticeEntryServiceNoticeEntryItem instanceof \Dpd\StructType\ServiceNoticeEntry) {
                $invalidValues[] = is_object($arrayOfServiceNoticeEntryServiceNoticeEntryItem) ? get_class($arrayOfServiceNoticeEntryServiceNoticeEntryItem) : sprintf('%s(%s)', gettype($arrayOfServiceNoticeEntryServiceNoticeEntryItem), var_export($arrayOfServiceNoticeEntryServiceNoticeEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceNoticeEntry property can only contain items of type \Dpd\StructType\ServiceNoticeEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ServiceNoticeEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ServiceNoticeEntry[] $serviceNoticeEntry
     * @return \Dpd\ArrayType\ArrayOfServiceNoticeEntry
     */
    public function setServiceNoticeEntry(array $serviceNoticeEntry = array())
    {
        // validation for constraint: array
        if ('' !== ($serviceNoticeEntryArrayErrorMessage = self::validateServiceNoticeEntryForArrayConstraintsFromSetServiceNoticeEntry($serviceNoticeEntry))) {
            throw new \InvalidArgumentException($serviceNoticeEntryArrayErrorMessage, __LINE__);
        }
        if (is_null($serviceNoticeEntry) || (is_array($serviceNoticeEntry) && empty($serviceNoticeEntry))) {
            unset($this->ServiceNoticeEntry);
        } else {
            $this->ServiceNoticeEntry = $serviceNoticeEntry;
        }
        return $this;
    }
    /**
     * Add item to ServiceNoticeEntry value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ServiceNoticeEntry $item
     * @return \Dpd\ArrayType\ArrayOfServiceNoticeEntry
     */
    public function addToServiceNoticeEntry(\Dpd\StructType\ServiceNoticeEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\ServiceNoticeEntry) {
            throw new \InvalidArgumentException(sprintf('The ServiceNoticeEntry property can only contain items of type \Dpd\StructType\ServiceNoticeEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ServiceNoticeEntry[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\ServiceNoticeEntry|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\ServiceNoticeEntry|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\ServiceNoticeEntry|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\ServiceNoticeEntry|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\ServiceNoticeEntry|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceNoticeEntry
     */
    public function getAttributeName()
    {
        return 'ServiceNoticeEntry';
    }
}
