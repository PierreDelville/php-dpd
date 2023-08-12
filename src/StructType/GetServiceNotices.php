<?php

namespace StructType;

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
     * @var \StructType\ServiceNoticeRequest
     */
    public $request;
    /**
     * Constructor method for GetServiceNotices
     * @uses GetServiceNotices::setRequest()
     * @param \StructType\ServiceNoticeRequest $request
     */
    public function __construct(\StructType\ServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ServiceNoticeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ServiceNoticeRequest $request
     * @return \StructType\GetServiceNotices
     */
    public function setRequest(\StructType\ServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
