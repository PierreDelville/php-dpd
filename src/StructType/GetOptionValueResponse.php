<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetOptionResponse
     */
    public $GetOptionValueResult;
    /**
     * Constructor method for GetOptionValueResponse
     * @uses GetOptionValueResponse::setGetOptionValueResult()
     * @param \Dpd\StructType\GetOptionResponse $getOptionValueResult
     */
    public function __construct(\Dpd\StructType\GetOptionResponse $getOptionValueResult = null)
    {
        $this
            ->setGetOptionValueResult($getOptionValueResult);
    }
    /**
     * Get GetOptionValueResult value
     * @return \Dpd\StructType\GetOptionResponse|null
     */
    public function getGetOptionValueResult()
    {
        return $this->GetOptionValueResult;
    }
    /**
     * Set GetOptionValueResult value
     * @param \Dpd\StructType\GetOptionResponse $getOptionValueResult
     * @return \Dpd\StructType\GetOptionValueResponse
     */
    public function setGetOptionValueResult(\Dpd\StructType\GetOptionResponse $getOptionValueResult = null)
    {
        $this->GetOptionValueResult = $getOptionValueResult;
        return $this;
    }
}
