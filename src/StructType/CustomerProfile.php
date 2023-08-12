<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerProfile StructType
 * @subpackage Structs
 */
class CustomerProfile extends AbstractStructBase
{
    /**
     * The Locked
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $Locked;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $Customer;
    /**
     * The Addresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfProfileAddress
     */
    public $Addresses;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfCustomerService
     */
    public $Services;
    /**
     * Constructor method for CustomerProfile
     * @uses CustomerProfile::setLocked()
     * @uses CustomerProfile::setCustomer()
     * @uses CustomerProfile::setAddresses()
     * @uses CustomerProfile::setServices()
     * @param bool $locked
     * @param \Dpd\StructType\Customer $customer
     * @param \Dpd\ArrayType\ArrayOfProfileAddress $addresses
     * @param \Dpd\ArrayType\ArrayOfCustomerService $services
     */
    public function __construct($locked = null, \Dpd\StructType\Customer $customer = null, \Dpd\ArrayType\ArrayOfProfileAddress $addresses = null, \Dpd\ArrayType\ArrayOfCustomerService $services = null)
    {
        $this
            ->setLocked($locked)
            ->setCustomer($customer)
            ->setAddresses($addresses)
            ->setServices($services);
    }
    /**
     * Get Locked value
     * @return bool
     */
    public function getLocked()
    {
        return $this->Locked;
    }
    /**
     * Set Locked value
     * @param bool $locked
     * @return \Dpd\StructType\CustomerProfile
     */
    public function setLocked($locked = null)
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->Locked = $locked;
        return $this;
    }
    /**
     * Get Customer value
     * @return \Dpd\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Dpd\StructType\Customer $customer
     * @return \Dpd\StructType\CustomerProfile
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Addresses value
     * @return \Dpd\ArrayType\ArrayOfProfileAddress|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \Dpd\ArrayType\ArrayOfProfileAddress $addresses
     * @return \Dpd\StructType\CustomerProfile
     */
    public function setAddresses(\Dpd\ArrayType\ArrayOfProfileAddress $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get Services value
     * @return \Dpd\ArrayType\ArrayOfCustomerService|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \Dpd\ArrayType\ArrayOfCustomerService $services
     * @return \Dpd\StructType\CustomerProfile
     */
    public function setServices(\Dpd\ArrayType\ArrayOfCustomerService $services = null)
    {
        $this->Services = $services;
        return $this;
    }
}
