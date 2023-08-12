<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticeAnswers StructType
 * @subpackage Structs
 */
class GetServiceNoticeAnswers extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ServiceNoticeAnswersRequest
     */
    public $request;
    /**
     * Constructor method for GetServiceNoticeAnswers
     * @uses GetServiceNoticeAnswers::setRequest()
     * @param \StructType\ServiceNoticeAnswersRequest $request
     */
    public function __construct(\StructType\ServiceNoticeAnswersRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ServiceNoticeAnswersRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ServiceNoticeAnswersRequest $request
     * @return \StructType\GetServiceNoticeAnswers
     */
    public function setRequest(\StructType\ServiceNoticeAnswersRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
