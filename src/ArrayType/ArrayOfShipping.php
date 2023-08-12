<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipping ArrayType
 * @subpackage Arrays
 */
class ArrayOfShipping extends AbstractStructArrayBase
{
    /**
     * The Shipping
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Shipping[]
     */
    public $Shipping;
    /**
     * Constructor method for ArrayOfShipping
     * @uses ArrayOfShipping::setShipping()
     * @param \StructType\Shipping[] $shipping
     */
    public function __construct(array $shipping = array())
    {
        $this
            ->setShipping($shipping);
    }
    /**
     * Get Shipping value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Shipping[]|null
     */
    public function getShipping()
    {
        return isset($this->Shipping) ? $this->Shipping : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShipping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipping method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingForArrayConstraintsFromSetShipping(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfShippingShippingItem) {
            // validation for constraint: itemType
            if (!$arrayOfShippingShippingItem instanceof \StructType\Shipping) {
                $invalidValues[] = is_object($arrayOfShippingShippingItem) ? get_class($arrayOfShippingShippingItem) : sprintf('%s(%s)', gettype($arrayOfShippingShippingItem), var_export($arrayOfShippingShippingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Shipping property can only contain items of type \StructType\Shipping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Shipping value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Shipping[] $shipping
     * @return \ArrayType\ArrayOfShipping
     */
    public function setShipping(array $shipping = array())
    {
        // validation for constraint: array
        if ('' !== ($shippingArrayErrorMessage = self::validateShippingForArrayConstraintsFromSetShipping($shipping))) {
            throw new \InvalidArgumentException($shippingArrayErrorMessage, __LINE__);
        }
        if (is_null($shipping) || (is_array($shipping) && empty($shipping))) {
            unset($this->Shipping);
        } else {
            $this->Shipping = $shipping;
        }
        return $this;
    }
    /**
     * Add item to Shipping value
     * @throws \InvalidArgumentException
     * @param \StructType\Shipping $item
     * @return \ArrayType\ArrayOfShipping
     */
    public function addToShipping(\StructType\Shipping $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Shipping) {
            throw new \InvalidArgumentException(sprintf('The Shipping property can only contain items of type \StructType\Shipping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Shipping[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Shipping|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Shipping|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Shipping|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Shipping|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Shipping|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Shipping
     */
    public function getAttributeName()
    {
        return 'Shipping';
    }
}
