<?php

namespace StructType;

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
     * @var \StructType\VerifyRequest
     */
    public $request;
    /**
     * Constructor method for VerifyClient
     * @uses VerifyClient::setRequest()
     * @param \StructType\VerifyRequest $request
     */
    public function __construct(\StructType\VerifyRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\VerifyRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\VerifyRequest $request
     * @return \StructType\VerifyClient
     */
    public function setRequest(\StructType\VerifyRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
