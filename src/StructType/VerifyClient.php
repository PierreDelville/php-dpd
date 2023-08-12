<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyClient StructType
 * @subpackage Structs
 */
class VerifyClient extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\VerifyRequest
     */
    public $request;
    /**
     * Constructor method for VerifyClient
     * @uses VerifyClient::setRequest()
     * @param \Dpd\StructType\VerifyRequest $request
     */
    public function __construct(\Dpd\StructType\VerifyRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\VerifyRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\VerifyRequest $request
     * @return \Dpd\StructType\VerifyClient
     */
    public function setRequest(\Dpd\StructType\VerifyRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
