<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetShippingResponse
     */
    public $GetShippingResult;
    /**
     * The shippings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfShipping
     */
    public $shippings;
    /**
     * Constructor method for GetShippingResponse
     * @uses GetShippingResponse::setGetShippingResult()
     * @uses GetShippingResponse::setShippings()
     * @param \Dpd\StructType\GetShippingResponse $getShippingResult
     * @param \Dpd\ArrayType\ArrayOfShipping $shippings
     */
    public function __construct(\Dpd\StructType\GetShippingResponse $getShippingResult = null, \Dpd\ArrayType\ArrayOfShipping $shippings = null)
    {
        $this
            ->setGetShippingResult($getShippingResult)
            ->setShippings($shippings);
    }
    /**
     * Get GetShippingResult value
     * @return \Dpd\StructType\GetShippingResponse|null
     */
    public function getGetShippingResult()
    {
        return $this->GetShippingResult;
    }
    /**
     * Set GetShippingResult value
     * @param \Dpd\StructType\GetShippingResponse $getShippingResult
     * @return \Dpd\StructType\GetShippingResponse
     */
    public function setGetShippingResult(\Dpd\StructType\GetShippingResponse $getShippingResult = null)
    {
        $this->GetShippingResult = $getShippingResult;
        return $this;
    }
    /**
     * Get shippings value
     * @return \Dpd\ArrayType\ArrayOfShipping|null
     */
    public function getShippings()
    {
        return $this->shippings;
    }
    /**
     * Set shippings value
     * @param \Dpd\ArrayType\ArrayOfShipping $shippings
     * @return \Dpd\StructType\GetShippingResponse
     */
    public function setShippings(\Dpd\ArrayType\ArrayOfShipping $shippings = null)
    {
        $this->shippings = $shippings;
        return $this;
    }
}
