<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingResponse StructType
 * @subpackage Structs
 */
class GetShippingResponse extends AbstractStructBase
{
    /**
     * The GetShippingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetShippingResponse
     */
    public $GetShippingResult;
    /**
     * The shippings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipping
     */
    public $shippings;
    /**
     * Constructor method for GetShippingResponse
     * @uses GetShippingResponse::setGetShippingResult()
     * @uses GetShippingResponse::setShippings()
     * @param \StructType\GetShippingResponse $getShippingResult
     * @param \ArrayType\ArrayOfShipping $shippings
     */
    public function __construct(\StructType\GetShippingResponse $getShippingResult = null, \ArrayType\ArrayOfShipping $shippings = null)
    {
        $this
            ->setGetShippingResult($getShippingResult)
            ->setShippings($shippings);
    }
    /**
     * Get GetShippingResult value
     * @return \StructType\GetShippingResponse|null
     */
    public function getGetShippingResult()
    {
        return $this->GetShippingResult;
    }
    /**
     * Set GetShippingResult value
     * @param \StructType\GetShippingResponse $getShippingResult
     * @return \StructType\GetShippingResponse
     */
    public function setGetShippingResult(\StructType\GetShippingResponse $getShippingResult = null)
    {
        $this->GetShippingResult = $getShippingResult;
        return $this;
    }
    /**
     * Get shippings value
     * @return \ArrayType\ArrayOfShipping|null
     */
    public function getShippings()
    {
        return $this->shippings;
    }
    /**
     * Set shippings value
     * @param \ArrayType\ArrayOfShipping $shippings
     * @return \StructType\GetShippingResponse
     */
    public function setShippings(\ArrayType\ArrayOfShipping $shippings = null)
    {
        $this->shippings = $shippings;
        return $this;
    }
}
