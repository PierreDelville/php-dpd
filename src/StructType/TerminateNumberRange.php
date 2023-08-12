<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRange StructType
 * @subpackage Structs
 */
class TerminateNumberRange extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TerminateNumberRangeRequest
     */
    public $request;
    /**
     * Constructor method for TerminateNumberRange
     * @uses TerminateNumberRange::setRequest()
     * @param \StructType\TerminateNumberRangeRequest $request
     */
    public function __construct(\StructType\TerminateNumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\TerminateNumberRangeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\TerminateNumberRangeRequest $request
     * @return \StructType\TerminateNumberRange
     */
    public function setRequest(\StructType\TerminateNumberRangeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
