<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBase64Binary ArrayType
 * @subpackage Arrays
 */
class ArrayOfBase64Binary extends AbstractStructArrayBase
{
    /**
     * The base64Binary
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $base64Binary;
    /**
     * Constructor method for ArrayOfBase64Binary
     * @uses ArrayOfBase64Binary::setBase64Binary()
     * @param string[] $base64Binary
     */
    public function __construct(array $base64Binary = array())
    {
        $this
            ->setBase64Binary($base64Binary);
    }
    /**
     * Get base64Binary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getBase64Binary()
    {
        return isset($this->base64Binary) ? $this->base64Binary : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBase64Binary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBase64Binary method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBase64BinaryForArrayConstraintsFromSetBase64Binary(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBase64BinaryBase64BinaryItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfBase64BinaryBase64BinaryItem)) {
                $invalidValues[] = is_object($arrayOfBase64BinaryBase64BinaryItem) ? get_class($arrayOfBase64BinaryBase64BinaryItem) : sprintf('%s(%s)', gettype($arrayOfBase64BinaryBase64BinaryItem), var_export($arrayOfBase64BinaryBase64BinaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The base64Binary property can only contain items of type base64Binary, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set base64Binary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $base64Binary
     * @return \Dpd\ArrayType\ArrayOfBase64Binary
     */
    public function setBase64Binary(array $base64Binary = array())
    {
        // validation for constraint: array
        if ('' !== ($base64BinaryArrayErrorMessage = self::validateBase64BinaryForArrayConstraintsFromSetBase64Binary($base64Binary))) {
            throw new \InvalidArgumentException($base64BinaryArrayErrorMessage, __LINE__);
        }
        if (is_null($base64Binary) || (is_array($base64Binary) && empty($base64Binary))) {
            unset($this->base64Binary);
        } else {
            $this->base64Binary = $base64Binary;
        }
        return $this;
    }
    /**
     * Add item to base64Binary value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Dpd\ArrayType\ArrayOfBase64Binary
     */
    public function addToBase64Binary($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The base64Binary property can only contain items of type base64Binary, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->base64Binary[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string base64Binary
     */
    public function getAttributeName()
    {
        return 'base64Binary';
    }
}
