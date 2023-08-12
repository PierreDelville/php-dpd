<?php

namespace StructType;

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
     * @var \StructType\GetOptionRequest
     */
    public $request;
    /**
     * Constructor method for GetOptionValue
     * @uses GetOptionValue::setRequest()
     * @param \StructType\GetOptionRequest $request
     */
    public function __construct(\StructType\GetOptionRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetOptionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetOptionRequest $request
     * @return \StructType\GetOptionValue
     */
    public function setRequest(\StructType\GetOptionRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
