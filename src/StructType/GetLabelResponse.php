<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelResponse StructType
 * @subpackage Structs
 */
class GetLabelResponse extends AbstractStructBase
{
    /**
     * The GetLabelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LabelResponse
     */
    public $GetLabelResult;
    /**
     * Constructor method for GetLabelResponse
     * @uses GetLabelResponse::setGetLabelResult()
     * @param \StructType\LabelResponse $getLabelResult
     */
    public function __construct(\StructType\LabelResponse $getLabelResult = null)
    {
        $this
            ->setGetLabelResult($getLabelResult);
    }
    /**
     * Get GetLabelResult value
     * @return \StructType\LabelResponse|null
     */
    public function getGetLabelResult()
    {
        return $this->GetLabelResult;
    }
    /**
     * Set GetLabelResult value
     * @param \StructType\LabelResponse $getLabelResult
     * @return \StructType\GetLabelResponse
     */
    public function setGetLabelResult(\StructType\LabelResponse $getLabelResult = null)
    {
        $this->GetLabelResult = $getLabelResult;
        return $this;
    }
}
