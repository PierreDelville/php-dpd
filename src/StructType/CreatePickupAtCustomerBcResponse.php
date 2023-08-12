<?php

namespace StructType;

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
     * @var \StructType\PickupAtCustomerResponse
     */
    public $CreatePickupAtCustomerBcResult;
    /**
     * Constructor method for CreatePickupAtCustomerBcResponse
     * @uses CreatePickupAtCustomerBcResponse::setCreatePickupAtCustomerBcResult()
     * @param \StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult
     */
    public function __construct(\StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult = null)
    {
        $this
            ->setCreatePickupAtCustomerBcResult($createPickupAtCustomerBcResult);
    }
    /**
     * Get CreatePickupAtCustomerBcResult value
     * @return \StructType\PickupAtCustomerResponse|null
     */
    public function getCreatePickupAtCustomerBcResult()
    {
        return $this->CreatePickupAtCustomerBcResult;
    }
    /**
     * Set CreatePickupAtCustomerBcResult value
     * @param \StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult
     * @return \StructType\CreatePickupAtCustomerBcResponse
     */
    public function setCreatePickupAtCustomerBcResult(\StructType\PickupAtCustomerResponse $createPickupAtCustomerBcResult = null)
    {
        $this->CreatePickupAtCustomerBcResult = $createPickupAtCustomerBcResult;
        return $this;
    }
}
