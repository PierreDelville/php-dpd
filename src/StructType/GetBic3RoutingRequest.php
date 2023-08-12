<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Customer
     */
    public $customer;
    /**
     * Constructor method for GetBic3RoutingRequest
     * @uses GetBic3RoutingRequest::setCustomer()
     * @param \Dpd\StructType\Customer $customer
     */
    public function __construct(\Dpd\StructType\Customer $customer = null)
    {
        $this
            ->setCustomer($customer);
    }
    /**
     * Get customer value
     * @return \Dpd\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \Dpd\StructType\Customer $customer
     * @return \Dpd\StructType\GetBic3RoutingRequest
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
