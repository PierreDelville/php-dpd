<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipment ArrayType
 * @subpackage Arrays
 */
class ArrayOfShipment extends AbstractStructArrayBase
{
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\Shipment[]
     */
    public $Shipment;
    /**
     * Constructor method for ArrayOfShipment
     * @uses ArrayOfShipment::setShipment()
     * @param \Dpd\StructType\Shipment[] $shipment
     */
    public function __construct(array $shipment = array())
    {
        $this
            ->setShipment($shipment);
    }
    /**
     * Get Shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\Shipment[]|null
     */
    public function getShipment()
    {
        return isset($this->Shipment) ? $this->Shipment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentForArrayConstraintsFromSetShipment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfShipmentShipmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentShipmentItem instanceof \Dpd\StructType\Shipment) {
                $invalidValues[] = is_object($arrayOfShipmentShipmentItem) ? get_class($arrayOfShipmentShipmentItem) : sprintf('%s(%s)', gettype($arrayOfShipmentShipmentItem), var_export($arrayOfShipmentShipmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Shipment property can only contain items of type \Dpd\StructType\Shipment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Shipment[] $shipment
     * @return \Dpd\ArrayType\ArrayOfShipment
     */
    public function setShipment(array $shipment = array())
    {
        // validation for constraint: array
        if ('' !== ($shipmentArrayErrorMessage = self::validateShipmentForArrayConstraintsFromSetShipment($shipment))) {
            throw new \InvalidArgumentException($shipmentArrayErrorMessage, __LINE__);
        }
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->Shipment);
        } else {
            $this->Shipment = $shipment;
        }
        return $this;
    }
    /**
     * Add item to Shipment value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\Shipment $item
     * @return \Dpd\ArrayType\ArrayOfShipment
     */
    public function addToShipment(\Dpd\StructType\Shipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\Shipment) {
            throw new \InvalidArgumentException(sprintf('The Shipment property can only contain items of type \Dpd\StructType\Shipment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Shipment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\Shipment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\Shipment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\Shipment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\Shipment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\Shipment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Shipment
     */
    public function getAttributeName(): string
    {
        return 'Shipment';
    }
}
