<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomerService ArrayType
 * @subpackage Arrays
 */
class ArrayOfCustomerService extends AbstractStructArrayBase
{
    /**
     * The CustomerService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\CustomerService[]
     */
    public $CustomerService;
    /**
     * Constructor method for ArrayOfCustomerService
     * @uses ArrayOfCustomerService::setCustomerService()
     * @param \Dpd\StructType\CustomerService[] $customerService
     */
    public function __construct(array $customerService = array())
    {
        $this
            ->setCustomerService($customerService);
    }
    /**
     * Get CustomerService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\CustomerService[]|null
     */
    public function getCustomerService()
    {
        return isset($this->CustomerService) ? $this->CustomerService : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomerService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerServiceForArrayConstraintsFromSetCustomerService(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCustomerServiceCustomerServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerServiceCustomerServiceItem instanceof \Dpd\StructType\CustomerService) {
                $invalidValues[] = is_object($arrayOfCustomerServiceCustomerServiceItem) ? get_class($arrayOfCustomerServiceCustomerServiceItem) : sprintf('%s(%s)', gettype($arrayOfCustomerServiceCustomerServiceItem), var_export($arrayOfCustomerServiceCustomerServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerService property can only contain items of type \Dpd\StructType\CustomerService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CustomerService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\CustomerService[] $customerService
     * @return \Dpd\ArrayType\ArrayOfCustomerService
     */
    public function setCustomerService(array $customerService = array())
    {
        // validation for constraint: array
        if ('' !== ($customerServiceArrayErrorMessage = self::validateCustomerServiceForArrayConstraintsFromSetCustomerService($customerService))) {
            throw new \InvalidArgumentException($customerServiceArrayErrorMessage, __LINE__);
        }
        if (is_null($customerService) || (is_array($customerService) && empty($customerService))) {
            unset($this->CustomerService);
        } else {
            $this->CustomerService = $customerService;
        }
        return $this;
    }
    /**
     * Add item to CustomerService value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\CustomerService $item
     * @return \Dpd\ArrayType\ArrayOfCustomerService
     */
    public function addToCustomerService(\Dpd\StructType\CustomerService $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\CustomerService) {
            throw new \InvalidArgumentException(sprintf('The CustomerService property can only contain items of type \Dpd\StructType\CustomerService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomerService[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\CustomerService|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\CustomerService|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\CustomerService|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\CustomerService|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\CustomerService|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CustomerService
     */
    public function getAttributeName(): string
    {
        return 'CustomerService';
    }
}
