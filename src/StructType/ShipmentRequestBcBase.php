<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRequestBcBase StructType
 * @subpackage Structs
 */
class ShipmentRequestBcBase extends GetShipmentRequestBase
{
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $BarcodeSource;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Barcode;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeId;
    /**
     * Constructor method for ShipmentRequestBcBase
     * @uses ShipmentRequestBcBase::setBarcodeSource()
     * @uses ShipmentRequestBcBase::setBarcode()
     * @uses ShipmentRequestBcBase::setBarcodeId()
     * @param int $barcodeSource
     * @param string $barcode
     * @param string $barcodeId
     */
    public function __construct($barcodeSource = null, $barcode = null, $barcodeId = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setBarcode($barcode)
            ->setBarcodeId($barcodeId);
    }
    /**
     * Get BarcodeSource value
     * @return int
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }
    /**
     * Set BarcodeSource value
     * @param int $barcodeSource
     * @return \Dpd\StructType\ShipmentRequestBcBase
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: int
        if (!is_null($barcodeSource) && !(is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
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
     * @return \Dpd\StructType\ShipmentRequestBcBase
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
     * @return \Dpd\StructType\ShipmentRequestBcBase
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
}
