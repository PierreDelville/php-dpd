<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentBc ArrayType
 * @subpackage Arrays
 */
class ArrayOfShipmentBc extends AbstractStructArrayBase
{
    /**
     * The ShipmentBc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ShipmentBc[]
     */
    public $ShipmentBc;
    /**
     * Constructor method for ArrayOfShipmentBc
     * @uses ArrayOfShipmentBc::setShipmentBc()
     * @param \StructType\ShipmentBc[] $shipmentBc
     */
    public function __construct(array $shipmentBc = array())
    {
        $this
            ->setShipmentBc($shipmentBc);
    }
    /**
     * Get ShipmentBc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ShipmentBc[]|null
     */
    public function getShipmentBc()
    {
        return isset($this->ShipmentBc) ? $this->ShipmentBc : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShipmentBc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentBc method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentBcForArrayConstraintsFromSetShipmentBc(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfShipmentBcShipmentBcItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentBcShipmentBcItem instanceof \StructType\ShipmentBc) {
                $invalidValues[] = is_object($arrayOfShipmentBcShipmentBcItem) ? get_class($arrayOfShipmentBcShipmentBcItem) : sprintf('%s(%s)', gettype($arrayOfShipmentBcShipmentBcItem), var_export($arrayOfShipmentBcShipmentBcItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentBc property can only contain items of type \StructType\ShipmentBc, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShipmentBc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentBc[] $shipmentBc
     * @return \ArrayType\ArrayOfShipmentBc
     */
    public function setShipmentBc(array $shipmentBc = array())
    {
        // validation for constraint: array
        if ('' !== ($shipmentBcArrayErrorMessage = self::validateShipmentBcForArrayConstraintsFromSetShipmentBc($shipmentBc))) {
            throw new \InvalidArgumentException($shipmentBcArrayErrorMessage, __LINE__);
        }
        if (is_null($shipmentBc) || (is_array($shipmentBc) && empty($shipmentBc))) {
            unset($this->ShipmentBc);
        } else {
            $this->ShipmentBc = $shipmentBc;
        }
        return $this;
    }
    /**
     * Add item to ShipmentBc value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentBc $item
     * @return \ArrayType\ArrayOfShipmentBc
     */
    public function addToShipmentBc(\StructType\ShipmentBc $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShipmentBc) {
            throw new \InvalidArgumentException(sprintf('The ShipmentBc property can only contain items of type \StructType\ShipmentBc, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShipmentBc[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ShipmentBc|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ShipmentBc|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ShipmentBc|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ShipmentBc|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ShipmentBc|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShipmentBc
     */
    public function getAttributeName()
    {
        return 'ShipmentBc';
    }
}
