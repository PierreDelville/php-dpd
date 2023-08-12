<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeResponse StructType
 * @subpackage Structs
 */
class GetNumberRangeResponse extends AbstractStructBase
{
    /**
     * The GetNumberRangeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumberRangeResponse
     */
    public $GetNumberRangeResult;
    /**
     * Constructor method for GetNumberRangeResponse
     * @uses GetNumberRangeResponse::setGetNumberRangeResult()
     * @param \StructType\NumberRangeResponse $getNumberRangeResult
     */
    public function __construct(\StructType\NumberRangeResponse $getNumberRangeResult = null)
    {
        $this
            ->setGetNumberRangeResult($getNumberRangeResult);
    }
    /**
     * Get GetNumberRangeResult value
     * @return \StructType\NumberRangeResponse|null
     */
    public function getGetNumberRangeResult()
    {
        return $this->GetNumberRangeResult;
    }
    /**
     * Set GetNumberRangeResult value
     * @param \StructType\NumberRangeResponse $getNumberRangeResult
     * @return \StructType\GetNumberRangeResponse
     */
    public function setGetNumberRangeResult(\StructType\NumberRangeResponse $getNumberRangeResult = null)
    {
        $this->GetNumberRangeResult = $getNumberRangeResult;
        return $this;
    }
}
