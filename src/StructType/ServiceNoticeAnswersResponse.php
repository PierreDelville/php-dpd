<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeAnswersResponse StructType
 * @subpackage Structs
 */
class ServiceNoticeAnswersResponse extends AbstractStructBase
{
    /**
     * The answers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfText
     */
    public $answers;
    /**
     * Constructor method for ServiceNoticeAnswersResponse
     * @uses ServiceNoticeAnswersResponse::setAnswers()
     * @param \ArrayType\ArrayOfText $answers
     */
    public function __construct(\ArrayType\ArrayOfText $answers = null)
    {
        $this
            ->setAnswers($answers);
    }
    /**
     * Get answers value
     * @return \ArrayType\ArrayOfText|null
     */
    public function getAnswers()
    {
        return $this->answers;
    }
    /**
     * Set answers value
     * @param \ArrayType\ArrayOfText $answers
     * @return \StructType\ServiceNoticeAnswersResponse
     */
    public function setAnswers(\ArrayType\ArrayOfText $answers = null)
    {
        $this->answers = $answers;
        return $this;
    }
}
