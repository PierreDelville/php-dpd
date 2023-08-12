<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelData StructType
 * @subpackage Structs
 */
class GetLabelData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetLabelDataRequest
     */
    public $request;
    /**
     * Constructor method for GetLabelData
     * @uses GetLabelData::setRequest()
     * @param \StructType\GetLabelDataRequest $request
     */
    public function __construct(\StructType\GetLabelDataRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetLabelDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetLabelDataRequest $request
     * @return \StructType\GetLabelData
     */
    public function setRequest(\StructType\GetLabelDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
