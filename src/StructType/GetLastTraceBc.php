<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceBc StructType
 * @subpackage Structs
 */
class GetLastTraceBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetLastTraceBcRequest
     */
    public $request;
    /**
     * Constructor method for GetLastTraceBc
     * @uses GetLastTraceBc::setRequest()
     * @param \StructType\GetLastTraceBcRequest $request
     */
    public function __construct(\StructType\GetLastTraceBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetLastTraceBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetLastTraceBcRequest $request
     * @return \StructType\GetLastTraceBc
     */
    public function setRequest(\StructType\GetLastTraceBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
