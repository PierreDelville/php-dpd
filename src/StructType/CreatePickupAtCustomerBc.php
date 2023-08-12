<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\PickupAtCustomerBcRequest
     */
    public $request;
    /**
     * Constructor method for CreatePickupAtCustomerBc
     * @uses CreatePickupAtCustomerBc::setRequest()
     * @param \Dpd\StructType\PickupAtCustomerBcRequest $request
     */
    public function __construct(\Dpd\StructType\PickupAtCustomerBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\PickupAtCustomerBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\PickupAtCustomerBcRequest $request
     * @return \Dpd\StructType\CreatePickupAtCustomerBc
     */
    public function setRequest(\Dpd\StructType\PickupAtCustomerBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
