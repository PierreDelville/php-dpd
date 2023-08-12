<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvShipmentData StructType
 * @subpackage Structs
 */
class RdvShipmentData extends RdvShipmentDataBase
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ParcelInfoSin
     */
    public $Parcel;
    /**
     * The ShipmentSin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentSin;
    /**
     * The AvisDePassageSin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AvisDePassageSin;
    /**
     * Constructor method for RdvShipmentData
     * @uses RdvShipmentData::setParcel()
     * @uses RdvShipmentData::setShipmentSin()
     * @uses RdvShipmentData::setAvisDePassageSin()
     * @param \Dpd\StructType\ParcelInfoSin $parcel
     * @param string $shipmentSin
     * @param string $avisDePassageSin
     */
    public function __construct(\Dpd\StructType\ParcelInfoSin $parcel = null, $shipmentSin = null, $avisDePassageSin = null)
    {
        $this
            ->setParcel($parcel)
            ->setShipmentSin($shipmentSin)
            ->setAvisDePassageSin($avisDePassageSin);
    }
    /**
     * Get Parcel value
     * @return \Dpd\StructType\ParcelInfoSin|null
     */
    public function getParcel()
    {
        return $this->Parcel;
    }
    /**
     * Set Parcel value
     * @param \Dpd\StructType\ParcelInfoSin $parcel
     * @return \Dpd\StructType\RdvShipmentData
     */
    public function setParcel(\Dpd\StructType\ParcelInfoSin $parcel = null)
    {
        $this->Parcel = $parcel;
        return $this;
    }
    /**
     * Get ShipmentSin value
     * @return string|null
     */
    public function getShipmentSin()
    {
        return $this->ShipmentSin;
    }
    /**
     * Set ShipmentSin value
     * @param string $shipmentSin
     * @return \Dpd\StructType\RdvShipmentData
     */
    public function setShipmentSin($shipmentSin = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentSin) && !is_string($shipmentSin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentSin, true), gettype($shipmentSin)), __LINE__);
        }
        $this->ShipmentSin = $shipmentSin;
        return $this;
    }
    /**
     * Get AvisDePassageSin value
     * @return string|null
     */
    public function getAvisDePassageSin()
    {
        return $this->AvisDePassageSin;
    }
    /**
     * Set AvisDePassageSin value
     * @param string $avisDePassageSin
     * @return \Dpd\StructType\RdvShipmentData
     */
    public function setAvisDePassageSin($avisDePassageSin = null)
    {
        // validation for constraint: string
        if (!is_null($avisDePassageSin) && !is_string($avisDePassageSin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($avisDePassageSin, true), gettype($avisDePassageSin)), __LINE__);
        }
        $this->AvisDePassageSin = $avisDePassageSin;
        return $this;
    }
}
