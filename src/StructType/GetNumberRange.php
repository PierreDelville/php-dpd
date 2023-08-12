<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\NumberRangeRequest
     */
    public $request;
    /**
     * Constructor method for GetNumberRange
     * @uses GetNumberRange::setRequest()
     * @param \Dpd\StructType\NumberRangeRequest $request
     */
    public function __construct(\Dpd\StructType\NumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\NumberRangeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\NumberRangeRequest $request
     * @return \Dpd\StructType\GetNumberRange
     */
    public function setRequest(\Dpd\StructType\NumberRangeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
