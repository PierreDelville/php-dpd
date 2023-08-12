<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValueResponse StructType
 * @subpackage Structs
 */
class GetOptionValueResponse extends AbstractStructBase
{
    /**
     * The GetOptionValueResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetOptionResponse
     */
    public $GetOptionValueResult;
    /**
     * Constructor method for GetOptionValueResponse
     * @uses GetOptionValueResponse::setGetOptionValueResult()
     * @param \StructType\GetOptionResponse $getOptionValueResult
     */
    public function __construct(\StructType\GetOptionResponse $getOptionValueResult = null)
    {
        $this
            ->setGetOptionValueResult($getOptionValueResult);
    }
    /**
     * Get GetOptionValueResult value
     * @return \StructType\GetOptionResponse|null
     */
    public function getGetOptionValueResult()
    {
        return $this->GetOptionValueResult;
    }
    /**
     * Set GetOptionValueResult value
     * @param \StructType\GetOptionResponse $getOptionValueResult
     * @return \StructType\GetOptionValueResponse
     */
    public function setGetOptionValueResult(\StructType\GetOptionResponse $getOptionValueResult = null)
    {
        $this->GetOptionValueResult = $getOptionValueResult;
        return $this;
    }
}
