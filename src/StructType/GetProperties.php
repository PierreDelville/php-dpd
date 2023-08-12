<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProperties StructType
 * @subpackage Structs
 */
class GetProperties extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetPropertiesRequest
     */
    public $request;
    /**
     * Constructor method for GetProperties
     * @uses GetProperties::setRequest()
     * @param \StructType\GetPropertiesRequest $request
     */
    public function __construct(\StructType\GetPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetPropertiesRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetPropertiesRequest $request
     * @return \StructType\GetProperties
     */
    public function setRequest(\StructType\GetPropertiesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
