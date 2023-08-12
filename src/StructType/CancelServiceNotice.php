<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelServiceNotice StructType
 * @subpackage Structs
 */
class CancelServiceNotice extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CancelServiceNoticeRequest
     */
    public $request;
    /**
     * Constructor method for CancelServiceNotice
     * @uses CancelServiceNotice::setRequest()
     * @param \StructType\CancelServiceNoticeRequest $request
     */
    public function __construct(\StructType\CancelServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\CancelServiceNoticeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\CancelServiceNoticeRequest $request
     * @return \StructType\CancelServiceNotice
     */
    public function setRequest(\StructType\CancelServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
