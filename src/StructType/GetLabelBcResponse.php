<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelBcResponse StructType
 * @subpackage Structs
 */
class GetLabelBcResponse extends AbstractStructBase
{
    /**
     * The GetLabelBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LabelBcResponse
     */
    public $GetLabelBcResult;
    /**
     * Constructor method for GetLabelBcResponse
     * @uses GetLabelBcResponse::setGetLabelBcResult()
     * @param \StructType\LabelBcResponse $getLabelBcResult
     */
    public function __construct(\StructType\LabelBcResponse $getLabelBcResult = null)
    {
        $this
            ->setGetLabelBcResult($getLabelBcResult);
    }
    /**
     * Get GetLabelBcResult value
     * @return \StructType\LabelBcResponse|null
     */
    public function getGetLabelBcResult()
    {
        return $this->GetLabelBcResult;
    }
    /**
     * Set GetLabelBcResult value
     * @param \StructType\LabelBcResponse $getLabelBcResult
     * @return \StructType\GetLabelBcResponse
     */
    public function setGetLabelBcResult(\StructType\LabelBcResponse $getLabelBcResult = null)
    {
        $this->GetLabelBcResult = $getLabelBcResult;
        return $this;
    }
}
