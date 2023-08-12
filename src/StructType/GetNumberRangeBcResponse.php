<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeBcResponse StructType
 * @subpackage Structs
 */
class GetNumberRangeBcResponse extends AbstractStructBase
{
    /**
     * The GetNumberRangeBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumberRangeBcResponse
     */
    public $GetNumberRangeBcResult;
    /**
     * Constructor method for GetNumberRangeBcResponse
     * @uses GetNumberRangeBcResponse::setGetNumberRangeBcResult()
     * @param \StructType\NumberRangeBcResponse $getNumberRangeBcResult
     */
    public function __construct(\StructType\NumberRangeBcResponse $getNumberRangeBcResult = null)
    {
        $this
            ->setGetNumberRangeBcResult($getNumberRangeBcResult);
    }
    /**
     * Get GetNumberRangeBcResult value
     * @return \StructType\NumberRangeBcResponse|null
     */
    public function getGetNumberRangeBcResult()
    {
        return $this->GetNumberRangeBcResult;
    }
    /**
     * Set GetNumberRangeBcResult value
     * @param \StructType\NumberRangeBcResponse $getNumberRangeBcResult
     * @return \StructType\GetNumberRangeBcResponse
     */
    public function setGetNumberRangeBcResult(\StructType\NumberRangeBcResponse $getNumberRangeBcResult = null)
    {
        $this->GetNumberRangeBcResult = $getNumberRangeBcResult;
        return $this;
    }
}
