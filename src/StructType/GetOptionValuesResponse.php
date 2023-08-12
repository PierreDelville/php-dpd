<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValuesResponse StructType
 * @subpackage Structs
 */
class GetOptionValuesResponse extends AbstractStructBase
{
    /**
     * The GetOptionValuesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetOptionsResponse
     */
    public $GetOptionValuesResult;
    /**
     * Constructor method for GetOptionValuesResponse
     * @uses GetOptionValuesResponse::setGetOptionValuesResult()
     * @param \StructType\GetOptionsResponse $getOptionValuesResult
     */
    public function __construct(\StructType\GetOptionsResponse $getOptionValuesResult = null)
    {
        $this
            ->setGetOptionValuesResult($getOptionValuesResult);
    }
    /**
     * Get GetOptionValuesResult value
     * @return \StructType\GetOptionsResponse|null
     */
    public function getGetOptionValuesResult()
    {
        return $this->GetOptionValuesResult;
    }
    /**
     * Set GetOptionValuesResult value
     * @param \StructType\GetOptionsResponse $getOptionValuesResult
     * @return \StructType\GetOptionValuesResponse
     */
    public function setGetOptionValuesResult(\StructType\GetOptionsResponse $getOptionValuesResult = null)
    {
        $this->GetOptionValuesResult = $getOptionValuesResult;
        return $this;
    }
}
