<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutProperties StructType
 * @subpackage Structs
 */
class PutProperties extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PutPropertiesRequest
     */
    public $request;
    /**
     * Constructor method for PutProperties
     * @uses PutProperties::setRequest()
     * @param \StructType\PutPropertiesRequest $request
     */
    public function __construct(\StructType\PutPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\PutPropertiesRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\PutPropertiesRequest $request
     * @return \StructType\PutProperties
     */
    public function setRequest(\StructType\PutPropertiesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
