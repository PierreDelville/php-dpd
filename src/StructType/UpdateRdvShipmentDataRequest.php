<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataRequest StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataRequest extends UpdateRdvShipmentData
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RdvAddress
     */
    public $Address;
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
     * Constructor method for UpdateRdvShipmentDataRequest
     * @uses UpdateRdvShipmentDataRequest::setAddress()
     * @uses UpdateRdvShipmentDataRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataRequest::setAdditionalData()
     * @param \StructType\RdvAddress $address
     * @param \StructType\RdvDeliveryInfo $deliveryInfo
     * @param \StructType\RdvEsnInfo $esnInfo
     * @param \StructType\RdvData $additionalData
     */
    public function __construct(\StructType\RdvAddress $address = null, \StructType\RdvDeliveryInfo $deliveryInfo = null, \StructType\RdvEsnInfo $esnInfo = null, \StructType\RdvData $additionalData = null)
    {
        $this
            ->setAddress($address)
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setAdditionalData($additionalData);
    }
    /**
     * Get Address value
     * @return \StructType\RdvAddress|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \StructType\RdvAddress $address
     * @return \StructType\UpdateRdvShipmentDataRequest
     */
    public function setAddress(\StructType\RdvAddress $address = null)
    {
        $this->Address = $address;
        return $this;
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
     * @return \StructType\UpdateRdvShipmentDataRequest
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
     * @return \StructType\UpdateRdvShipmentDataRequest
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
     * @return \StructType\UpdateRdvShipmentDataRequest
     */
    public function setAdditionalData(\StructType\RdvData $additionalData = null)
    {
        $this->AdditionalData = $additionalData;
        return $this;
    }
}
