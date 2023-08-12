<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlaceRequest StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataForSafePlaceRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RdvDeliveryInfoSmall
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
     * The Image
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Image;
    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlaceRequest
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setImage()
     * @param \StructType\RdvDeliveryInfoSmall $deliveryInfo
     * @param \StructType\RdvEsnInfo $esnInfo
     * @param string $image
     */
    public function __construct(\StructType\RdvDeliveryInfoSmall $deliveryInfo = null, \StructType\RdvEsnInfo $esnInfo = null, $image = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setImage($image);
    }
    /**
     * Get DeliveryInfo value
     * @return \StructType\RdvDeliveryInfoSmall|null
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \StructType\RdvDeliveryInfoSmall $deliveryInfo
     * @return \StructType\UpdateRdvShipmentDataForSafePlaceRequest
     */
    public function setDeliveryInfo(\StructType\RdvDeliveryInfoSmall $deliveryInfo = null)
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
     * @return \StructType\UpdateRdvShipmentDataForSafePlaceRequest
     */
    public function setEsnInfo(\StructType\RdvEsnInfo $esnInfo = null)
    {
        $this->EsnInfo = $esnInfo;
        return $this;
    }
    /**
     * Get Image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \StructType\UpdateRdvShipmentDataForSafePlaceRequest
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
    }
}
