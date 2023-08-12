<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\NumberRangeBcRequest
     */
    public $request;
    /**
     * Constructor method for GetNumberRangeBc
     * @uses GetNumberRangeBc::setRequest()
     * @param \Dpd\StructType\NumberRangeBcRequest $request
     */
    public function __construct(\Dpd\StructType\NumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\NumberRangeBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\NumberRangeBcRequest $request
     * @return \Dpd\StructType\GetNumberRangeBc
     */
    public function setRequest(\Dpd\StructType\NumberRangeBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
