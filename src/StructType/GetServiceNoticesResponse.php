<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ServiceNoticeResponse
     */
    public $GetServiceNoticesResult;
    /**
     * Constructor method for GetServiceNoticesResponse
     * @uses GetServiceNoticesResponse::setGetServiceNoticesResult()
     * @param \Dpd\StructType\ServiceNoticeResponse $getServiceNoticesResult
     */
    public function __construct(\Dpd\StructType\ServiceNoticeResponse $getServiceNoticesResult = null)
    {
        $this
            ->setGetServiceNoticesResult($getServiceNoticesResult);
    }
    /**
     * Get GetServiceNoticesResult value
     * @return \Dpd\StructType\ServiceNoticeResponse|null
     */
    public function getGetServiceNoticesResult()
    {
        return $this->GetServiceNoticesResult;
    }
    /**
     * Set GetServiceNoticesResult value
     * @param \Dpd\StructType\ServiceNoticeResponse $getServiceNoticesResult
     * @return \Dpd\StructType\GetServiceNoticesResponse
     */
    public function setGetServiceNoticesResult(\Dpd\StructType\ServiceNoticeResponse $getServiceNoticesResult = null)
    {
        $this->GetServiceNoticesResult = $getServiceNoticesResult;
        return $this;
    }
}
