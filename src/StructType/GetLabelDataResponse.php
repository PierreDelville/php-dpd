<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetLabelDataResponse
     */
    public $GetLabelDataResult;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\LabelData
     */
    public $Data;
    /**
     * The BarcodeData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfBarcodeData
     */
    public $BarcodeData;
    /**
     * Constructor method for GetLabelDataResponse
     * @uses GetLabelDataResponse::setGetLabelDataResult()
     * @uses GetLabelDataResponse::setData()
     * @uses GetLabelDataResponse::setBarcodeData()
     * @param \Dpd\StructType\GetLabelDataResponse $getLabelDataResult
     * @param \Dpd\StructType\LabelData $data
     * @param \Dpd\ArrayType\ArrayOfBarcodeData $barcodeData
     */
    public function __construct(\Dpd\StructType\GetLabelDataResponse $getLabelDataResult = null, \Dpd\StructType\LabelData $data = null, \Dpd\ArrayType\ArrayOfBarcodeData $barcodeData = null)
    {
        $this
            ->setGetLabelDataResult($getLabelDataResult)
            ->setData($data)
            ->setBarcodeData($barcodeData);
    }
    /**
     * Get GetLabelDataResult value
     * @return \Dpd\StructType\GetLabelDataResponse|null
     */
    public function getGetLabelDataResult()
    {
        return $this->GetLabelDataResult;
    }
    /**
     * Set GetLabelDataResult value
     * @param \Dpd\StructType\GetLabelDataResponse $getLabelDataResult
     * @return \Dpd\StructType\GetLabelDataResponse
     */
    public function setGetLabelDataResult(\Dpd\StructType\GetLabelDataResponse $getLabelDataResult = null)
    {
        $this->GetLabelDataResult = $getLabelDataResult;
        return $this;
    }
    /**
     * Get Data value
     * @return \Dpd\StructType\LabelData|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \Dpd\StructType\LabelData $data
     * @return \Dpd\StructType\GetLabelDataResponse
     */
    public function setData(\Dpd\StructType\LabelData $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Get BarcodeData value
     * @return \Dpd\ArrayType\ArrayOfBarcodeData|null
     */
    public function getBarcodeData()
    {
        return $this->BarcodeData;
    }
    /**
     * Set BarcodeData value
     * @param \Dpd\ArrayType\ArrayOfBarcodeData $barcodeData
     * @return \Dpd\StructType\GetLabelDataResponse
     */
    public function setBarcodeData(\Dpd\ArrayType\ArrayOfBarcodeData $barcodeData = null)
    {
        $this->BarcodeData = $barcodeData;
        return $this;
    }
}
