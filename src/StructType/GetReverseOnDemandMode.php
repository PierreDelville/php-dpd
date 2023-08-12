<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReverseOnDemandMode StructType
 * @subpackage Structs
 */
class GetReverseOnDemandMode extends AbstractStructBase
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
     * Constructor method for GetReverseOnDemandMode
     * @uses GetReverseOnDemandMode::setCustomer()
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
     * @return \StructType\GetReverseOnDemandMode
     */
    public function setCustomer(\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
