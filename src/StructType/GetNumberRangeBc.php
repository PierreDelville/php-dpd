<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeBc StructType
 * @subpackage Structs
 */
class GetNumberRangeBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NumberRangeBcRequest
     */
    public $request;
    /**
     * Constructor method for GetNumberRangeBc
     * @uses GetNumberRangeBc::setRequest()
     * @param \StructType\NumberRangeBcRequest $request
     */
    public function __construct(\StructType\NumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\NumberRangeBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\NumberRangeBcRequest $request
     * @return \StructType\GetNumberRangeBc
     */
    public function setRequest(\StructType\NumberRangeBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
