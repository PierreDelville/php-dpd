<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerResponse StructType
 * @subpackage Structs
 */
class CreatePickupAtCustomerResponse extends AbstractStructBase
{
    /**
     * The CreatePickupAtCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Parcel
     */
    public $CreatePickupAtCustomerResult;
    /**
     * Constructor method for CreatePickupAtCustomerResponse
     * @uses CreatePickupAtCustomerResponse::setCreatePickupAtCustomerResult()
     * @param \StructType\Parcel $createPickupAtCustomerResult
     */
    public function __construct(\StructType\Parcel $createPickupAtCustomerResult = null)
    {
        $this
            ->setCreatePickupAtCustomerResult($createPickupAtCustomerResult);
    }
    /**
     * Get CreatePickupAtCustomerResult value
     * @return \StructType\Parcel|null
     */
    public function getCreatePickupAtCustomerResult()
    {
        return $this->CreatePickupAtCustomerResult;
    }
    /**
     * Set CreatePickupAtCustomerResult value
     * @param \StructType\Parcel $createPickupAtCustomerResult
     * @return \StructType\CreatePickupAtCustomerResponse
     */
    public function setCreatePickupAtCustomerResult(\StructType\Parcel $createPickupAtCustomerResult = null)
    {
        $this->CreatePickupAtCustomerResult = $createPickupAtCustomerResult;
        return $this;
    }
}
