<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\PickupAtCustomerRequest
     */
    public $request;
    /**
     * Constructor method for CreatePickupAtCustomer
     * @uses CreatePickupAtCustomer::setRequest()
     * @param \Dpd\StructType\PickupAtCustomerRequest $request
     */
    public function __construct(\Dpd\StructType\PickupAtCustomerRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\PickupAtCustomerRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\PickupAtCustomerRequest $request
     * @return \Dpd\StructType\CreatePickupAtCustomer
     */
    public function setRequest(\Dpd\StructType\PickupAtCustomerRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
