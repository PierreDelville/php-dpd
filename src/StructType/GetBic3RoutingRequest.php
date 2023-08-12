<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3RoutingRequest StructType
 * @subpackage Structs
 */
class GetBic3RoutingRequest extends GeoRoutingRequest
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Customer
     */
    public $customer;
    /**
     * Constructor method for GetBic3RoutingRequest
     * @uses GetBic3RoutingRequest::setCustomer()
     * @param \StructType\Customer $customer
     */
    public function __construct(\StructType\Customer $customer = null)
    {
        $this
            ->setCustomer($customer);
    }
    /**
     * Get customer value
     * @return \StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \StructType\Customer $customer
     * @return \StructType\GetBic3RoutingRequest
     */
    public function setCustomer(\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
