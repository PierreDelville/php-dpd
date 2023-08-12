<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDataExtendedBc StructType
 * @subpackage Structs
 */
class ShipmentDataExtendedBc extends ShipmentDataExtendedBase
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Sin;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Barcode;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeSource;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeId;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfServiceEntry
     */
    public $Services;
    /**
     * Constructor method for ShipmentDataExtendedBc
     * @uses ShipmentDataExtendedBc::setSin()
     * @uses ShipmentDataExtendedBc::setBarcode()
     * @uses ShipmentDataExtendedBc::setBarcodeSource()
     * @uses ShipmentDataExtendedBc::setBarcodeId()
     * @uses ShipmentDataExtendedBc::setServices()
     * @param int $sin
     * @param string $barcode
     * @param string $barcodeSource
     * @param string $barcodeId
     * @param \Dpd\ArrayType\ArrayOfServiceEntry $services
     */
    public function __construct($sin = null, $barcode = null, $barcodeSource = null, $barcodeId = null, \Dpd\ArrayType\ArrayOfServiceEntry $services = null)
    {
        $this
            ->setSin($sin)
            ->setBarcode($barcode)
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId)
            ->setServices($services);
    }
    /**
     * Get Sin value
     * @return int
     */
    public function getSin()
    {
        return $this->Sin;
    }
    /**
     * Set Sin value
     * @param int $sin
     * @return \Dpd\StructType\ShipmentDataExtendedBc
     */
    public function setSin($sin = null)
    {
        // validation for constraint: int
        if (!is_null($sin) && !(is_int($sin) || ctype_digit($sin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sin, true), gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;
        return $this;
    }
    /**
     * Get Barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param string $barcode
     * @return \Dpd\StructType\ShipmentDataExtendedBc
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;
        return $this;
    }
    /**
     * Get BarcodeSource value
     * @return string|null
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }
    /**
     * Set BarcodeSource value
     * @param string $barcodeSource
     * @return \Dpd\StructType\ShipmentDataExtendedBc
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: string
        if (!is_null($barcodeSource) && !is_string($barcodeSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeSource, true), gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
        return $this;
    }
    /**
     * Get BarcodeId value
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->BarcodeId;
    }
    /**
     * Set BarcodeId value
     * @param string $barcodeId
     * @return \Dpd\StructType\ShipmentDataExtendedBc
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (!is_null($barcodeId) && !is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;
        return $this;
    }
    /**
     * Get Services value
     * @return \Dpd\ArrayType\ArrayOfServiceEntry|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \Dpd\ArrayType\ArrayOfServiceEntry $services
     * @return \Dpd\StructType\ShipmentDataExtendedBc
     */
    public function setServices(\Dpd\ArrayType\ArrayOfServiceEntry $services = null)
    {
        $this->Services = $services;
        return $this;
    }
}
