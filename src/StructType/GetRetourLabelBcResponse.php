<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\LabelResponse
     */
    public $GetRetourLabelBcResult;
    /**
     * Constructor method for GetRetourLabelBcResponse
     * @uses GetRetourLabelBcResponse::setGetRetourLabelBcResult()
     * @param \Dpd\StructType\LabelResponse $getRetourLabelBcResult
     */
    public function __construct(\Dpd\StructType\LabelResponse $getRetourLabelBcResult = null)
    {
        $this
            ->setGetRetourLabelBcResult($getRetourLabelBcResult);
    }
    /**
     * Get GetRetourLabelBcResult value
     * @return \Dpd\StructType\LabelResponse|null
     */
    public function getGetRetourLabelBcResult()
    {
        return $this->GetRetourLabelBcResult;
    }
    /**
     * Set GetRetourLabelBcResult value
     * @param \Dpd\StructType\LabelResponse $getRetourLabelBcResult
     * @return \Dpd\StructType\GetRetourLabelBcResponse
     */
    public function setGetRetourLabelBcResult(\Dpd\StructType\LabelResponse $getRetourLabelBcResult = null)
    {
        $this->GetRetourLabelBcResult = $getRetourLabelBcResult;
        return $this;
    }
}
