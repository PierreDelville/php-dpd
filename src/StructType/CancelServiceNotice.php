<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\CancelServiceNoticeRequest
     */
    public $request;
    /**
     * Constructor method for CancelServiceNotice
     * @uses CancelServiceNotice::setRequest()
     * @param \Dpd\StructType\CancelServiceNoticeRequest $request
     */
    public function __construct(\Dpd\StructType\CancelServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\CancelServiceNoticeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\CancelServiceNoticeRequest $request
     * @return \Dpd\StructType\CancelServiceNotice
     */
    public function setRequest(\Dpd\StructType\CancelServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
