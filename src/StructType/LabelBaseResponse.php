<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfLabel
     */
    public $labels;
    /**
     * Constructor method for LabelBaseResponse
     * @uses LabelBaseResponse::setLabels()
     * @param \ArrayType\ArrayOfLabel $labels
     */
    public function __construct(\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setLabels($labels);
    }
    /**
     * Get labels value
     * @return \ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * Set labels value
     * @param \ArrayType\ArrayOfLabel $labels
     * @return \StructType\LabelBaseResponse
     */
    public function setLabels(\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
