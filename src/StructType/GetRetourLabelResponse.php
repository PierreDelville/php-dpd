<?php

namespace StructType;

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
     * @var \StructType\LabelResponse
     */
    public $GetRetourLabelResult;
    /**
     * Constructor method for GetRetourLabelResponse
     * @uses GetRetourLabelResponse::setGetRetourLabelResult()
     * @param \StructType\LabelResponse $getRetourLabelResult
     */
    public function __construct(\StructType\LabelResponse $getRetourLabelResult = null)
    {
        $this
            ->setGetRetourLabelResult($getRetourLabelResult);
    }
    /**
     * Get GetRetourLabelResult value
     * @return \StructType\LabelResponse|null
     */
    public function getGetRetourLabelResult()
    {
        return $this->GetRetourLabelResult;
    }
    /**
     * Set GetRetourLabelResult value
     * @param \StructType\LabelResponse $getRetourLabelResult
     * @return \StructType\GetRetourLabelResponse
     */
    public function setGetRetourLabelResult(\StructType\LabelResponse $getRetourLabelResult = null)
    {
        $this->GetRetourLabelResult = $getRetourLabelResult;
        return $this;
    }
}
