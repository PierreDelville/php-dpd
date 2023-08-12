<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetOptionsResponse
     */
    public $GetOptionValuesResult;
    /**
     * Constructor method for GetOptionValuesResponse
     * @uses GetOptionValuesResponse::setGetOptionValuesResult()
     * @param \Dpd\StructType\GetOptionsResponse $getOptionValuesResult
     */
    public function __construct(\Dpd\StructType\GetOptionsResponse $getOptionValuesResult = null)
    {
        $this
            ->setGetOptionValuesResult($getOptionValuesResult);
    }
    /**
     * Get GetOptionValuesResult value
     * @return \Dpd\StructType\GetOptionsResponse|null
     */
    public function getGetOptionValuesResult()
    {
        return $this->GetOptionValuesResult;
    }
    /**
     * Set GetOptionValuesResult value
     * @param \Dpd\StructType\GetOptionsResponse $getOptionValuesResult
     * @return \Dpd\StructType\GetOptionValuesResponse
     */
    public function setGetOptionValuesResult(\Dpd\StructType\GetOptionsResponse $getOptionValuesResult = null)
    {
        $this->GetOptionValuesResult = $getOptionValuesResult;
        return $this;
    }
}
