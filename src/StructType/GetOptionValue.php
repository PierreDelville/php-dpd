<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValue StructType
 * @subpackage Structs
 */
class GetOptionValue extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetOptionRequest
     */
    public $request;
    /**
     * Constructor method for GetOptionValue
     * @uses GetOptionValue::setRequest()
     * @param \Dpd\StructType\GetOptionRequest $request
     */
    public function __construct(\Dpd\StructType\GetOptionRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetOptionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetOptionRequest $request
     * @return \Dpd\StructType\GetOptionValue
     */
    public function setRequest(\Dpd\StructType\GetOptionRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
