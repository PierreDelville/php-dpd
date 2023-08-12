<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetPropertiesRequest
     */
    public $request;
    /**
     * Constructor method for GetProperties
     * @uses GetProperties::setRequest()
     * @param \Dpd\StructType\GetPropertiesRequest $request
     */
    public function __construct(\Dpd\StructType\GetPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetPropertiesRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetPropertiesRequest $request
     * @return \Dpd\StructType\GetProperties
     */
    public function setRequest(\Dpd\StructType\GetPropertiesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
