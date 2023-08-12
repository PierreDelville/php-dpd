<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfileResponse StructType
 * @subpackage Structs
 */
class GetCustomerProfileResponse extends AbstractStructBase
{
    /**
     * The GetCustomerProfileResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetCustomerProfileResponse
     */
    public $GetCustomerProfileResult;
    /**
     * The CustomerProfiles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfCustomerProfile
     */
    public $CustomerProfiles;
    /**
     * Constructor method for GetCustomerProfileResponse
     * @uses GetCustomerProfileResponse::setGetCustomerProfileResult()
     * @uses GetCustomerProfileResponse::setCustomerProfiles()
     * @param \Dpd\StructType\GetCustomerProfileResponse $getCustomerProfileResult
     * @param \Dpd\ArrayType\ArrayOfCustomerProfile $customerProfiles
     */
    public function __construct(\Dpd\StructType\GetCustomerProfileResponse $getCustomerProfileResult = null, \Dpd\ArrayType\ArrayOfCustomerProfile $customerProfiles = null)
    {
        $this
            ->setGetCustomerProfileResult($getCustomerProfileResult)
            ->setCustomerProfiles($customerProfiles);
    }
    /**
     * Get GetCustomerProfileResult value
     * @return \Dpd\StructType\GetCustomerProfileResponse|null
     */
    public function getGetCustomerProfileResult()
    {
        return $this->GetCustomerProfileResult;
    }
    /**
     * Set GetCustomerProfileResult value
     * @param \Dpd\StructType\GetCustomerProfileResponse $getCustomerProfileResult
     * @return \Dpd\StructType\GetCustomerProfileResponse
     */
    public function setGetCustomerProfileResult(\Dpd\StructType\GetCustomerProfileResponse $getCustomerProfileResult = null)
    {
        $this->GetCustomerProfileResult = $getCustomerProfileResult;
        return $this;
    }
    /**
     * Get CustomerProfiles value
     * @return \Dpd\ArrayType\ArrayOfCustomerProfile|null
     */
    public function getCustomerProfiles()
    {
        return $this->CustomerProfiles;
    }
    /**
     * Set CustomerProfiles value
     * @param \Dpd\ArrayType\ArrayOfCustomerProfile $customerProfiles
     * @return \Dpd\StructType\GetCustomerProfileResponse
     */
    public function setCustomerProfiles(\Dpd\ArrayType\ArrayOfCustomerProfile $customerProfiles = null)
    {
        $this->CustomerProfiles = $customerProfiles;
        return $this;
    }
}
