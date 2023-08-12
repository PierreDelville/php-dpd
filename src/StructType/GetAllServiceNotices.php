<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServiceNotices StructType
 * @subpackage Structs
 */
class GetAllServiceNotices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetAllServiceNoticesRequest
     */
    public $request;
    /**
     * Constructor method for GetAllServiceNotices
     * @uses GetAllServiceNotices::setRequest()
     * @param \StructType\GetAllServiceNoticesRequest $request
     */
    public function __construct(\StructType\GetAllServiceNoticesRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetAllServiceNoticesRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetAllServiceNoticesRequest $request
     * @return \StructType\GetAllServiceNotices
     */
    public function setRequest(\StructType\GetAllServiceNoticesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
