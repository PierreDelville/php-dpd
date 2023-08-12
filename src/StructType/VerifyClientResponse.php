<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyClientResponse StructType
 * @subpackage Structs
 */
class VerifyClientResponse extends AbstractStructBase
{
    /**
     * The VerifyClientResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\VerifyResponse
     */
    public $VerifyClientResult;
    /**
     * Constructor method for VerifyClientResponse
     * @uses VerifyClientResponse::setVerifyClientResult()
     * @param \StructType\VerifyResponse $verifyClientResult
     */
    public function __construct(\StructType\VerifyResponse $verifyClientResult = null)
    {
        $this
            ->setVerifyClientResult($verifyClientResult);
    }
    /**
     * Get VerifyClientResult value
     * @return \StructType\VerifyResponse|null
     */
    public function getVerifyClientResult()
    {
        return $this->VerifyClientResult;
    }
    /**
     * Set VerifyClientResult value
     * @param \StructType\VerifyResponse $verifyClientResult
     * @return \StructType\VerifyClientResponse
     */
    public function setVerifyClientResult(\StructType\VerifyResponse $verifyClientResult = null)
    {
        $this->VerifyClientResult = $verifyClientResult;
        return $this;
    }
}
