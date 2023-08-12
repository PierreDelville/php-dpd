<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceDataResponse StructType
 * @subpackage Structs
 */
class GetSafePlaceDataResponse extends AbstractStructBase
{
    /**
     * The GetSafePlaceDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetSafePlaceDataResponse
     */
    public $GetSafePlaceDataResult;
    /**
     * The Images
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfBase64Binary
     */
    public $Images;
    /**
     * Constructor method for GetSafePlaceDataResponse
     * @uses GetSafePlaceDataResponse::setGetSafePlaceDataResult()
     * @uses GetSafePlaceDataResponse::setImages()
     * @param \StructType\GetSafePlaceDataResponse $getSafePlaceDataResult
     * @param \ArrayType\ArrayOfBase64Binary $images
     */
    public function __construct(\StructType\GetSafePlaceDataResponse $getSafePlaceDataResult = null, \ArrayType\ArrayOfBase64Binary $images = null)
    {
        $this
            ->setGetSafePlaceDataResult($getSafePlaceDataResult)
            ->setImages($images);
    }
    /**
     * Get GetSafePlaceDataResult value
     * @return \StructType\GetSafePlaceDataResponse|null
     */
    public function getGetSafePlaceDataResult()
    {
        return $this->GetSafePlaceDataResult;
    }
    /**
     * Set GetSafePlaceDataResult value
     * @param \StructType\GetSafePlaceDataResponse $getSafePlaceDataResult
     * @return \StructType\GetSafePlaceDataResponse
     */
    public function setGetSafePlaceDataResult(\StructType\GetSafePlaceDataResponse $getSafePlaceDataResult = null)
    {
        $this->GetSafePlaceDataResult = $getSafePlaceDataResult;
        return $this;
    }
    /**
     * Get Images value
     * @return \ArrayType\ArrayOfBase64Binary|null
     */
    public function getImages()
    {
        return $this->Images;
    }
    /**
     * Set Images value
     * @param \ArrayType\ArrayOfBase64Binary $images
     * @return \StructType\GetSafePlaceDataResponse
     */
    public function setImages(\ArrayType\ArrayOfBase64Binary $images = null)
    {
        $this->Images = $images;
        return $this;
    }
}
