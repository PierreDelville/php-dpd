<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerBc StructType
 * @subpackage Structs
 */
class CreatePickupAtCustomerBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PickupAtCustomerBcRequest
     */
    public $request;
    /**
     * Constructor method for CreatePickupAtCustomerBc
     * @uses CreatePickupAtCustomerBc::setRequest()
     * @param \StructType\PickupAtCustomerBcRequest $request
     */
    public function __construct(\StructType\PickupAtCustomerBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\PickupAtCustomerBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\PickupAtCustomerBcRequest $request
     * @return \StructType\CreatePickupAtCustomerBc
     */
    public function setRequest(\StructType\PickupAtCustomerBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
