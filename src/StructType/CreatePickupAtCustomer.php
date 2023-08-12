<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomer StructType
 * @subpackage Structs
 */
class CreatePickupAtCustomer extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PickupAtCustomerRequest
     */
    public $request;
    /**
     * Constructor method for CreatePickupAtCustomer
     * @uses CreatePickupAtCustomer::setRequest()
     * @param \StructType\PickupAtCustomerRequest $request
     */
    public function __construct(\StructType\PickupAtCustomerRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\PickupAtCustomerRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\PickupAtCustomerRequest $request
     * @return \StructType\CreatePickupAtCustomer
     */
    public function setRequest(\StructType\PickupAtCustomerRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
