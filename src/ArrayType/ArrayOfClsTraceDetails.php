<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClsTraceDetails ArrayType
 * @subpackage Arrays
 */
class ArrayOfClsTraceDetails extends AbstractStructArrayBase
{
    /**
     * The clsTraceDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\ClsTraceDetails[]
     */
    public $clsTraceDetails;
    /**
     * Constructor method for ArrayOfClsTraceDetails
     * @uses ArrayOfClsTraceDetails::setClsTraceDetails()
     * @param \Dpd\StructType\ClsTraceDetails[] $clsTraceDetails
     */
    public function __construct(array $clsTraceDetails = array())
    {
        $this
            ->setClsTraceDetails($clsTraceDetails);
    }
    /**
     * Get clsTraceDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\ClsTraceDetails[]|null
     */
    public function getClsTraceDetails()
    {
        return isset($this->clsTraceDetails) ? $this->clsTraceDetails : null;
    }
    /**
     * This method is responsible for validating the values passed to the setClsTraceDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClsTraceDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClsTraceDetailsForArrayConstraintsFromSetClsTraceDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClsTraceDetailsClsTraceDetailsItem) {
            // validation for constraint: itemType
            if (!$arrayOfClsTraceDetailsClsTraceDetailsItem instanceof \Dpd\StructType\ClsTraceDetails) {
                $invalidValues[] = is_object($arrayOfClsTraceDetailsClsTraceDetailsItem) ? get_class($arrayOfClsTraceDetailsClsTraceDetailsItem) : sprintf('%s(%s)', gettype($arrayOfClsTraceDetailsClsTraceDetailsItem), var_export($arrayOfClsTraceDetailsClsTraceDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The clsTraceDetails property can only contain items of type \Dpd\StructType\ClsTraceDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set clsTraceDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ClsTraceDetails[] $clsTraceDetails
     * @return \Dpd\ArrayType\ArrayOfClsTraceDetails
     */
    public function setClsTraceDetails(array $clsTraceDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($clsTraceDetailsArrayErrorMessage = self::validateClsTraceDetailsForArrayConstraintsFromSetClsTraceDetails($clsTraceDetails))) {
            throw new \InvalidArgumentException($clsTraceDetailsArrayErrorMessage, __LINE__);
        }
        if (is_null($clsTraceDetails) || (is_array($clsTraceDetails) && empty($clsTraceDetails))) {
            unset($this->clsTraceDetails);
        } else {
            $this->clsTraceDetails = $clsTraceDetails;
        }
        return $this;
    }
    /**
     * Add item to clsTraceDetails value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ClsTraceDetails $item
     * @return \Dpd\ArrayType\ArrayOfClsTraceDetails
     */
    public function addToClsTraceDetails(\Dpd\StructType\ClsTraceDetails $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\ClsTraceDetails) {
            throw new \InvalidArgumentException(sprintf('The clsTraceDetails property can only contain items of type \Dpd\StructType\ClsTraceDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->clsTraceDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\ClsTraceDetails|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\ClsTraceDetails|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\ClsTraceDetails|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\ClsTraceDetails|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\ClsTraceDetails|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string clsTraceDetails
     */
    public function getAttributeName()
    {
        return 'clsTraceDetails';
    }
}
