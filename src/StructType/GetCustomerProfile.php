<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfile StructType
 * @subpackage Structs
 */
class GetCustomerProfile extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetCustomerProfileRequest
     */
    public $request;
    /**
     * Constructor method for GetCustomerProfile
     * @uses GetCustomerProfile::setRequest()
     * @param \StructType\GetCustomerProfileRequest $request
     */
    public function __construct(\StructType\GetCustomerProfileRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetCustomerProfileRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetCustomerProfileRequest $request
     * @return \StructType\GetCustomerProfile
     */
    public function setRequest(\StructType\GetCustomerProfileRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
