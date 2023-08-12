<?php

namespace StructType;

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
     * @var \StructType\GetCustomerProfileResponse
     */
    public $GetCustomerProfileResult;
    /**
     * The CustomerProfiles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfCustomerProfile
     */
    public $CustomerProfiles;
    /**
     * Constructor method for GetCustomerProfileResponse
     * @uses GetCustomerProfileResponse::setGetCustomerProfileResult()
     * @uses GetCustomerProfileResponse::setCustomerProfiles()
     * @param \StructType\GetCustomerProfileResponse $getCustomerProfileResult
     * @param \ArrayType\ArrayOfCustomerProfile $customerProfiles
     */
    public function __construct(\StructType\GetCustomerProfileResponse $getCustomerProfileResult = null, \ArrayType\ArrayOfCustomerProfile $customerProfiles = null)
    {
        $this
            ->setGetCustomerProfileResult($getCustomerProfileResult)
            ->setCustomerProfiles($customerProfiles);
    }
    /**
     * Get GetCustomerProfileResult value
     * @return \StructType\GetCustomerProfileResponse|null
     */
    public function getGetCustomerProfileResult()
    {
        return $this->GetCustomerProfileResult;
    }
    /**
     * Set GetCustomerProfileResult value
     * @param \StructType\GetCustomerProfileResponse $getCustomerProfileResult
     * @return \StructType\GetCustomerProfileResponse
     */
    public function setGetCustomerProfileResult(\StructType\GetCustomerProfileResponse $getCustomerProfileResult = null)
    {
        $this->GetCustomerProfileResult = $getCustomerProfileResult;
        return $this;
    }
    /**
     * Get CustomerProfiles value
     * @return \ArrayType\ArrayOfCustomerProfile|null
     */
    public function getCustomerProfiles()
    {
        return $this->CustomerProfiles;
    }
    /**
     * Set CustomerProfiles value
     * @param \ArrayType\ArrayOfCustomerProfile $customerProfiles
     * @return \StructType\GetCustomerProfileResponse
     */
    public function setCustomerProfiles(\ArrayType\ArrayOfCustomerProfile $customerProfiles = null)
    {
        $this->CustomerProfiles = $customerProfiles;
        return $this;
    }
}
