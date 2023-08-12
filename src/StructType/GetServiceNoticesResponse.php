<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticesResponse StructType
 * @subpackage Structs
 */
class GetServiceNoticesResponse extends AbstractStructBase
{
    /**
     * The GetServiceNoticesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ServiceNoticeResponse
     */
    public $GetServiceNoticesResult;
    /**
     * Constructor method for GetServiceNoticesResponse
     * @uses GetServiceNoticesResponse::setGetServiceNoticesResult()
     * @param \StructType\ServiceNoticeResponse $getServiceNoticesResult
     */
    public function __construct(\StructType\ServiceNoticeResponse $getServiceNoticesResult = null)
    {
        $this
            ->setGetServiceNoticesResult($getServiceNoticesResult);
    }
    /**
     * Get GetServiceNoticesResult value
     * @return \StructType\ServiceNoticeResponse|null
     */
    public function getGetServiceNoticesResult()
    {
        return $this->GetServiceNoticesResult;
    }
    /**
     * Set GetServiceNoticesResult value
     * @param \StructType\ServiceNoticeResponse $getServiceNoticesResult
     * @return \StructType\GetServiceNoticesResponse
     */
    public function setGetServiceNoticesResult(\StructType\ServiceNoticeResponse $getServiceNoticesResult = null)
    {
        $this->GetServiceNoticesResult = $getServiceNoticesResult;
        return $this;
    }
}
