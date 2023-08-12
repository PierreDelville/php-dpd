<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelResponse StructType
 * @subpackage Structs
 */
class GetRetourLabelResponse extends AbstractStructBase
{
    /**
     * The GetRetourLabelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\LabelResponse
     */
    public $GetRetourLabelResult;
    /**
     * Constructor method for GetRetourLabelResponse
     * @uses GetRetourLabelResponse::setGetRetourLabelResult()
     * @param \Dpd\StructType\LabelResponse $getRetourLabelResult
     */
    public function __construct(\Dpd\StructType\LabelResponse $getRetourLabelResult = null)
    {
        $this
            ->setGetRetourLabelResult($getRetourLabelResult);
    }
    /**
     * Get GetRetourLabelResult value
     * @return \Dpd\StructType\LabelResponse|null
     */
    public function getGetRetourLabelResult()
    {
        return $this->GetRetourLabelResult;
    }
    /**
     * Set GetRetourLabelResult value
     * @param \Dpd\StructType\LabelResponse $getRetourLabelResult
     * @return \Dpd\StructType\GetRetourLabelResponse
     */
    public function setGetRetourLabelResult(\Dpd\StructType\LabelResponse $getRetourLabelResult = null)
    {
        $this->GetRetourLabelResult = $getRetourLabelResult;
        return $this;
    }
}
