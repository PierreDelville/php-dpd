<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelBcResponse StructType
 * @subpackage Structs
 */
class GetRetourLabelBcResponse extends AbstractStructBase
{
    /**
     * The GetRetourLabelBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LabelResponse
     */
    public $GetRetourLabelBcResult;
    /**
     * Constructor method for GetRetourLabelBcResponse
     * @uses GetRetourLabelBcResponse::setGetRetourLabelBcResult()
     * @param \StructType\LabelResponse $getRetourLabelBcResult
     */
    public function __construct(\StructType\LabelResponse $getRetourLabelBcResult = null)
    {
        $this
            ->setGetRetourLabelBcResult($getRetourLabelBcResult);
    }
    /**
     * Get GetRetourLabelBcResult value
     * @return \StructType\LabelResponse|null
     */
    public function getGetRetourLabelBcResult()
    {
        return $this->GetRetourLabelBcResult;
    }
    /**
     * Set GetRetourLabelBcResult value
     * @param \StructType\LabelResponse $getRetourLabelBcResult
     * @return \StructType\GetRetourLabelBcResponse
     */
    public function setGetRetourLabelBcResult(\StructType\LabelResponse $getRetourLabelBcResult = null)
    {
        $this->GetRetourLabelBcResult = $getRetourLabelBcResult;
        return $this;
    }
}
