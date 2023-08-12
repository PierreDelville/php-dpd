<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\LabelBcResponse
     */
    public $GetLabelBcResult;
    /**
     * Constructor method for GetLabelBcResponse
     * @uses GetLabelBcResponse::setGetLabelBcResult()
     * @param \Dpd\StructType\LabelBcResponse $getLabelBcResult
     */
    public function __construct(\Dpd\StructType\LabelBcResponse $getLabelBcResult = null)
    {
        $this
            ->setGetLabelBcResult($getLabelBcResult);
    }
    /**
     * Get GetLabelBcResult value
     * @return \Dpd\StructType\LabelBcResponse|null
     */
    public function getGetLabelBcResult()
    {
        return $this->GetLabelBcResult;
    }
    /**
     * Set GetLabelBcResult value
     * @param \Dpd\StructType\LabelBcResponse $getLabelBcResult
     * @return \Dpd\StructType\GetLabelBcResponse
     */
    public function setGetLabelBcResult(\Dpd\StructType\LabelBcResponse $getLabelBcResult = null)
    {
        $this->GetLabelBcResult = $getLabelBcResult;
        return $this;
    }
}
