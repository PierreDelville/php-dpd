<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetLastNumberRequest
     */
    public $request;
    /**
     * Constructor method for GetLastNumber
     * @uses GetLastNumber::setRequest()
     * @param \Dpd\StructType\GetLastNumberRequest $request
     */
    public function __construct(\Dpd\StructType\GetLastNumberRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetLastNumberRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetLastNumberRequest $request
     * @return \Dpd\StructType\GetLastNumber
     */
    public function setRequest(\Dpd\StructType\GetLastNumberRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
