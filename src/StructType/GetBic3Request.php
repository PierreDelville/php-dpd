<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3Request StructType
 * @subpackage Structs
 */
class GetBic3Request extends AbstractStructBase
{
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $centernumber;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $customer;
    /**
     * Constructor method for GetBic3Request
     * @uses GetBic3Request::setCenternumber()
     * @uses GetBic3Request::setCustomer()
     * @param int $centernumber
     * @param \Dpd\StructType\Customer $customer
     */
    public function __construct($centernumber = null, \Dpd\StructType\Customer $customer = null)
    {
        $this
            ->setCenternumber($centernumber)
            ->setCustomer($customer);
    }
    /**
     * Get centernumber value
     * @return int
     */
    public function getCenternumber()
    {
        return $this->centernumber;
    }
    /**
     * Set centernumber value
     * @param int $centernumber
     * @return \Dpd\StructType\GetBic3Request
     */
    public function setCenternumber($centernumber = null)
    {
        // validation for constraint: int
        if (!is_null($centernumber) && !(is_int($centernumber) || ctype_digit($centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centernumber, true), gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;
        return $this;
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
     * @return \Dpd\StructType\GetBic3Request
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
