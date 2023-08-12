<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerBcResponse StructType
 * @subpackage Structs
 */
class CreatePickupAtCustomerBcResponse extends AbstractStructBase
{
    /**
     * The CreatePickupAtCustomerBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\PickupAtCustomerResponse
     */
    public $CreatePickupAtCustomerBcResult;
    /**
     * Constructor method for CreatePickupAtCustomerBcResponse
     * @uses CreatePickupAtCustomerBcResponse::setCreatePickupAtCustomerBcResult()
     * @param \Dpd\StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult
     */
    public function __construct(\Dpd\StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult = null)
    {
        $this
            ->setCreatePickupAtCustomerBcResult($createPickupAtCustomerBcResult);
    }
    /**
     * Get CreatePickupAtCustomerBcResult value
     * @return \Dpd\StructType\PickupAtCustomerResponse|null
     */
    public function getCreatePickupAtCustomerBcResult()
    {
        return $this->CreatePickupAtCustomerBcResult;
    }
    /**
     * Set CreatePickupAtCustomerBcResult value
     * @param \Dpd\StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult
     * @return \Dpd\StructType\CreatePickupAtCustomerBcResponse
     */
    public function setCreatePickupAtCustomerBcResult(\Dpd\StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult = null)
    {
        $this->CreatePickupAtCustomerBcResult = $createPickupAtCustomerBcResult;
        return $this;
    }
}
