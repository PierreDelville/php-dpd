<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\NumberRangeResponse
     */
    public $GetNumberRangeResult;
    /**
     * Constructor method for GetNumberRangeResponse
     * @uses GetNumberRangeResponse::setGetNumberRangeResult()
     * @param \Dpd\StructType\NumberRangeResponse $getNumberRangeResult
     */
    public function __construct(\Dpd\StructType\NumberRangeResponse $getNumberRangeResult = null)
    {
        $this
            ->setGetNumberRangeResult($getNumberRangeResult);
    }
    /**
     * Get GetNumberRangeResult value
     * @return \Dpd\StructType\NumberRangeResponse|null
     */
    public function getGetNumberRangeResult()
    {
        return $this->GetNumberRangeResult;
    }
    /**
     * Set GetNumberRangeResult value
     * @param \Dpd\StructType\NumberRangeResponse $getNumberRangeResult
     * @return \Dpd\StructType\GetNumberRangeResponse
     */
    public function setGetNumberRangeResult(\Dpd\StructType\NumberRangeResponse $getNumberRangeResult = null)
    {
        $this->GetNumberRangeResult = $getNumberRangeResult;
        return $this;
    }
}
