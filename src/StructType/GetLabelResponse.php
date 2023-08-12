<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\LabelResponse
     */
    public $GetLabelResult;
    /**
     * Constructor method for GetLabelResponse
     * @uses GetLabelResponse::setGetLabelResult()
     * @param \Dpd\StructType\LabelResponse $getLabelResult
     */
    public function __construct(\Dpd\StructType\LabelResponse $getLabelResult = null)
    {
        $this
            ->setGetLabelResult($getLabelResult);
    }
    /**
     * Get GetLabelResult value
     * @return \Dpd\StructType\LabelResponse|null
     */
    public function getGetLabelResult()
    {
        return $this->GetLabelResult;
    }
    /**
     * Set GetLabelResult value
     * @param \Dpd\StructType\LabelResponse $getLabelResult
     * @return \Dpd\StructType\GetLabelResponse
     */
    public function setGetLabelResult(\Dpd\StructType\LabelResponse $getLabelResult = null)
    {
        $this->GetLabelResult = $getLabelResult;
        return $this;
    }
}
