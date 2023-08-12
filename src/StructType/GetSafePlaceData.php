<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceData StructType
 * @subpackage Structs
 */
class GetSafePlaceData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetSafePlaceDataRequest
     */
    public $request;
    /**
     * Constructor method for GetSafePlaceData
     * @uses GetSafePlaceData::setRequest()
     * @param \Dpd\StructType\GetSafePlaceDataRequest $request
     */
    public function __construct(\Dpd\StructType\GetSafePlaceDataRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetSafePlaceDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetSafePlaceDataRequest $request
     * @return \Dpd\StructType\GetSafePlaceData
     */
    public function setRequest(\Dpd\StructType\GetSafePlaceDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
