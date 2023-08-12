<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRange StructType
 * @subpackage Structs
 */
class GetNumberRange extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumberRangeRequest
     */
    public $request;
    /**
     * Constructor method for GetNumberRange
     * @uses GetNumberRange::setRequest()
     * @param \StructType\NumberRangeRequest $request
     */
    public function __construct(\StructType\NumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\NumberRangeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\NumberRangeRequest $request
     * @return \StructType\GetNumberRange
     */
    public function setRequest(\StructType\NumberRangeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
