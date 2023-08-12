<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCNOTParcel ArrayType
 * @subpackage Arrays
 */
class ArrayOfCNOTParcel extends AbstractStructArrayBase
{
    /**
     * The CNOTParcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\CNOTParcel[]
     */
    public $CNOTParcel;
    /**
     * Constructor method for ArrayOfCNOTParcel
     * @uses ArrayOfCNOTParcel::setCNOTParcel()
     * @param \Dpd\StructType\CNOTParcel[] $cNOTParcel
     */
    public function __construct(array $cNOTParcel = array())
    {
        $this
            ->setCNOTParcel($cNOTParcel);
    }
    /**
     * Get CNOTParcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\CNOTParcel[]|null
     */
    public function getCNOTParcel()
    {
        return isset($this->CNOTParcel) ? $this->CNOTParcel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCNOTParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCNOTParcel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCNOTParcelForArrayConstraintsFromSetCNOTParcel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCNOTParcelCNOTParcelItem) {
            // validation for constraint: itemType
            if (!$arrayOfCNOTParcelCNOTParcelItem instanceof \Dpd\StructType\CNOTParcel) {
                $invalidValues[] = is_object($arrayOfCNOTParcelCNOTParcelItem) ? get_class($arrayOfCNOTParcelCNOTParcelItem) : sprintf('%s(%s)', gettype($arrayOfCNOTParcelCNOTParcelItem), var_export($arrayOfCNOTParcelCNOTParcelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CNOTParcel property can only contain items of type \Dpd\StructType\CNOTParcel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CNOTParcel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\CNOTParcel[] $cNOTParcel
     * @return \Dpd\ArrayType\ArrayOfCNOTParcel
     */
    public function setCNOTParcel(array $cNOTParcel = array())
    {
        // validation for constraint: array
        if ('' !== ($cNOTParcelArrayErrorMessage = self::validateCNOTParcelForArrayConstraintsFromSetCNOTParcel($cNOTParcel))) {
            throw new \InvalidArgumentException($cNOTParcelArrayErrorMessage, __LINE__);
        }
        if (is_null($cNOTParcel) || (is_array($cNOTParcel) && empty($cNOTParcel))) {
            unset($this->CNOTParcel);
        } else {
            $this->CNOTParcel = $cNOTParcel;
        }
        return $this;
    }
    /**
     * Add item to CNOTParcel value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\CNOTParcel $item
     * @return \Dpd\ArrayType\ArrayOfCNOTParcel
     */
    public function addToCNOTParcel(\Dpd\StructType\CNOTParcel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\CNOTParcel) {
            throw new \InvalidArgumentException(sprintf('The CNOTParcel property can only contain items of type \Dpd\StructType\CNOTParcel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CNOTParcel[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\CNOTParcel|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\CNOTParcel|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\CNOTParcel|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\CNOTParcel|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\CNOTParcel|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CNOTParcel
     */
    public function getAttributeName()
    {
        return 'CNOTParcel';
    }
}
