<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerAddress StructType
 * @subpackage Structs
 */
class GetCustomerAddress extends AbstractStructBase
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
     * Constructor method for GetCustomerAddress
     * @uses GetCustomerAddress::setCustomer()
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
     * @return \Dpd\StructType\GetCustomerAddress
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
