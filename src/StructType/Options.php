<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Options StructType
 * @subpackage Structs
 */
class Options extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The CenterType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CenterType;
    /**
     * Constructor method for Options
     * @uses Options::setType()
     * @uses Options::setCenterType()
     * @param string $type
     * @param string $centerType
     */
    public function __construct($type = null, $centerType = null)
    {
        $this
            ->setType($type)
            ->setCenterType($centerType);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Dpd\StructType\Options
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get CenterType value
     * @return string|null
     */
    public function getCenterType()
    {
        return $this->CenterType;
    }
    /**
     * Set CenterType value
     * @param string $centerType
     * @return \Dpd\StructType\Options
     */
    public function setCenterType($centerType = null)
    {
        // validation for constraint: string
        if (!is_null($centerType) && !is_string($centerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centerType, true), gettype($centerType)), __LINE__);
        }
        $this->CenterType = $centerType;
        return $this;
    }
}
