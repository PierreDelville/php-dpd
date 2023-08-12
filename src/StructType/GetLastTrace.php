<?php

namespace StructType;

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
     * @var \StructType\GetLastTraceRequest
     */
    public $request;
    /**
     * Constructor method for GetLastTrace
     * @uses GetLastTrace::setRequest()
     * @param \StructType\GetLastTraceRequest $request
     */
    public function __construct(\StructType\GetLastTraceRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetLastTraceRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetLastTraceRequest $request
     * @return \StructType\GetLastTrace
     */
    public function setRequest(\StructType\GetLastTraceRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
