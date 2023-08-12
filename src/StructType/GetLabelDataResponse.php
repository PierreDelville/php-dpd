<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelDataResponse StructType
 * @subpackage Structs
 */
class GetLabelDataResponse extends AbstractStructBase
{
    /**
     * The GetLabelDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetLabelDataResponse
     */
    public $GetLabelDataResult;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LabelData
     */
    public $Data;
    /**
     * The BarcodeData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfBarcodeData
     */
    public $BarcodeData;
    /**
     * Constructor method for GetLabelDataResponse
     * @uses GetLabelDataResponse::setGetLabelDataResult()
     * @uses GetLabelDataResponse::setData()
     * @uses GetLabelDataResponse::setBarcodeData()
     * @param \StructType\GetLabelDataResponse $getLabelDataResult
     * @param \StructType\LabelData $data
     * @param \ArrayType\ArrayOfBarcodeData $barcodeData
     */
    public function __construct(\StructType\GetLabelDataResponse $getLabelDataResult = null, \StructType\LabelData $data = null, \ArrayType\ArrayOfBarcodeData $barcodeData = null)
    {
        $this
            ->setGetLabelDataResult($getLabelDataResult)
            ->setData($data)
            ->setBarcodeData($barcodeData);
    }
    /**
     * Get GetLabelDataResult value
     * @return \StructType\GetLabelDataResponse|null
     */
    public function getGetLabelDataResult()
    {
        return $this->GetLabelDataResult;
    }
    /**
     * Set GetLabelDataResult value
     * @param \StructType\GetLabelDataResponse $getLabelDataResult
     * @return \StructType\GetLabelDataResponse
     */
    public function setGetLabelDataResult(\StructType\GetLabelDataResponse $getLabelDataResult = null)
    {
        $this->GetLabelDataResult = $getLabelDataResult;
        return $this;
    }
    /**
     * Get Data value
     * @return \StructType\LabelData|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \StructType\LabelData $data
     * @return \StructType\GetLabelDataResponse
     */
    public function setData(\StructType\LabelData $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Get BarcodeData value
     * @return \ArrayType\ArrayOfBarcodeData|null
     */
    public function getBarcodeData()
    {
        return $this->BarcodeData;
    }
    /**
     * Set BarcodeData value
     * @param \ArrayType\ArrayOfBarcodeData $barcodeData
     * @return \StructType\GetLabelDataResponse
     */
    public function setBarcodeData(\ArrayType\ArrayOfBarcodeData $barcodeData = null)
    {
        $this->BarcodeData = $barcodeData;
        return $this;
    }
}
