<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRdvService ArrayType
 * @subpackage Arrays
 */
class ArrayOfRdvService extends AbstractStructArrayBase
{
    /**
     * The RdvService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RdvService[]
     */
    public $RdvService;
    /**
     * Constructor method for ArrayOfRdvService
     * @uses ArrayOfRdvService::setRdvService()
     * @param \StructType\RdvService[] $rdvService
     */
    public function __construct(array $rdvService = array())
    {
        $this
            ->setRdvService($rdvService);
    }
    /**
     * Get RdvService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RdvService[]|null
     */
    public function getRdvService()
    {
        return isset($this->RdvService) ? $this->RdvService : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRdvService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRdvService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRdvServiceForArrayConstraintsFromSetRdvService(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRdvServiceRdvServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfRdvServiceRdvServiceItem instanceof \StructType\RdvService) {
                $invalidValues[] = is_object($arrayOfRdvServiceRdvServiceItem) ? get_class($arrayOfRdvServiceRdvServiceItem) : sprintf('%s(%s)', gettype($arrayOfRdvServiceRdvServiceItem), var_export($arrayOfRdvServiceRdvServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RdvService property can only contain items of type \StructType\RdvService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RdvService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\RdvService[] $rdvService
     * @return \ArrayType\ArrayOfRdvService
     */
    public function setRdvService(array $rdvService = array())
    {
        // validation for constraint: array
        if ('' !== ($rdvServiceArrayErrorMessage = self::validateRdvServiceForArrayConstraintsFromSetRdvService($rdvService))) {
            throw new \InvalidArgumentException($rdvServiceArrayErrorMessage, __LINE__);
        }
        if (is_null($rdvService) || (is_array($rdvService) && empty($rdvService))) {
            unset($this->RdvService);
        } else {
            $this->RdvService = $rdvService;
        }
        return $this;
    }
    /**
     * Add item to RdvService value
     * @throws \InvalidArgumentException
     * @param \StructType\RdvService $item
     * @return \ArrayType\ArrayOfRdvService
     */
    public function addToRdvService(\StructType\RdvService $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RdvService) {
            throw new \InvalidArgumentException(sprintf('The RdvService property can only contain items of type \StructType\RdvService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RdvService[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RdvService|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RdvService|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RdvService|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RdvService|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RdvService|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RdvService
     */
    public function getAttributeName()
    {
        return 'RdvService';
    }
}
