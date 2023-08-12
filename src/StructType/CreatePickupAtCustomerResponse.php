<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Parcel
     */
    public $CreatePickupAtCustomerResult;
    /**
     * Constructor method for CreatePickupAtCustomerResponse
     * @uses CreatePickupAtCustomerResponse::setCreatePickupAtCustomerResult()
     * @param \Dpd\StructType\Parcel $createPickupAtCustomerResult
     */
    public function __construct(\Dpd\StructType\Parcel $createPickupAtCustomerResult = null)
    {
        $this
            ->setCreatePickupAtCustomerResult($createPickupAtCustomerResult);
    }
    /**
     * Get CreatePickupAtCustomerResult value
     * @return \Dpd\StructType\Parcel|null
     */
    public function getCreatePickupAtCustomerResult()
    {
        return $this->CreatePickupAtCustomerResult;
    }
    /**
     * Set CreatePickupAtCustomerResult value
     * @param \Dpd\StructType\Parcel $createPickupAtCustomerResult
     * @return \Dpd\StructType\CreatePickupAtCustomerResponse
     */
    public function setCreatePickupAtCustomerResult(\Dpd\StructType\Parcel $createPickupAtCustomerResult = null)
    {
        $this->CreatePickupAtCustomerResult = $createPickupAtCustomerResult;
        return $this;
    }
}
