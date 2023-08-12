<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateServiceNotice StructType
 * @subpackage Structs
 */
class UpdateServiceNotice extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UpdateServiceNoticeRequest
     */
    public $request;
    /**
     * Constructor method for UpdateServiceNotice
     * @uses UpdateServiceNotice::setRequest()
     * @param \StructType\UpdateServiceNoticeRequest $request
     */
    public function __construct(\StructType\UpdateServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\UpdateServiceNoticeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\UpdateServiceNoticeRequest $request
     * @return \StructType\UpdateServiceNotice
     */
    public function setRequest(\StructType\UpdateServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
