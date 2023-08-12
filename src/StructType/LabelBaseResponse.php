<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelBaseResponse StructType
 * @subpackage Structs
 */
class LabelBaseResponse extends AbstractStructBase
{
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfLabel
     */
    public $labels;
    /**
     * Constructor method for LabelBaseResponse
     * @uses LabelBaseResponse::setLabels()
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setLabels($labels);
    }
    /**
     * Get labels value
     * @return \Dpd\ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * Set labels value
     * @param \Dpd\ArrayType\ArrayOfLabel $labels
     * @return \Dpd\StructType\LabelBaseResponse
     */
    public function setLabels(\Dpd\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
