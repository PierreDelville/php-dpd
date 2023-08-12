<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForShopRequest StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataForShopRequest extends UpdateRdvShipmentData
{
    /**
     * The ShopID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShopID;
    /**
     * The Receiver_ContactName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Receiver_ContactName;
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
     * @var \StructType\RdvEsnInfo
     */
    public $EsnInfo;
    /**
     * Constructor method for UpdateRdvShipmentDataForShopRequest
     * @uses UpdateRdvShipmentDataForShopRequest::setShopID()
     * @uses UpdateRdvShipmentDataForShopRequest::setReceiver_ContactName()
     * @uses UpdateRdvShipmentDataForShopRequest::setDeliveryDate()
     * @uses UpdateRdvShipmentDataForShopRequest::setEsnInfo()
     * @param string $shopID
     * @param string $receiver_ContactName
     * @param string $deliveryDate
     * @param \StructType\RdvEsnInfo $esnInfo
     */
    public function __construct($shopID = null, $receiver_ContactName = null, $deliveryDate = null, \StructType\RdvEsnInfo $esnInfo = null)
    {
        $this
            ->setShopID($shopID)
            ->setReceiver_ContactName($receiver_ContactName)
            ->setDeliveryDate($deliveryDate)
            ->setEsnInfo($esnInfo);
    }
    /**
     * Get ShopID value
     * @return string|null
     */
    public function getShopID()
    {
        return $this->ShopID;
    }
    /**
     * Set ShopID value
     * @param string $shopID
     * @return \StructType\UpdateRdvShipmentDataForShopRequest
     */
    public function setShopID($shopID = null)
    {
        // validation for constraint: string
        if (!is_null($shopID) && !is_string($shopID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopID, true), gettype($shopID)), __LINE__);
        }
        $this->ShopID = $shopID;
        return $this;
    }
    /**
     * Get Receiver_ContactName value
     * @return string|null
     */
    public function getReceiver_ContactName()
    {
        return $this->Receiver_ContactName;
    }
    /**
     * Set Receiver_ContactName value
     * @param string $receiver_ContactName
     * @return \StructType\UpdateRdvShipmentDataForShopRequest
     */
    public function setReceiver_ContactName($receiver_ContactName = null)
    {
        // validation for constraint: string
        if (!is_null($receiver_ContactName) && !is_string($receiver_ContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver_ContactName, true), gettype($receiver_ContactName)), __LINE__);
        }
        $this->Receiver_ContactName = $receiver_ContactName;
        return $this;
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
     * @return \StructType\UpdateRdvShipmentDataForShopRequest
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
     * @return \StructType\RdvEsnInfo|null
     */
    public function getEsnInfo()
    {
        return $this->EsnInfo;
    }
    /**
     * Set EsnInfo value
     * @param \StructType\RdvEsnInfo $esnInfo
     * @return \StructType\UpdateRdvShipmentDataForShopRequest
     */
    public function setEsnInfo(\StructType\RdvEsnInfo $esnInfo = null)
    {
        $this->EsnInfo = $esnInfo;
        return $this;
    }
}
