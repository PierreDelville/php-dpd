<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\CustomerAddress
     */
    public $GetCustomerAddressResult;
    /**
     * Constructor method for GetCustomerAddressResponse
     * @uses GetCustomerAddressResponse::setGetCustomerAddressResult()
     * @param \Dpd\StructType\CustomerAddress $getCustomerAddressResult
     */
    public function __construct(\Dpd\StructType\CustomerAddress $getCustomerAddressResult = null)
    {
        $this
            ->setGetCustomerAddressResult($getCustomerAddressResult);
    }
    /**
     * Get GetCustomerAddressResult value
     * @return \Dpd\StructType\CustomerAddress|null
     */
    public function getGetCustomerAddressResult()
    {
        return $this->GetCustomerAddressResult;
    }
    /**
     * Set GetCustomerAddressResult value
     * @param \Dpd\StructType\CustomerAddress $getCustomerAddressResult
     * @return \Dpd\StructType\GetCustomerAddressResponse
     */
    public function setGetCustomerAddressResult(\Dpd\StructType\CustomerAddress $getCustomerAddressResult = null)
    {
        $this->GetCustomerAddressResult = $getCustomerAddressResult;
        return $this;
    }
}
