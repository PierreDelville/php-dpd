<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProfileAddress ArrayType
 * @subpackage Arrays
 */
class ArrayOfProfileAddress extends AbstractStructArrayBase
{
    /**
     * The ProfileAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\ProfileAddress[]
     */
    public $ProfileAddress;
    /**
     * Constructor method for ArrayOfProfileAddress
     * @uses ArrayOfProfileAddress::setProfileAddress()
     * @param \Dpd\StructType\ProfileAddress[] $profileAddress
     */
    public function __construct(array $profileAddress = array())
    {
        $this
            ->setProfileAddress($profileAddress);
    }
    /**
     * Get ProfileAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\ProfileAddress[]|null
     */
    public function getProfileAddress()
    {
        return isset($this->ProfileAddress) ? $this->ProfileAddress : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProfileAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfileAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfileAddressForArrayConstraintsFromSetProfileAddress(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProfileAddressProfileAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfProfileAddressProfileAddressItem instanceof \Dpd\StructType\ProfileAddress) {
                $invalidValues[] = is_object($arrayOfProfileAddressProfileAddressItem) ? get_class($arrayOfProfileAddressProfileAddressItem) : sprintf('%s(%s)', gettype($arrayOfProfileAddressProfileAddressItem), var_export($arrayOfProfileAddressProfileAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProfileAddress property can only contain items of type \Dpd\StructType\ProfileAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProfileAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ProfileAddress[] $profileAddress
     * @return \Dpd\ArrayType\ArrayOfProfileAddress
     */
    public function setProfileAddress(array $profileAddress = array())
    {
        // validation for constraint: array
        if ('' !== ($profileAddressArrayErrorMessage = self::validateProfileAddressForArrayConstraintsFromSetProfileAddress($profileAddress))) {
            throw new \InvalidArgumentException($profileAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($profileAddress) || (is_array($profileAddress) && empty($profileAddress))) {
            unset($this->ProfileAddress);
        } else {
            $this->ProfileAddress = $profileAddress;
        }
        return $this;
    }
    /**
     * Add item to ProfileAddress value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ProfileAddress $item
     * @return \Dpd\ArrayType\ArrayOfProfileAddress
     */
    public function addToProfileAddress(\Dpd\StructType\ProfileAddress $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\ProfileAddress) {
            throw new \InvalidArgumentException(sprintf('The ProfileAddress property can only contain items of type \Dpd\StructType\ProfileAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProfileAddress[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\ProfileAddress|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\ProfileAddress|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\ProfileAddress|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\ProfileAddress|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\ProfileAddress|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProfileAddress
     */
    public function getAttributeName()
    {
        return 'ProfileAddress';
    }
}
