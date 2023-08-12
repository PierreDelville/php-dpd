<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\TerminateNumberRangeRequest
     */
    public $request;
    /**
     * Constructor method for TerminateNumberRange
     * @uses TerminateNumberRange::setRequest()
     * @param \Dpd\StructType\TerminateNumberRangeRequest $request
     */
    public function __construct(\Dpd\StructType\TerminateNumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\TerminateNumberRangeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\TerminateNumberRangeRequest $request
     * @return \Dpd\StructType\TerminateNumberRange
     */
    public function setRequest(\Dpd\StructType\TerminateNumberRangeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
