<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumberRequest StructType
 * @subpackage Structs
 */
class GetLastNumberRequest extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Customer
     */
    public $Customer;
    /**
     * The Entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfEntry
     */
    public $Entries;
    /**
     * Constructor method for GetLastNumberRequest
     * @uses GetLastNumberRequest::setCustomer()
     * @uses GetLastNumberRequest::setEntries()
     * @param \StructType\Customer $customer
     * @param \ArrayType\ArrayOfEntry $entries
     */
    public function __construct(\StructType\Customer $customer = null, \ArrayType\ArrayOfEntry $entries = null)
    {
        $this
            ->setCustomer($customer)
            ->setEntries($entries);
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
     * @return \StructType\GetLastNumberRequest
     */
    public function setCustomer(\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Entries value
     * @return \ArrayType\ArrayOfEntry|null
     */
    public function getEntries()
    {
        return $this->Entries;
    }
    /**
     * Set Entries value
     * @param \ArrayType\ArrayOfEntry $entries
     * @return \StructType\GetLastNumberRequest
     */
    public function setEntries(\ArrayType\ArrayOfEntry $entries = null)
    {
        $this->Entries = $entries;
        return $this;
    }
}
