<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumber StructType
 * @subpackage Structs
 */
class GetLastNumber extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetLastNumberRequest
     */
    public $request;
    /**
     * Constructor method for GetLastNumber
     * @uses GetLastNumber::setRequest()
     * @param \StructType\GetLastNumberRequest $request
     */
    public function __construct(\StructType\GetLastNumberRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetLastNumberRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetLastNumberRequest $request
     * @return \StructType\GetLastNumber
     */
    public function setRequest(\StructType\GetLastNumberRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
