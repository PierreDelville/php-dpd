<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransitTime StructType
 * @subpackage Structs
 */
class GetNationalTransitTime extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetNationalTransitTimeRequest
     */
    public $request;
    /**
     * Constructor method for GetNationalTransitTime
     * @uses GetNationalTransitTime::setRequest()
     * @param \StructType\GetNationalTransitTimeRequest $request
     */
    public function __construct(\StructType\GetNationalTransitTimeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetNationalTransitTimeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetNationalTransitTimeRequest $request
     * @return \StructType\GetNationalTransitTime
     */
    public function setRequest(\StructType\GetNationalTransitTimeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
