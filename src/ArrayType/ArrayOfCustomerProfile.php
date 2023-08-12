<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomerProfile ArrayType
 * @subpackage Arrays
 */
class ArrayOfCustomerProfile extends AbstractStructArrayBase
{
    /**
     * The CustomerProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\CustomerProfile[]
     */
    public $CustomerProfile;
    /**
     * Constructor method for ArrayOfCustomerProfile
     * @uses ArrayOfCustomerProfile::setCustomerProfile()
     * @param \Dpd\StructType\CustomerProfile[] $customerProfile
     */
    public function __construct(array $customerProfile = array())
    {
        $this
            ->setCustomerProfile($customerProfile);
    }
    /**
     * Get CustomerProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\CustomerProfile[]|null
     */
    public function getCustomerProfile()
    {
        return isset($this->CustomerProfile) ? $this->CustomerProfile : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomerProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerProfile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerProfileForArrayConstraintsFromSetCustomerProfile(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCustomerProfileCustomerProfileItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerProfileCustomerProfileItem instanceof \Dpd\StructType\CustomerProfile) {
                $invalidValues[] = is_object($arrayOfCustomerProfileCustomerProfileItem) ? get_class($arrayOfCustomerProfileCustomerProfileItem) : sprintf('%s(%s)', gettype($arrayOfCustomerProfileCustomerProfileItem), var_export($arrayOfCustomerProfileCustomerProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerProfile property can only contain items of type \Dpd\StructType\CustomerProfile, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CustomerProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\CustomerProfile[] $customerProfile
     * @return \Dpd\ArrayType\ArrayOfCustomerProfile
     */
    public function setCustomerProfile(array $customerProfile = array())
    {
        // validation for constraint: array
        if ('' !== ($customerProfileArrayErrorMessage = self::validateCustomerProfileForArrayConstraintsFromSetCustomerProfile($customerProfile))) {
            throw new \InvalidArgumentException($customerProfileArrayErrorMessage, __LINE__);
        }
        if (is_null($customerProfile) || (is_array($customerProfile) && empty($customerProfile))) {
            unset($this->CustomerProfile);
        } else {
            $this->CustomerProfile = $customerProfile;
        }
        return $this;
    }
    /**
     * Add item to CustomerProfile value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\CustomerProfile $item
     * @return \Dpd\ArrayType\ArrayOfCustomerProfile
     */
    public function addToCustomerProfile(\Dpd\StructType\CustomerProfile $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\CustomerProfile) {
            throw new \InvalidArgumentException(sprintf('The CustomerProfile property can only contain items of type \Dpd\StructType\CustomerProfile, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomerProfile[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\CustomerProfile|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\CustomerProfile|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\CustomerProfile|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\CustomerProfile|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\CustomerProfile|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomerProfile
     */
    public function getAttributeName()
    {
        return 'CustomerProfile';
    }
}
