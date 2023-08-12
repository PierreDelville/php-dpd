<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetPropertiesResponse
     */
    public $GetPropertiesResult;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfPropertyDefinition
     */
    public $Properties;
    /**
     * Constructor method for GetPropertiesResponse
     * @uses GetPropertiesResponse::setGetPropertiesResult()
     * @uses GetPropertiesResponse::setProperties()
     * @param \Dpd\StructType\GetPropertiesResponse $getPropertiesResult
     * @param \Dpd\ArrayType\ArrayOfPropertyDefinition $properties
     */
    public function __construct(\Dpd\StructType\GetPropertiesResponse $getPropertiesResult = null, \Dpd\ArrayType\ArrayOfPropertyDefinition $properties = null)
    {
        $this
            ->setGetPropertiesResult($getPropertiesResult)
            ->setProperties($properties);
    }
    /**
     * Get GetPropertiesResult value
     * @return \Dpd\StructType\GetPropertiesResponse|null
     */
    public function getGetPropertiesResult()
    {
        return $this->GetPropertiesResult;
    }
    /**
     * Set GetPropertiesResult value
     * @param \Dpd\StructType\GetPropertiesResponse $getPropertiesResult
     * @return \Dpd\StructType\GetPropertiesResponse
     */
    public function setGetPropertiesResult(\Dpd\StructType\GetPropertiesResponse $getPropertiesResult = null)
    {
        $this->GetPropertiesResult = $getPropertiesResult;
        return $this;
    }
    /**
     * Get Properties value
     * @return \Dpd\ArrayType\ArrayOfPropertyDefinition|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Dpd\ArrayType\ArrayOfPropertyDefinition $properties
     * @return \Dpd\StructType\GetPropertiesResponse
     */
    public function setProperties(\Dpd\ArrayType\ArrayOfPropertyDefinition $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
}
