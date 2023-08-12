<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ServiceNoticeAnswersRequest
     */
    public $request;
    /**
     * Constructor method for GetServiceNoticeAnswers
     * @uses GetServiceNoticeAnswers::setRequest()
     * @param \Dpd\StructType\ServiceNoticeAnswersRequest $request
     */
    public function __construct(\Dpd\StructType\ServiceNoticeAnswersRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ServiceNoticeAnswersRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ServiceNoticeAnswersRequest $request
     * @return \Dpd\StructType\GetServiceNoticeAnswers
     */
    public function setRequest(\Dpd\StructType\ServiceNoticeAnswersRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
