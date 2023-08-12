<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForAgencyPickupRequest StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataForAgencyPickupRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The EsnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\RdvEsnInfo
     */
    public $EsnInfo;
    /**
     * Constructor method for UpdateRdvShipmentDataForAgencyPickupRequest
     * @uses UpdateRdvShipmentDataForAgencyPickupRequest::setDeliveryDate()
     * @uses UpdateRdvShipmentDataForAgencyPickupRequest::setEsnInfo()
     * @param string $deliveryDate
     * @param \Dpd\StructType\RdvEsnInfo $esnInfo
     */
    public function __construct($deliveryDate = null, \Dpd\StructType\RdvEsnInfo $esnInfo = null)
    {
        $this
            ->setDeliveryDate($deliveryDate)
            ->setEsnInfo($esnInfo);
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
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
     * @return \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest
     */
    public function setEsnInfo(\Dpd\StructType\RdvEsnInfo $esnInfo = null)
    {
        $this->EsnInfo = $esnInfo;
        return $this;
    }
}
