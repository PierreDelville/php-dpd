<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\PutPropertiesRequest
     */
    public $request;
    /**
     * Constructor method for PutProperties
     * @uses PutProperties::setRequest()
     * @param \Dpd\StructType\PutPropertiesRequest $request
     */
    public function __construct(\Dpd\StructType\PutPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\PutPropertiesRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\PutPropertiesRequest $request
     * @return \Dpd\StructType\PutProperties
     */
    public function setRequest(\Dpd\StructType\PutPropertiesRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
