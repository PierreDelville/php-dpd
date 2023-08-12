<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClsTrace ArrayType
 * @subpackage Arrays
 */
class ArrayOfClsTrace extends AbstractStructArrayBase
{
    /**
     * The clsTrace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\ClsTrace[]
     */
    public $clsTrace;
    /**
     * Constructor method for ArrayOfClsTrace
     * @uses ArrayOfClsTrace::setClsTrace()
     * @param \Dpd\StructType\ClsTrace[] $clsTrace
     */
    public function __construct(array $clsTrace = array())
    {
        $this
            ->setClsTrace($clsTrace);
    }
    /**
     * Get clsTrace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\ClsTrace[]|null
     */
    public function getClsTrace()
    {
        return isset($this->clsTrace) ? $this->clsTrace : null;
    }
    /**
     * This method is responsible for validating the values passed to the setClsTrace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClsTrace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClsTraceForArrayConstraintsFromSetClsTrace(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfClsTraceClsTraceItem) {
            // validation for constraint: itemType
            if (!$arrayOfClsTraceClsTraceItem instanceof \Dpd\StructType\ClsTrace) {
                $invalidValues[] = is_object($arrayOfClsTraceClsTraceItem) ? get_class($arrayOfClsTraceClsTraceItem) : sprintf('%s(%s)', gettype($arrayOfClsTraceClsTraceItem), var_export($arrayOfClsTraceClsTraceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The clsTrace property can only contain items of type \Dpd\StructType\ClsTrace, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set clsTrace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ClsTrace[] $clsTrace
     * @return \Dpd\ArrayType\ArrayOfClsTrace
     */
    public function setClsTrace(array $clsTrace = array())
    {
        // validation for constraint: array
        if ('' !== ($clsTraceArrayErrorMessage = self::validateClsTraceForArrayConstraintsFromSetClsTrace($clsTrace))) {
            throw new \InvalidArgumentException($clsTraceArrayErrorMessage, __LINE__);
        }
        if (is_null($clsTrace) || (is_array($clsTrace) && empty($clsTrace))) {
            unset($this->clsTrace);
        } else {
            $this->clsTrace = $clsTrace;
        }
        return $this;
    }
    /**
     * Add item to clsTrace value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\ClsTrace $item
     * @return \Dpd\ArrayType\ArrayOfClsTrace
     */
    public function addToClsTrace(\Dpd\StructType\ClsTrace $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\ClsTrace) {
            throw new \InvalidArgumentException(sprintf('The clsTrace property can only contain items of type \Dpd\StructType\ClsTrace, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->clsTrace[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\ClsTrace|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\ClsTrace|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\ClsTrace|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\ClsTrace|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\ClsTrace|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string clsTrace
     */
    public function getAttributeName()
    {
        return 'clsTrace';
    }
}
