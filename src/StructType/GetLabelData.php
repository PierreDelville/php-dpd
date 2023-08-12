<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetLabelDataRequest
     */
    public $request;
    /**
     * Constructor method for GetLabelData
     * @uses GetLabelData::setRequest()
     * @param \Dpd\StructType\GetLabelDataRequest $request
     */
    public function __construct(\Dpd\StructType\GetLabelDataRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetLabelDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetLabelDataRequest $request
     * @return \Dpd\StructType\GetLabelData
     */
    public function setRequest(\Dpd\StructType\GetLabelDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
