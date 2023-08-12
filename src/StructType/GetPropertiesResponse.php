<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertiesResponse StructType
 * @subpackage Structs
 */
class GetPropertiesResponse extends AbstractStructBase
{
    /**
     * The GetPropertiesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetPropertiesResponse
     */
    public $GetPropertiesResult;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfPropertyDefinition
     */
    public $Properties;
    /**
     * Constructor method for GetPropertiesResponse
     * @uses GetPropertiesResponse::setGetPropertiesResult()
     * @uses GetPropertiesResponse::setProperties()
     * @param \StructType\GetPropertiesResponse $getPropertiesResult
     * @param \ArrayType\ArrayOfPropertyDefinition $properties
     */
    public function __construct(\StructType\GetPropertiesResponse $getPropertiesResult = null, \ArrayType\ArrayOfPropertyDefinition $properties = null)
    {
        $this
            ->setGetPropertiesResult($getPropertiesResult)
            ->setProperties($properties);
    }
    /**
     * Get GetPropertiesResult value
     * @return \StructType\GetPropertiesResponse|null
     */
    public function getGetPropertiesResult()
    {
        return $this->GetPropertiesResult;
    }
    /**
     * Set GetPropertiesResult value
     * @param \StructType\GetPropertiesResponse $getPropertiesResult
     * @return \StructType\GetPropertiesResponse
     */
    public function setGetPropertiesResult(\StructType\GetPropertiesResponse $getPropertiesResult = null)
    {
        $this->GetPropertiesResult = $getPropertiesResult;
        return $this;
    }
    /**
     * Get Properties value
     * @return \ArrayType\ArrayOfPropertyDefinition|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \ArrayType\ArrayOfPropertyDefinition $properties
     * @return \StructType\GetPropertiesResponse
     */
    public function setProperties(\ArrayType\ArrayOfPropertyDefinition $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
}
