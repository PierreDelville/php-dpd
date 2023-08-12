<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RdvDeliveryInfo
     */
    public $DeliveryInfo;
    /**
     * The EsnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\RdvEsnInfo
     */
    public $EsnInfo;
    /**
     * The AdditionalData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\RdvData
     */
    public $AdditionalData;
    /**
     * Constructor method for UpdateRdvShipmentDataPredictRequest
     * @uses UpdateRdvShipmentDataPredictRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setAdditionalData()
     * @param \Dpd\StructType\RdvDeliveryInfo $deliveryInfo
     * @param \Dpd\StructType\RdvEsnInfo $esnInfo
     * @param \Dpd\StructType\RdvData $additionalData
     */
    public function __construct(\Dpd\StructType\RdvDeliveryInfo $deliveryInfo = null, \Dpd\StructType\RdvEsnInfo $esnInfo = null, \Dpd\StructType\RdvData $additionalData = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setAdditionalData($additionalData);
    }
    /**
     * Get DeliveryInfo value
     * @return \Dpd\StructType\RdvDeliveryInfo|null
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Dpd\StructType\RdvDeliveryInfo $deliveryInfo
     * @return \Dpd\StructType\UpdateRdvShipmentDataPredictRequest
     */
    public function setDeliveryInfo(\Dpd\StructType\RdvDeliveryInfo $deliveryInfo = null)
    {
        $this->DeliveryInfo = $deliveryInfo;
        return $this;
    }
    /**
     * Get EsnInfo value
     * @return \Dpd\StructType\RdvEsnInfo|null
     */
    public function getEsnInfo()
    {
        return $this->EsnInfo;
    }
    /**
     * Set EsnInfo value
     * @param \Dpd\StructType\RdvEsnInfo $esnInfo
     * @return \Dpd\StructType\UpdateRdvShipmentDataPredictRequest
     */
    public function setEsnInfo(\Dpd\StructType\RdvEsnInfo $esnInfo = null)
    {
        $this->EsnInfo = $esnInfo;
        return $this;
    }
    /**
     * Get AdditionalData value
     * @return \Dpd\StructType\RdvData|null
     */
    public function getAdditionalData()
    {
        return $this->AdditionalData;
    }
    /**
     * Set AdditionalData value
     * @param \Dpd\StructType\RdvData $additionalData
     * @return \Dpd\StructType\UpdateRdvShipmentDataPredictRequest
     */
    public function setAdditionalData(\Dpd\StructType\RdvData $additionalData = null)
    {
        $this->AdditionalData = $additionalData;
        return $this;
    }
}
