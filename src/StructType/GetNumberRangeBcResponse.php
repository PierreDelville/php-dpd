<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\NumberRangeBcResponse
     */
    public $GetNumberRangeBcResult;
    /**
     * Constructor method for GetNumberRangeBcResponse
     * @uses GetNumberRangeBcResponse::setGetNumberRangeBcResult()
     * @param \Dpd\StructType\NumberRangeBcResponse $getNumberRangeBcResult
     */
    public function __construct(\Dpd\StructType\NumberRangeBcResponse $getNumberRangeBcResult = null)
    {
        $this
            ->setGetNumberRangeBcResult($getNumberRangeBcResult);
    }
    /**
     * Get GetNumberRangeBcResult value
     * @return \Dpd\StructType\NumberRangeBcResponse|null
     */
    public function getGetNumberRangeBcResult()
    {
        return $this->GetNumberRangeBcResult;
    }
    /**
     * Set GetNumberRangeBcResult value
     * @param \Dpd\StructType\NumberRangeBcResponse $getNumberRangeBcResult
     * @return \Dpd\StructType\GetNumberRangeBcResponse
     */
    public function setGetNumberRangeBcResult(\Dpd\StructType\NumberRangeBcResponse $getNumberRangeBcResult = null)
    {
        $this->GetNumberRangeBcResult = $getNumberRangeBcResult;
        return $this;
    }
}
