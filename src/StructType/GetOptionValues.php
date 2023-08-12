<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetOptionsRequest
     */
    public $request;
    /**
     * Constructor method for GetOptionValues
     * @uses GetOptionValues::setRequest()
     * @param \Dpd\StructType\GetOptionsRequest $request
     */
    public function __construct(\Dpd\StructType\GetOptionsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetOptionsRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetOptionsRequest $request
     * @return \Dpd\StructType\GetOptionValues
     */
    public function setRequest(\Dpd\StructType\GetOptionsRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
