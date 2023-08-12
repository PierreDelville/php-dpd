<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\VerifyResponse
     */
    public $VerifyClientResult;
    /**
     * Constructor method for VerifyClientResponse
     * @uses VerifyClientResponse::setVerifyClientResult()
     * @param \Dpd\StructType\VerifyResponse $verifyClientResult
     */
    public function __construct(\Dpd\StructType\VerifyResponse $verifyClientResult = null)
    {
        $this
            ->setVerifyClientResult($verifyClientResult);
    }
    /**
     * Get VerifyClientResult value
     * @return \Dpd\StructType\VerifyResponse|null
     */
    public function getVerifyClientResult()
    {
        return $this->VerifyClientResult;
    }
    /**
     * Set VerifyClientResult value
     * @param \Dpd\StructType\VerifyResponse $verifyClientResult
     * @return \Dpd\StructType\VerifyClientResponse
     */
    public function setVerifyClientResult(\Dpd\StructType\VerifyResponse $verifyClientResult = null)
    {
        $this->VerifyClientResult = $verifyClientResult;
        return $this;
    }
}
