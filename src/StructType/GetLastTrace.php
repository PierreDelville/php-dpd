<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTrace StructType
 * @subpackage Structs
 */
class GetLastTrace extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetLastTraceRequest
     */
    public $request;
    /**
     * Constructor method for GetLastTrace
     * @uses GetLastTrace::setRequest()
     * @param \Dpd\StructType\GetLastTraceRequest $request
     */
    public function __construct(\Dpd\StructType\GetLastTraceRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetLastTraceRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetLastTraceRequest $request
     * @return \Dpd\StructType\GetLastTrace
     */
    public function setRequest(\Dpd\StructType\GetLastTraceRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
