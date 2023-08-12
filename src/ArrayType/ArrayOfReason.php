<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReason ArrayType
 * @subpackage Arrays
 */
class ArrayOfReason extends AbstractStructArrayBase
{
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Reason[]
     */
    public $Reason;
    /**
     * Constructor method for ArrayOfReason
     * @uses ArrayOfReason::setReason()
     * @param \StructType\Reason[] $reason
     */
    public function __construct(array $reason = array())
    {
        $this
            ->setReason($reason);
    }
    /**
     * Get Reason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Reason[]|null
     */
    public function getReason()
    {
        return isset($this->Reason) ? $this->Reason : null;
    }
    /**
     * This method is responsible for validating the values passed to the setReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReasonForArrayConstraintsFromSetReason(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfReasonReasonItem) {
            // validation for constraint: itemType
            if (!$arrayOfReasonReasonItem instanceof \StructType\Reason) {
                $invalidValues[] = is_object($arrayOfReasonReasonItem) ? get_class($arrayOfReasonReasonItem) : sprintf('%s(%s)', gettype($arrayOfReasonReasonItem), var_export($arrayOfReasonReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Reason property can only contain items of type \StructType\Reason, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Reason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Reason[] $reason
     * @return \ArrayType\ArrayOfReason
     */
    public function setReason(array $reason = array())
    {
        // validation for constraint: array
        if ('' !== ($reasonArrayErrorMessage = self::validateReasonForArrayConstraintsFromSetReason($reason))) {
            throw new \InvalidArgumentException($reasonArrayErrorMessage, __LINE__);
        }
        if (is_null($reason) || (is_array($reason) && empty($reason))) {
            unset($this->Reason);
        } else {
            $this->Reason = $reason;
        }
        return $this;
    }
    /**
     * Add item to Reason value
     * @throws \InvalidArgumentException
     * @param \StructType\Reason $item
     * @return \ArrayType\ArrayOfReason
     */
    public function addToReason(\StructType\Reason $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Reason) {
            throw new \InvalidArgumentException(sprintf('The Reason property can only contain items of type \StructType\Reason, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Reason[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Reason|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Reason|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Reason|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Reason|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Reason|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Reason
     */
    public function getAttributeName()
    {
        return 'Reason';
    }
}
