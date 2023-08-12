<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetLastTraceBcRequest
     */
    public $request;
    /**
     * Constructor method for GetLastTraceBc
     * @uses GetLastTraceBc::setRequest()
     * @param \Dpd\StructType\GetLastTraceBcRequest $request
     */
    public function __construct(\Dpd\StructType\GetLastTraceBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetLastTraceBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetLastTraceBcRequest $request
     * @return \Dpd\StructType\GetLastTraceBc
     */
    public function setRequest(\Dpd\StructType\GetLastTraceBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
