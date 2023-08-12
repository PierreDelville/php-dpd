<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentTrace ArrayType
 * @subpackage Arrays
 */
class ArrayOfShipmentTrace extends AbstractStructArrayBase
{
    /**
     * The ShipmentTrace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ShipmentTrace[]
     */
    public $ShipmentTrace;
    /**
     * Constructor method for ArrayOfShipmentTrace
     * @uses ArrayOfShipmentTrace::setShipmentTrace()
     * @param \StructType\ShipmentTrace[] $shipmentTrace
     */
    public function __construct(array $shipmentTrace = array())
    {
        $this
            ->setShipmentTrace($shipmentTrace);
    }
    /**
     * Get ShipmentTrace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ShipmentTrace[]|null
     */
    public function getShipmentTrace()
    {
        return isset($this->ShipmentTrace) ? $this->ShipmentTrace : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShipmentTrace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentTrace method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentTraceForArrayConstraintsFromSetShipmentTrace(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfShipmentTraceShipmentTraceItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentTraceShipmentTraceItem instanceof \StructType\ShipmentTrace) {
                $invalidValues[] = is_object($arrayOfShipmentTraceShipmentTraceItem) ? get_class($arrayOfShipmentTraceShipmentTraceItem) : sprintf('%s(%s)', gettype($arrayOfShipmentTraceShipmentTraceItem), var_export($arrayOfShipmentTraceShipmentTraceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentTrace property can only contain items of type \StructType\ShipmentTrace, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShipmentTrace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentTrace[] $shipmentTrace
     * @return \ArrayType\ArrayOfShipmentTrace
     */
    public function setShipmentTrace(array $shipmentTrace = array())
    {
        // validation for constraint: array
        if ('' !== ($shipmentTraceArrayErrorMessage = self::validateShipmentTraceForArrayConstraintsFromSetShipmentTrace($shipmentTrace))) {
            throw new \InvalidArgumentException($shipmentTraceArrayErrorMessage, __LINE__);
        }
        if (is_null($shipmentTrace) || (is_array($shipmentTrace) && empty($shipmentTrace))) {
            unset($this->ShipmentTrace);
        } else {
            $this->ShipmentTrace = $shipmentTrace;
        }
        return $this;
    }
    /**
     * Add item to ShipmentTrace value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentTrace $item
     * @return \ArrayType\ArrayOfShipmentTrace
     */
    public function addToShipmentTrace(\StructType\ShipmentTrace $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShipmentTrace) {
            throw new \InvalidArgumentException(sprintf('The ShipmentTrace property can only contain items of type \StructType\ShipmentTrace, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShipmentTrace[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ShipmentTrace|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ShipmentTrace|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ShipmentTrace|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ShipmentTrace|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ShipmentTrace|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShipmentTrace
     */
    public function getAttributeName()
    {
        return 'ShipmentTrace';
    }
}
