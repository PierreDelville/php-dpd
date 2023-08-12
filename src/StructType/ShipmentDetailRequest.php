<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDetailRequest StructType
 * @subpackage Structs
 */
class ShipmentDetailRequest extends ShipmentBaseRequest
{
    /**
     * The ExpandContainerMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ExpandContainerMode;
    /**
     * The GetImages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $GetImages;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Options
     */
    public $Options;
    /**
     * Constructor method for ShipmentDetailRequest
     * @uses ShipmentDetailRequest::setExpandContainerMode()
     * @uses ShipmentDetailRequest::setGetImages()
     * @uses ShipmentDetailRequest::setOptions()
     * @param string $expandContainerMode
     * @param bool $getImages
     * @param \Dpd\StructType\Options $options
     */
    public function __construct($expandContainerMode = null, $getImages = null, \Dpd\StructType\Options $options = null)
    {
        $this
            ->setExpandContainerMode($expandContainerMode)
            ->setGetImages($getImages)
            ->setOptions($options);
    }
    /**
     * Get ExpandContainerMode value
     * @return string
     */
    public function getExpandContainerMode()
    {
        return $this->ExpandContainerMode;
    }
    /**
     * Set ExpandContainerMode value
     * @uses \Dpd\EnumType\ExpandContainerModeType::valueIsValid()
     * @uses \Dpd\EnumType\ExpandContainerModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $expandContainerMode
     * @return \Dpd\StructType\ShipmentDetailRequest
     */
    public function setExpandContainerMode($expandContainerMode = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\ExpandContainerModeType::valueIsValid($expandContainerMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\ExpandContainerModeType', is_array($expandContainerMode) ? implode(', ', $expandContainerMode) : var_export($expandContainerMode, true), implode(', ', \Dpd\EnumType\ExpandContainerModeType::getValidValues())), __LINE__);
        }
        $this->ExpandContainerMode = $expandContainerMode;
        return $this;
    }
    /**
     * Get GetImages value
     * @return bool
     */
    public function getGetImages()
    {
        return $this->GetImages;
    }
    /**
     * Set GetImages value
     * @param bool $getImages
     * @return \Dpd\StructType\ShipmentDetailRequest
     */
    public function setGetImages($getImages = null)
    {
        // validation for constraint: boolean
        if (!is_null($getImages) && !is_bool($getImages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getImages, true), gettype($getImages)), __LINE__);
        }
        $this->GetImages = $getImages;
        return $this;
    }
    /**
     * Get Options value
     * @return \Dpd\StructType\Options|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Dpd\StructType\Options $options
     * @return \Dpd\StructType\ShipmentDetailRequest
     */
    public function setOptions(\Dpd\StructType\Options $options = null)
    {
        $this->Options = $options;
        return $this;
    }
}
