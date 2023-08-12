<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticeAnswersResponse StructType
 * @subpackage Structs
 */
class GetServiceNoticeAnswersResponse extends AbstractStructBase
{
    /**
     * The GetServiceNoticeAnswersResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ServiceNoticeAnswersResponse
     */
    public $GetServiceNoticeAnswersResult;
    /**
     * Constructor method for GetServiceNoticeAnswersResponse
     * @uses GetServiceNoticeAnswersResponse::setGetServiceNoticeAnswersResult()
     * @param \StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult
     */
    public function __construct(\StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null)
    {
        $this
            ->setGetServiceNoticeAnswersResult($getServiceNoticeAnswersResult);
    }
    /**
     * Get GetServiceNoticeAnswersResult value
     * @return \StructType\ServiceNoticeAnswersResponse|null
     */
    public function getGetServiceNoticeAnswersResult()
    {
        return $this->GetServiceNoticeAnswersResult;
    }
    /**
     * Set GetServiceNoticeAnswersResult value
     * @param \StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult
     * @return \StructType\GetServiceNoticeAnswersResponse
     */
    public function setGetServiceNoticeAnswersResult(\StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null)
    {
        $this->GetServiceNoticeAnswersResult = $getServiceNoticeAnswersResult;
        return $this;
    }
}
