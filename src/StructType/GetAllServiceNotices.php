<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetAllServiceNoticesRequest
     */
    public $request;
    /**
     * Constructor method for GetAllServiceNotices
     * @uses GetAllServiceNotices::setRequest()
     * @param \Dpd\StructType\GetAllServiceNoticesRequest $request
     */
    public function __construct(\Dpd\StructType\GetAllServiceNoticesRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetAllServiceNoticesRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetAllServiceNoticesRequest $request
     * @return \Dpd\StructType\GetAllServiceNotices
     */
    public function setRequest(\Dpd\StructType\GetAllServiceNoticesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
