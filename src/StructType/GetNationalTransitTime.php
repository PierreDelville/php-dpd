<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetNationalTransitTimeRequest
     */
    public $request;
    /**
     * Constructor method for GetNationalTransitTime
     * @uses GetNationalTransitTime::setRequest()
     * @param \Dpd\StructType\GetNationalTransitTimeRequest $request
     */
    public function __construct(\Dpd\StructType\GetNationalTransitTimeRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetNationalTransitTimeRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetNationalTransitTimeRequest $request
     * @return \Dpd\StructType\GetNationalTransitTime
     */
    public function setRequest(\Dpd\StructType\GetNationalTransitTimeRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
