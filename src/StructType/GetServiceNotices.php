<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNotices StructType
 * @subpackage Structs
 */
class GetServiceNotices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ServiceNoticeRequest
     */
    public $request;
    /**
     * Constructor method for GetServiceNotices
     * @uses GetServiceNotices::setRequest()
     * @param \Dpd\StructType\ServiceNoticeRequest $request
     */
    public function __construct(\Dpd\StructType\ServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ServiceNoticeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ServiceNoticeRequest $request
     * @return \Dpd\StructType\GetServiceNotices
     */
    public function setRequest(\Dpd\StructType\ServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
