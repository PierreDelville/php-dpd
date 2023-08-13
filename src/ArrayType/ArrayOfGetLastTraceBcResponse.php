<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetLastTraceBcResponse ArrayType
 * @subpackage Arrays
 */
class ArrayOfGetLastTraceBcResponse extends AbstractStructArrayBase
{
    /**
     * The GetLastTraceBcResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\GetLastTraceBcResponse[]
     */
    public $GetLastTraceBcResponse;
    /**
     * Constructor method for ArrayOfGetLastTraceBcResponse
     * @uses ArrayOfGetLastTraceBcResponse::setGetLastTraceBcResponse()
     * @param \Dpd\StructType\GetLastTraceBcResponse[] $getLastTraceBcResponse
     */
    public function __construct(array $getLastTraceBcResponse = array())
    {
        $this
            ->setGetLastTraceBcResponse($getLastTraceBcResponse);
    }
    /**
     * Get GetLastTraceBcResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\GetLastTraceBcResponse[]|null
     */
    public function getGetLastTraceBcResponse()
    {
        return isset($this->GetLastTraceBcResponse) ? $this->GetLastTraceBcResponse : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLastTraceBcResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLastTraceBcResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLastTraceBcResponseForArrayConstraintsFromSetGetLastTraceBcResponse(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem instanceof \Dpd\StructType\GetLastTraceBcResponse) {
                $invalidValues[] = is_object($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem) ? get_class($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem) : sprintf('%s(%s)', gettype($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem), var_export($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetLastTraceBcResponse property can only contain items of type \Dpd\StructType\GetLastTraceBcResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GetLastTraceBcResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\GetLastTraceBcResponse[] $getLastTraceBcResponse
     * @return \Dpd\ArrayType\ArrayOfGetLastTraceBcResponse
     */
    public function setGetLastTraceBcResponse(array $getLastTraceBcResponse = array())
    {
        // validation for constraint: array
        if ('' !== ($getLastTraceBcResponseArrayErrorMessage = self::validateGetLastTraceBcResponseForArrayConstraintsFromSetGetLastTraceBcResponse($getLastTraceBcResponse))) {
            throw new \InvalidArgumentException($getLastTraceBcResponseArrayErrorMessage, __LINE__);
        }
        if (is_null($getLastTraceBcResponse) || (is_array($getLastTraceBcResponse) && empty($getLastTraceBcResponse))) {
            unset($this->GetLastTraceBcResponse);
        } else {
            $this->GetLastTraceBcResponse = $getLastTraceBcResponse;
        }
        return $this;
    }
    /**
     * Add item to GetLastTraceBcResponse value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\GetLastTraceBcResponse $item
     * @return \Dpd\ArrayType\ArrayOfGetLastTraceBcResponse
     */
    public function addToGetLastTraceBcResponse(\Dpd\StructType\GetLastTraceBcResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\GetLastTraceBcResponse) {
            throw new \InvalidArgumentException(sprintf('The GetLastTraceBcResponse property can only contain items of type \Dpd\StructType\GetLastTraceBcResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetLastTraceBcResponse[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\GetLastTraceBcResponse|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\GetLastTraceBcResponse|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\GetLastTraceBcResponse|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\GetLastTraceBcResponse|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\GetLastTraceBcResponse|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GetLastTraceBcResponse
     */
    public function getAttributeName(): string
    {
        return 'GetLastTraceBcResponse';
    }
}
