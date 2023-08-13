<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLabel ArrayType
 * @subpackage Arrays
 */
class ArrayOfLabel extends AbstractStructArrayBase
{
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\Label[]
     */
    public $Label;
    /**
     * Constructor method for ArrayOfLabel
     * @uses ArrayOfLabel::setLabel()
     * @param \Dpd\StructType\Label[] $label
     */
    public function __construct(array $label = array())
    {
        $this
            ->setLabel($label);
    }
    /**
     * Get Label value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\Label[]|null
     */
    public function getLabel()
    {
        return isset($this->Label) ? $this->Label : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLabel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLabel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLabelForArrayConstraintsFromSetLabel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLabelLabelItem) {
            // validation for constraint: itemType
            if (!$arrayOfLabelLabelItem instanceof \Dpd\StructType\Label) {
                $invalidValues[] = is_object($arrayOfLabelLabelItem) ? get_class($arrayOfLabelLabelItem) : sprintf('%s(%s)', gettype($arrayOfLabelLabelItem), var_export($arrayOfLabelLabelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Label property can only contain items of type \Dpd\StructType\Label, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Label value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Label[] $label
     * @return \Dpd\ArrayType\ArrayOfLabel
     */
    public function setLabel(array $label = array())
    {
        // validation for constraint: array
        if ('' !== ($labelArrayErrorMessage = self::validateLabelForArrayConstraintsFromSetLabel($label))) {
            throw new \InvalidArgumentException($labelArrayErrorMessage, __LINE__);
        }
        if (is_null($label) || (is_array($label) && empty($label))) {
            unset($this->Label);
        } else {
            $this->Label = $label;
        }
        return $this;
    }
    /**
     * Add item to Label value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Label $item
     * @return \Dpd\ArrayType\ArrayOfLabel
     */
    public function addToLabel(\Dpd\StructType\Label $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\Label) {
            throw new \InvalidArgumentException(sprintf('The Label property can only contain items of type \Dpd\StructType\Label, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Label[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\Label|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\Label|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\Label|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\Label|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\Label|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Label
     */
    public function getAttributeName(): string
    {
        return 'Label';
    }
}
