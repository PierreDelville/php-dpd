<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValues StructType
 * @subpackage Structs
 */
class GetOptionValues extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetOptionsRequest
     */
    public $request;
    /**
     * Constructor method for GetOptionValues
     * @uses GetOptionValues::setRequest()
     * @param \StructType\GetOptionsRequest $request
     */
    public function __construct(\StructType\GetOptionsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetOptionsRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetOptionsRequest $request
     * @return \StructType\GetOptionValues
     */
    public function setRequest(\StructType\GetOptionsRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
