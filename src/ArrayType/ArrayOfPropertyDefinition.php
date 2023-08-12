<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPropertyDefinition ArrayType
 * @subpackage Arrays
 */
class ArrayOfPropertyDefinition extends AbstractStructArrayBase
{
    /**
     * The PropertyDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PropertyDefinition[]
     */
    public $PropertyDefinition;
    /**
     * Constructor method for ArrayOfPropertyDefinition
     * @uses ArrayOfPropertyDefinition::setPropertyDefinition()
     * @param \StructType\PropertyDefinition[] $propertyDefinition
     */
    public function __construct(array $propertyDefinition = array())
    {
        $this
            ->setPropertyDefinition($propertyDefinition);
    }
    /**
     * Get PropertyDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PropertyDefinition[]|null
     */
    public function getPropertyDefinition()
    {
        return isset($this->PropertyDefinition) ? $this->PropertyDefinition : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPropertyDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPropertyDefinition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyDefinitionForArrayConstraintsFromSetPropertyDefinition(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPropertyDefinitionPropertyDefinitionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyDefinitionPropertyDefinitionItem instanceof \StructType\PropertyDefinition) {
                $invalidValues[] = is_object($arrayOfPropertyDefinitionPropertyDefinitionItem) ? get_class($arrayOfPropertyDefinitionPropertyDefinitionItem) : sprintf('%s(%s)', gettype($arrayOfPropertyDefinitionPropertyDefinitionItem), var_export($arrayOfPropertyDefinitionPropertyDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PropertyDefinition property can only contain items of type \StructType\PropertyDefinition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PropertyDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\PropertyDefinition[] $propertyDefinition
     * @return \ArrayType\ArrayOfPropertyDefinition
     */
    public function setPropertyDefinition(array $propertyDefinition = array())
    {
        // validation for constraint: array
        if ('' !== ($propertyDefinitionArrayErrorMessage = self::validatePropertyDefinitionForArrayConstraintsFromSetPropertyDefinition($propertyDefinition))) {
            throw new \InvalidArgumentException($propertyDefinitionArrayErrorMessage, __LINE__);
        }
        if (is_null($propertyDefinition) || (is_array($propertyDefinition) && empty($propertyDefinition))) {
            unset($this->PropertyDefinition);
        } else {
            $this->PropertyDefinition = $propertyDefinition;
        }
        return $this;
    }
    /**
     * Add item to PropertyDefinition value
     * @throws \InvalidArgumentException
     * @param \StructType\PropertyDefinition $item
     * @return \ArrayType\ArrayOfPropertyDefinition
     */
    public function addToPropertyDefinition(\StructType\PropertyDefinition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PropertyDefinition) {
            throw new \InvalidArgumentException(sprintf('The PropertyDefinition property can only contain items of type \StructType\PropertyDefinition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PropertyDefinition[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PropertyDefinition|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PropertyDefinition|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PropertyDefinition|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PropertyDefinition|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PropertyDefinition|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PropertyDefinition
     */
    public function getAttributeName()
    {
        return 'PropertyDefinition';
    }
}
