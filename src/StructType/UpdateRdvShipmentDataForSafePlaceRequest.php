<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RdvDeliveryInfoSmall
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
     * @param \Dpd\StructType\RdvDeliveryInfoSmall $deliveryInfo
     * @param \Dpd\StructType\RdvEsnInfo $esnInfo
     * @param string $image
     */
    public function __construct(\Dpd\StructType\RdvDeliveryInfoSmall $deliveryInfo = null, \Dpd\StructType\RdvEsnInfo $esnInfo = null, $image = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setImage($image);
    }
    /**
     * Get DeliveryInfo value
     * @return \Dpd\StructType\RdvDeliveryInfoSmall|null
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Dpd\StructType\RdvDeliveryInfoSmall $deliveryInfo
     * @return \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest
     */
    public function setDeliveryInfo(\Dpd\StructType\RdvDeliveryInfoSmall $deliveryInfo = null)
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
     * @return \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest
     */
    public function setEsnInfo(\Dpd\StructType\RdvEsnInfo $esnInfo = null)
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
     * @return \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest
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
