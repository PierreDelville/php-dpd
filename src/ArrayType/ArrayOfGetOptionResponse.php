<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetOptionResponse ArrayType
 * @subpackage Arrays
 */
class ArrayOfGetOptionResponse extends AbstractStructArrayBase
{
    /**
     * The GetOptionResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\GetOptionResponse[]
     */
    public $GetOptionResponse;
    /**
     * Constructor method for ArrayOfGetOptionResponse
     * @uses ArrayOfGetOptionResponse::setGetOptionResponse()
     * @param \Dpd\StructType\GetOptionResponse[] $getOptionResponse
     */
    public function __construct(array $getOptionResponse = array())
    {
        $this
            ->setGetOptionResponse($getOptionResponse);
    }
    /**
     * Get GetOptionResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\GetOptionResponse[]|null
     */
    public function getGetOptionResponse()
    {
        return isset($this->GetOptionResponse) ? $this->GetOptionResponse : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGetOptionResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetOptionResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetOptionResponseForArrayConstraintsFromSetGetOptionResponse(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGetOptionResponseGetOptionResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetOptionResponseGetOptionResponseItem instanceof \Dpd\StructType\GetOptionResponse) {
                $invalidValues[] = is_object($arrayOfGetOptionResponseGetOptionResponseItem) ? get_class($arrayOfGetOptionResponseGetOptionResponseItem) : sprintf('%s(%s)', gettype($arrayOfGetOptionResponseGetOptionResponseItem), var_export($arrayOfGetOptionResponseGetOptionResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetOptionResponse property can only contain items of type \Dpd\StructType\GetOptionResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GetOptionResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\GetOptionResponse[] $getOptionResponse
     * @return \Dpd\ArrayType\ArrayOfGetOptionResponse
     */
    public function setGetOptionResponse(array $getOptionResponse = array())
    {
        // validation for constraint: array
        if ('' !== ($getOptionResponseArrayErrorMessage = self::validateGetOptionResponseForArrayConstraintsFromSetGetOptionResponse($getOptionResponse))) {
            throw new \InvalidArgumentException($getOptionResponseArrayErrorMessage, __LINE__);
        }
        if (is_null($getOptionResponse) || (is_array($getOptionResponse) && empty($getOptionResponse))) {
            unset($this->GetOptionResponse);
        } else {
            $this->GetOptionResponse = $getOptionResponse;
        }
        return $this;
    }
    /**
     * Add item to GetOptionResponse value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\GetOptionResponse $item
     * @return \Dpd\ArrayType\ArrayOfGetOptionResponse
     */
    public function addToGetOptionResponse(\Dpd\StructType\GetOptionResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\GetOptionResponse) {
            throw new \InvalidArgumentException(sprintf('The GetOptionResponse property can only contain items of type \Dpd\StructType\GetOptionResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetOptionResponse[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\GetOptionResponse|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\GetOptionResponse|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\GetOptionResponse|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\GetOptionResponse|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\GetOptionResponse|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GetOptionResponse
     */
    public function getAttributeName(): string
    {
        return 'GetOptionResponse';
    }
}
