<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataPredictRequest StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataPredictRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RdvDeliveryInfo
     */
    public $DeliveryInfo;
    /**
     * The EsnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RdvEsnInfo
     */
    public $EsnInfo;
    /**
     * The AdditionalData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RdvData
     */
    public $AdditionalData;
    /**
     * Constructor method for UpdateRdvShipmentDataPredictRequest
     * @uses UpdateRdvShipmentDataPredictRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setAdditionalData()
     * @param \StructType\RdvDeliveryInfo $deliveryInfo
     * @param \StructType\RdvEsnInfo $esnInfo
     * @param \StructType\RdvData $additionalData
     */
    public function __construct(\StructType\RdvDeliveryInfo $deliveryInfo = null, \StructType\RdvEsnInfo $esnInfo = null, \StructType\RdvData $additionalData = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setAdditionalData($additionalData);
    }
    /**
     * Get DeliveryInfo value
     * @return \StructType\RdvDeliveryInfo|null
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \StructType\RdvDeliveryInfo $deliveryInfo
     * @return \StructType\UpdateRdvShipmentDataPredictRequest
     */
    public function setDeliveryInfo(\StructType\RdvDeliveryInfo $deliveryInfo = null)
    {
        $this->DeliveryInfo = $deliveryInfo;
        return $this;
    }
    /**
     * Get EsnInfo value
     * @return \StructType\RdvEsnInfo|null
     */
    public function getEsnInfo()
    {
        return $this->EsnInfo;
    }
    /**
     * Set EsnInfo value
     * @param \StructType\RdvEsnInfo $esnInfo
     * @return \StructType\UpdateRdvShipmentDataPredictRequest
     */
    public function setEsnInfo(\StructType\RdvEsnInfo $esnInfo = null)
    {
        $this->EsnInfo = $esnInfo;
        return $this;
    }
    /**
     * Get AdditionalData value
     * @return \StructType\RdvData|null
     */
    public function getAdditionalData()
    {
        return $this->AdditionalData;
    }
    /**
     * Set AdditionalData value
     * @param \StructType\RdvData $additionalData
     * @return \StructType\UpdateRdvShipmentDataPredictRequest
     */
    public function setAdditionalData(\StructType\RdvData $additionalData = null)
    {
        $this->AdditionalData = $additionalData;
        return $this;
    }
}
