<?php

namespace StructType;

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
     * @var \StructType\Options
     */
    public $Options;
    /**
     * Constructor method for ReferenceDetailRequest
     * @uses ReferenceDetailRequest::setSearchmode()
     * @uses ReferenceDetailRequest::setGetImages()
     * @uses ReferenceDetailRequest::setOptions()
     * @param string $searchmode
     * @param bool $getImages
     * @param \StructType\Options $options
     */
    public function __construct($searchmode = null, $getImages = null, \StructType\Options $options = null)
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
     * @uses \EnumType\ReferenceSearchMode::valueIsValid()
     * @uses \EnumType\ReferenceSearchMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchmode
     * @return \StructType\ReferenceDetailRequest
     */
    public function setSearchmode($searchmode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReferenceSearchMode::valueIsValid($searchmode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReferenceSearchMode', is_array($searchmode) ? implode(', ', $searchmode) : var_export($searchmode, true), implode(', ', \EnumType\ReferenceSearchMode::getValidValues())), __LINE__);
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
     * @return \StructType\ReferenceDetailRequest
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
     * @return \StructType\Options|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \StructType\Options $options
     * @return \StructType\ReferenceDetailRequest
     */
    public function setOptions(\StructType\Options $options = null)
    {
        $this->Options = $options;
        return $this;
    }
}
