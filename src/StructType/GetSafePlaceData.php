<?php

namespace StructType;

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
     * @var \StructType\GetSafePlaceDataRequest
     */
    public $request;
    /**
     * Constructor method for GetSafePlaceData
     * @uses GetSafePlaceData::setRequest()
     * @param \StructType\GetSafePlaceDataRequest $request
     */
    public function __construct(\StructType\GetSafePlaceDataRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetSafePlaceDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetSafePlaceDataRequest $request
     * @return \StructType\GetSafePlaceData
     */
    public function setRequest(\StructType\GetSafePlaceDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
