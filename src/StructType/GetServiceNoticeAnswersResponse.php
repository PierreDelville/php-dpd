<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ServiceNoticeAnswersResponse
     */
    public $GetServiceNoticeAnswersResult;
    /**
     * Constructor method for GetServiceNoticeAnswersResponse
     * @uses GetServiceNoticeAnswersResponse::setGetServiceNoticeAnswersResult()
     * @param \Dpd\StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult
     */
    public function __construct(\Dpd\StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null)
    {
        $this
            ->setGetServiceNoticeAnswersResult($getServiceNoticeAnswersResult);
    }
    /**
     * Get GetServiceNoticeAnswersResult value
     * @return \Dpd\StructType\ServiceNoticeAnswersResponse|null
     */
    public function getGetServiceNoticeAnswersResult()
    {
        return $this->GetServiceNoticeAnswersResult;
    }
    /**
     * Set GetServiceNoticeAnswersResult value
     * @param \Dpd\StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult
     * @return \Dpd\StructType\GetServiceNoticeAnswersResponse
     */
    public function setGetServiceNoticeAnswersResult(\Dpd\StructType\ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null)
    {
        $this->GetServiceNoticeAnswersResult = $getServiceNoticeAnswersResult;
        return $this;
    }
}
