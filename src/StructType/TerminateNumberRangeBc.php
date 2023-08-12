<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRangeBc StructType
 * @subpackage Structs
 */
class TerminateNumberRangeBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TerminateNumberRangeBcRequest
     */
    public $request;
    /**
     * Constructor method for TerminateNumberRangeBc
     * @uses TerminateNumberRangeBc::setRequest()
     * @param \StructType\TerminateNumberRangeBcRequest $request
     */
    public function __construct(\StructType\TerminateNumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\TerminateNumberRangeBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\TerminateNumberRangeBcRequest $request
     * @return \StructType\TerminateNumberRangeBc
     */
    public function setRequest(\StructType\TerminateNumberRangeBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
