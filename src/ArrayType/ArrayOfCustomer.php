<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomer ArrayType
 * @subpackage Arrays
 */
class ArrayOfCustomer extends AbstractStructArrayBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Customer[]
     */
    public $Customer;
    /**
     * Constructor method for ArrayOfCustomer
     * @uses ArrayOfCustomer::setCustomer()
     * @param \StructType\Customer[] $customer
     */
    public function __construct(array $customer = array())
    {
        $this
            ->setCustomer($customer);
    }
    /**
     * Get Customer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Customer[]|null
     */
    public function getCustomer()
    {
        return isset($this->Customer) ? $this->Customer : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintsFromSetCustomer(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCustomerCustomerItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerCustomerItem instanceof \StructType\Customer) {
                $invalidValues[] = is_object($arrayOfCustomerCustomerItem) ? get_class($arrayOfCustomerCustomerItem) : sprintf('%s(%s)', gettype($arrayOfCustomerCustomerItem), var_export($arrayOfCustomerCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer property can only contain items of type \StructType\Customer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Customer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Customer[] $customer
     * @return \ArrayType\ArrayOfCustomer
     */
    public function setCustomer(array $customer = array())
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintsFromSetCustomer($customer))) {
            throw new \InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }
        if (is_null($customer) || (is_array($customer) && empty($customer))) {
            unset($this->Customer);
        } else {
            $this->Customer = $customer;
        }
        return $this;
    }
    /**
     * Add item to Customer value
     * @throws \InvalidArgumentException
     * @param \StructType\Customer $item
     * @return \ArrayType\ArrayOfCustomer
     */
    public function addToCustomer(\StructType\Customer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Customer) {
            throw new \InvalidArgumentException(sprintf('The Customer property can only contain items of type \StructType\Customer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Customer[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Customer|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Customer|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Customer|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Customer|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Customer|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Customer
     */
    public function getAttributeName()
    {
        return 'Customer';
    }
}
