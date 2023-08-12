<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\TerminateNumberRangeBcRequest
     */
    public $request;
    /**
     * Constructor method for TerminateNumberRangeBc
     * @uses TerminateNumberRangeBc::setRequest()
     * @param \Dpd\StructType\TerminateNumberRangeBcRequest $request
     */
    public function __construct(\Dpd\StructType\TerminateNumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\TerminateNumberRangeBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\TerminateNumberRangeBcRequest $request
     * @return \Dpd\StructType\TerminateNumberRangeBc
     */
    public function setRequest(\Dpd\StructType\TerminateNumberRangeBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
