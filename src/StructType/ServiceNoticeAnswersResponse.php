<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfText
     */
    public $answers;
    /**
     * Constructor method for ServiceNoticeAnswersResponse
     * @uses ServiceNoticeAnswersResponse::setAnswers()
     * @param \Dpd\ArrayType\ArrayOfText $answers
     */
    public function __construct(\Dpd\ArrayType\ArrayOfText $answers = null)
    {
        $this
            ->setAnswers($answers);
    }
    /**
     * Get answers value
     * @return \Dpd\ArrayType\ArrayOfText|null
     */
    public function getAnswers()
    {
        return $this->answers;
    }
    /**
     * Set answers value
     * @param \Dpd\ArrayType\ArrayOfText $answers
     * @return \Dpd\StructType\ServiceNoticeAnswersResponse
     */
    public function setAnswers(\Dpd\ArrayType\ArrayOfText $answers = null)
    {
        $this->answers = $answers;
        return $this;
    }
}
