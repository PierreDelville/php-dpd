<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyRequest StructType
 * @subpackage Structs
 */
class VerifyRequest extends AbstractStructBase
{
    /**
     * The TimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TimeStamp;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Customer
     */
    public $Customer;
    /**
     * Constructor method for VerifyRequest
     * @uses VerifyRequest::setTimeStamp()
     * @uses VerifyRequest::setCustomer()
     * @param int $timeStamp
     * @param \StructType\Customer $customer
     */
    public function __construct($timeStamp = null, \StructType\Customer $customer = null)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setCustomer($customer);
    }
    /**
     * Get TimeStamp value
     * @return int
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param int $timeStamp
     * @return \StructType\VerifyRequest
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: int
        if (!is_null($timeStamp) && !(is_int($timeStamp) || ctype_digit($timeStamp))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeStamp, true), gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get Customer value
     * @return \StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \StructType\Customer $customer
     * @return \StructType\VerifyRequest
     */
    public function setCustomer(\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
}
