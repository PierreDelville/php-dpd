<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRdvShipmentData ArrayType
 * @subpackage Arrays
 */
class ArrayOfRdvShipmentData extends AbstractStructArrayBase
{
    /**
     * The RdvShipmentData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\RdvShipmentData[]
     */
    public $RdvShipmentData;
    /**
     * Constructor method for ArrayOfRdvShipmentData
     * @uses ArrayOfRdvShipmentData::setRdvShipmentData()
     * @param \Dpd\StructType\RdvShipmentData[] $rdvShipmentData
     */
    public function __construct(array $rdvShipmentData = array())
    {
        $this
            ->setRdvShipmentData($rdvShipmentData);
    }
    /**
     * Get RdvShipmentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\RdvShipmentData[]|null
     */
    public function getRdvShipmentData()
    {
        return isset($this->RdvShipmentData) ? $this->RdvShipmentData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRdvShipmentData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRdvShipmentData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRdvShipmentDataForArrayConstraintsFromSetRdvShipmentData(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRdvShipmentDataRdvShipmentDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfRdvShipmentDataRdvShipmentDataItem instanceof \Dpd\StructType\RdvShipmentData) {
                $invalidValues[] = is_object($arrayOfRdvShipmentDataRdvShipmentDataItem) ? get_class($arrayOfRdvShipmentDataRdvShipmentDataItem) : sprintf('%s(%s)', gettype($arrayOfRdvShipmentDataRdvShipmentDataItem), var_export($arrayOfRdvShipmentDataRdvShipmentDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RdvShipmentData property can only contain items of type \Dpd\StructType\RdvShipmentData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RdvShipmentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\RdvShipmentData[] $rdvShipmentData
     * @return \Dpd\ArrayType\ArrayOfRdvShipmentData
     */
    public function setRdvShipmentData(array $rdvShipmentData = array())
    {
        // validation for constraint: array
        if ('' !== ($rdvShipmentDataArrayErrorMessage = self::validateRdvShipmentDataForArrayConstraintsFromSetRdvShipmentData($rdvShipmentData))) {
            throw new \InvalidArgumentException($rdvShipmentDataArrayErrorMessage, __LINE__);
        }
        if (is_null($rdvShipmentData) || (is_array($rdvShipmentData) && empty($rdvShipmentData))) {
            unset($this->RdvShipmentData);
        } else {
            $this->RdvShipmentData = $rdvShipmentData;
        }
        return $this;
    }
    /**
     * Add item to RdvShipmentData value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\RdvShipmentData $item
     * @return \Dpd\ArrayType\ArrayOfRdvShipmentData
     */
    public function addToRdvShipmentData(\Dpd\StructType\RdvShipmentData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\RdvShipmentData) {
            throw new \InvalidArgumentException(sprintf('The RdvShipmentData property can only contain items of type \Dpd\StructType\RdvShipmentData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RdvShipmentData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\RdvShipmentData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\RdvShipmentData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\RdvShipmentData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\RdvShipmentData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\RdvShipmentData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RdvShipmentData
     */
    public function getAttributeName(): string
    {
        return 'RdvShipmentData';
    }
}
