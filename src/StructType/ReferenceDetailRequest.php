<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDetailRequest StructType
 * @subpackage Structs
 */
class ReferenceDetailRequest extends ReferenceBaseRequest
{
    /**
     * The Searchmode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Searchmode;
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
     * Constructor method for ReferenceDetailRequest
     * @uses ReferenceDetailRequest::setSearchmode()
     * @uses ReferenceDetailRequest::setGetImages()
     * @uses ReferenceDetailRequest::setOptions()
     * @param string $searchmode
     * @param bool $getImages
     * @param \Dpd\StructType\Options $options
     */
    public function __construct($searchmode = null, $getImages = null, \Dpd\StructType\Options $options = null)
    {
        $this
            ->setSearchmode($searchmode)
            ->setGetImages($getImages)
            ->setOptions($options);
    }
    /**
     * Get Searchmode value
     * @return string
     */
    public function getSearchmode()
    {
        return $this->Searchmode;
    }
    /**
     * Set Searchmode value
     * @uses \Dpd\EnumType\ReferenceSearchMode::valueIsValid()
     * @uses \Dpd\EnumType\ReferenceSearchMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchmode
     * @return \Dpd\StructType\ReferenceDetailRequest
     */
    public function setSearchmode($searchmode = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\ReferenceSearchMode::valueIsValid($searchmode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\ReferenceSearchMode', is_array($searchmode) ? implode(', ', $searchmode) : var_export($searchmode, true), implode(', ', \Dpd\EnumType\ReferenceSearchMode::getValidValues())), __LINE__);
        }
        $this->Searchmode = $searchmode;
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
     * @return \Dpd\StructType\ReferenceDetailRequest
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
     * @return \Dpd\StructType\ReferenceDetailRequest
     */
    public function setOptions(\Dpd\StructType\Options $options = null)
    {
        $this->Options = $options;
        return $this;
    }
}
