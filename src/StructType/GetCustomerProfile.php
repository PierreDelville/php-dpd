<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetCustomerProfileRequest
     */
    public $request;
    /**
     * Constructor method for GetCustomerProfile
     * @uses GetCustomerProfile::setRequest()
     * @param \Dpd\StructType\GetCustomerProfileRequest $request
     */
    public function __construct(\Dpd\StructType\GetCustomerProfileRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetCustomerProfileRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetCustomerProfileRequest $request
     * @return \Dpd\StructType\GetCustomerProfile
     */
    public function setRequest(\Dpd\StructType\GetCustomerProfileRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
