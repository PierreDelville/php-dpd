<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetSafePlaceDataResponse
     */
    public $GetSafePlaceDataResult;
    /**
     * The Images
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfBase64Binary
     */
    public $Images;
    /**
     * Constructor method for GetSafePlaceDataResponse
     * @uses GetSafePlaceDataResponse::setGetSafePlaceDataResult()
     * @uses GetSafePlaceDataResponse::setImages()
     * @param \Dpd\StructType\GetSafePlaceDataResponse $getSafePlaceDataResult
     * @param \Dpd\ArrayType\ArrayOfBase64Binary $images
     */
    public function __construct(\Dpd\StructType\GetSafePlaceDataResponse $getSafePlaceDataResult = null, \Dpd\ArrayType\ArrayOfBase64Binary $images = null)
    {
        $this
            ->setGetSafePlaceDataResult($getSafePlaceDataResult)
            ->setImages($images);
    }
    /**
     * Get GetSafePlaceDataResult value
     * @return \Dpd\StructType\GetSafePlaceDataResponse|null
     */
    public function getGetSafePlaceDataResult()
    {
        return $this->GetSafePlaceDataResult;
    }
    /**
     * Set GetSafePlaceDataResult value
     * @param \Dpd\StructType\GetSafePlaceDataResponse $getSafePlaceDataResult
     * @return \Dpd\StructType\GetSafePlaceDataResponse
     */
    public function setGetSafePlaceDataResult(\Dpd\StructType\GetSafePlaceDataResponse $getSafePlaceDataResult = null)
    {
        $this->GetSafePlaceDataResult = $getSafePlaceDataResult;
        return $this;
    }
    /**
     * Get Images value
     * @return \Dpd\ArrayType\ArrayOfBase64Binary|null
     */
    public function getImages()
    {
        return $this->Images;
    }
    /**
     * Set Images value
     * @param \Dpd\ArrayType\ArrayOfBase64Binary $images
     * @return \Dpd\StructType\GetSafePlaceDataResponse
     */
    public function setImages(\Dpd\ArrayType\ArrayOfBase64Binary $images = null)
    {
        $this->Images = $images;
        return $this;
    }
}
