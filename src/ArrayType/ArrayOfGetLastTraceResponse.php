<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetLastTraceResponse ArrayType
 * @subpackage Arrays
 */
class ArrayOfGetLastTraceResponse extends AbstractStructArrayBase
{
    /**
     * The GetLastTraceResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetLastTraceResponse[]
     */
    public $GetLastTraceResponse;
    /**
     * Constructor method for ArrayOfGetLastTraceResponse
     * @uses ArrayOfGetLastTraceResponse::setGetLastTraceResponse()
     * @param \StructType\GetLastTraceResponse[] $getLastTraceResponse
     */
    public function __construct(array $getLastTraceResponse = array())
    {
        $this
            ->setGetLastTraceResponse($getLastTraceResponse);
    }
    /**
     * Get GetLastTraceResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetLastTraceResponse[]|null
     */
    public function getGetLastTraceResponse()
    {
        return isset($this->GetLastTraceResponse) ? $this->GetLastTraceResponse : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLastTraceResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLastTraceResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLastTraceResponseForArrayConstraintsFromSetGetLastTraceResponse(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGetLastTraceResponseGetLastTraceResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetLastTraceResponseGetLastTraceResponseItem instanceof \StructType\GetLastTraceResponse) {
                $invalidValues[] = is_object($arrayOfGetLastTraceResponseGetLastTraceResponseItem) ? get_class($arrayOfGetLastTraceResponseGetLastTraceResponseItem) : sprintf('%s(%s)', gettype($arrayOfGetLastTraceResponseGetLastTraceResponseItem), var_export($arrayOfGetLastTraceResponseGetLastTraceResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetLastTraceResponse property can only contain items of type \StructType\GetLastTraceResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GetLastTraceResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GetLastTraceResponse[] $getLastTraceResponse
     * @return \ArrayType\ArrayOfGetLastTraceResponse
     */
    public function setGetLastTraceResponse(array $getLastTraceResponse = array())
    {
        // validation for constraint: array
        if ('' !== ($getLastTraceResponseArrayErrorMessage = self::validateGetLastTraceResponseForArrayConstraintsFromSetGetLastTraceResponse($getLastTraceResponse))) {
            throw new \InvalidArgumentException($getLastTraceResponseArrayErrorMessage, __LINE__);
        }
        if (is_null($getLastTraceResponse) || (is_array($getLastTraceResponse) && empty($getLastTraceResponse))) {
            unset($this->GetLastTraceResponse);
        } else {
            $this->GetLastTraceResponse = $getLastTraceResponse;
        }
        return $this;
    }
    /**
     * Add item to GetLastTraceResponse value
     * @throws \InvalidArgumentException
     * @param \StructType\GetLastTraceResponse $item
     * @return \ArrayType\ArrayOfGetLastTraceResponse
     */
    public function addToGetLastTraceResponse(\StructType\GetLastTraceResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GetLastTraceResponse) {
            throw new \InvalidArgumentException(sprintf('The GetLastTraceResponse property can only contain items of type \StructType\GetLastTraceResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetLastTraceResponse[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\GetLastTraceResponse|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\GetLastTraceResponse|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\GetLastTraceResponse|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\GetLastTraceResponse|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\GetLastTraceResponse|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GetLastTraceResponse
     */
    public function getAttributeName()
    {
        return 'GetLastTraceResponse';
    }
}
