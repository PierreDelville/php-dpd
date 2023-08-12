<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceEntry ArrayType
 * @subpackage Arrays
 */
class ArrayOfServiceEntry extends AbstractStructArrayBase
{
    /**
     * The ServiceEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ServiceEntry[]
     */
    public $ServiceEntry;
    /**
     * Constructor method for ArrayOfServiceEntry
     * @uses ArrayOfServiceEntry::setServiceEntry()
     * @param \StructType\ServiceEntry[] $serviceEntry
     */
    public function __construct(array $serviceEntry = array())
    {
        $this
            ->setServiceEntry($serviceEntry);
    }
    /**
     * Get ServiceEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ServiceEntry[]|null
     */
    public function getServiceEntry()
    {
        return isset($this->ServiceEntry) ? $this->ServiceEntry : null;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceEntryForArrayConstraintsFromSetServiceEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServiceEntryServiceEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceEntryServiceEntryItem instanceof \StructType\ServiceEntry) {
                $invalidValues[] = is_object($arrayOfServiceEntryServiceEntryItem) ? get_class($arrayOfServiceEntryServiceEntryItem) : sprintf('%s(%s)', gettype($arrayOfServiceEntryServiceEntryItem), var_export($arrayOfServiceEntryServiceEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceEntry property can only contain items of type \StructType\ServiceEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ServiceEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ServiceEntry[] $serviceEntry
     * @return \ArrayType\ArrayOfServiceEntry
     */
    public function setServiceEntry(array $serviceEntry = array())
    {
        // validation for constraint: array
        if ('' !== ($serviceEntryArrayErrorMessage = self::validateServiceEntryForArrayConstraintsFromSetServiceEntry($serviceEntry))) {
            throw new \InvalidArgumentException($serviceEntryArrayErrorMessage, __LINE__);
        }
        if (is_null($serviceEntry) || (is_array($serviceEntry) && empty($serviceEntry))) {
            unset($this->ServiceEntry);
        } else {
            $this->ServiceEntry = $serviceEntry;
        }
        return $this;
    }
    /**
     * Add item to ServiceEntry value
     * @throws \InvalidArgumentException
     * @param \StructType\ServiceEntry $item
     * @return \ArrayType\ArrayOfServiceEntry
     */
    public function addToServiceEntry(\StructType\ServiceEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ServiceEntry) {
            throw new \InvalidArgumentException(sprintf('The ServiceEntry property can only contain items of type \StructType\ServiceEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ServiceEntry[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ServiceEntry|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ServiceEntry|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ServiceEntry|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ServiceEntry|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ServiceEntry|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServiceEntry
     */
    public function getAttributeName()
    {
        return 'ServiceEntry';
    }
}
