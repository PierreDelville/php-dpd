<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\UpdateServiceNoticeRequest
     */
    public $request;
    /**
     * Constructor method for UpdateServiceNotice
     * @uses UpdateServiceNotice::setRequest()
     * @param \Dpd\StructType\UpdateServiceNoticeRequest $request
     */
    public function __construct(\Dpd\StructType\UpdateServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\UpdateServiceNoticeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\UpdateServiceNoticeRequest $request
     * @return \Dpd\StructType\UpdateServiceNotice
     */
    public function setRequest(\Dpd\StructType\UpdateServiceNoticeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
