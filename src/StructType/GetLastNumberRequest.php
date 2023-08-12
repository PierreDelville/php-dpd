<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Customer
     */
    public $Customer;
    /**
     * The Entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfEntry
     */
    public $Entries;
    /**
     * Constructor method for GetLastNumberRequest
     * @uses GetLastNumberRequest::setCustomer()
     * @uses GetLastNumberRequest::setEntries()
     * @param \Dpd\StructType\Customer $customer
     * @param \Dpd\ArrayType\ArrayOfEntry $entries
     */
    public function __construct(\Dpd\StructType\Customer $customer = null, \Dpd\ArrayType\ArrayOfEntry $entries = null)
    {
        $this
            ->setCustomer($customer)
            ->setEntries($entries);
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
     * @return \Dpd\StructType\GetLastNumberRequest
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Entries value
     * @return \Dpd\ArrayType\ArrayOfEntry|null
     */
    public function getEntries()
    {
        return $this->Entries;
    }
    /**
     * Set Entries value
     * @param \Dpd\ArrayType\ArrayOfEntry $entries
     * @return \Dpd\StructType\GetLastNumberRequest
     */
    public function setEntries(\Dpd\ArrayType\ArrayOfEntry $entries = null)
    {
        $this->Entries = $entries;
        return $this;
    }
}
