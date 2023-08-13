<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfText ArrayType
 * @subpackage Arrays
 */
class ArrayOfText extends AbstractStructArrayBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\Text[]
     */
    public $Text;
    /**
     * Constructor method for ArrayOfText
     * @uses ArrayOfText::setText()
     * @param \Dpd\StructType\Text[] $text
     */
    public function __construct(array $text = array())
    {
        $this
            ->setText($text);
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\Text[]|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * This method is responsible for validating the values passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintsFromSetText(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTextTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfTextTextItem instanceof \Dpd\StructType\Text) {
                $invalidValues[] = is_object($arrayOfTextTextItem) ? get_class($arrayOfTextTextItem) : sprintf('%s(%s)', gettype($arrayOfTextTextItem), var_export($arrayOfTextTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type \Dpd\StructType\Text, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Text[] $text
     * @return \Dpd\ArrayType\ArrayOfText
     */
    public function setText(array $text = array())
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new \InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Text $item
     * @return \Dpd\ArrayType\ArrayOfText
     */
    public function addToText(\Dpd\StructType\Text $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\Text) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of type \Dpd\StructType\Text, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\Text|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\Text|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\Text|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\Text|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\Text|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Text
     */
    public function getAttributeName(): string
    {
        return 'Text';
    }
}
