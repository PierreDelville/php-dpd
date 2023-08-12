<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerAddressResponse StructType
 * @subpackage Structs
 */
class GetCustomerAddressResponse extends AbstractStructBase
{
    /**
     * The GetCustomerAddressResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CustomerAddress
     */
    public $GetCustomerAddressResult;
    /**
     * Constructor method for GetCustomerAddressResponse
     * @uses GetCustomerAddressResponse::setGetCustomerAddressResult()
     * @param \StructType\CustomerAddress $getCustomerAddressResult
     */
    public function __construct(\StructType\CustomerAddress $getCustomerAddressResult = null)
    {
        $this
            ->setGetCustomerAddressResult($getCustomerAddressResult);
    }
    /**
     * Get GetCustomerAddressResult value
     * @return \StructType\CustomerAddress|null
     */
    public function getGetCustomerAddressResult()
    {
        return $this->GetCustomerAddressResult;
    }
    /**
     * Set GetCustomerAddressResult value
     * @param \StructType\CustomerAddress $getCustomerAddressResult
     * @return \StructType\GetCustomerAddressResponse
     */
    public function setGetCustomerAddressResult(\StructType\CustomerAddress $getCustomerAddressResult = null)
    {
        $this->GetCustomerAddressResult = $getCustomerAddressResult;
        return $this;
    }
}
