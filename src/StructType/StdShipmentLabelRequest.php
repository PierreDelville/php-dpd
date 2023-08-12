<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StdShipmentLabelRequest StructType
 * @subpackage Structs
 */
class StdShipmentLabelRequest extends StdShipmentLabelBaseRequest
{
    /**
     * The bic3data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Bic3LabelData
     */
    public $bic3data;
    /**
     * The overrideShipperLabelAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $overrideShipperLabelAddress;
    /**
     * The refnrasbarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $refnrasbarcode;
    /**
     * The referenceInBarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReferenceInBarcode
     */
    public $referenceInBarcode;
    /**
     * Constructor method for StdShipmentLabelRequest
     * @uses StdShipmentLabelRequest::setBic3data()
     * @uses StdShipmentLabelRequest::setOverrideShipperLabelAddress()
     * @uses StdShipmentLabelRequest::setRefnrasbarcode()
     * @uses StdShipmentLabelRequest::setReferenceInBarcode()
     * @param \StructType\Bic3LabelData $bic3data
     * @param \StructType\Address $overrideShipperLabelAddress
     * @param bool $refnrasbarcode
     * @param \StructType\ReferenceInBarcode $referenceInBarcode
     */
    public function __construct(\StructType\Bic3LabelData $bic3data = null, \StructType\Address $overrideShipperLabelAddress = null, $refnrasbarcode = null, \StructType\ReferenceInBarcode $referenceInBarcode = null)
    {
        $this
            ->setBic3data($bic3data)
            ->setOverrideShipperLabelAddress($overrideShipperLabelAddress)
            ->setRefnrasbarcode($refnrasbarcode)
            ->setReferenceInBarcode($referenceInBarcode);
    }
    /**
     * Get bic3data value
     * @return \StructType\Bic3LabelData|null
     */
    public function getBic3data()
    {
        return $this->bic3data;
    }
    /**
     * Set bic3data value
     * @param \StructType\Bic3LabelData $bic3data
     * @return \StructType\StdShipmentLabelRequest
     */
    public function setBic3data(\StructType\Bic3LabelData $bic3data = null)
    {
        $this->bic3data = $bic3data;
        return $this;
    }
    /**
     * Get overrideShipperLabelAddress value
     * @return \StructType\Address|null
     */
    public function getOverrideShipperLabelAddress()
    {
        return $this->overrideShipperLabelAddress;
    }
    /**
     * Set overrideShipperLabelAddress value
     * @param \StructType\Address $overrideShipperLabelAddress
     * @return \StructType\StdShipmentLabelRequest
     */
    public function setOverrideShipperLabelAddress(\StructType\Address $overrideShipperLabelAddress = null)
    {
        $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;
        return $this;
    }
    /**
     * Get refnrasbarcode value
     * @return bool|null
     */
    public function getRefnrasbarcode()
    {
        return $this->refnrasbarcode;
    }
    /**
     * Set refnrasbarcode value
     * @param bool $refnrasbarcode
     * @return \StructType\StdShipmentLabelRequest
     */
    public function setRefnrasbarcode($refnrasbarcode = null)
    {
        // validation for constraint: boolean
        if (!is_null($refnrasbarcode) && !is_bool($refnrasbarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refnrasbarcode, true), gettype($refnrasbarcode)), __LINE__);
        }
        $this->refnrasbarcode = $refnrasbarcode;
        return $this;
    }
    /**
     * Get referenceInBarcode value
     * @return \StructType\ReferenceInBarcode|null
     */
    public function getReferenceInBarcode()
    {
        return $this->referenceInBarcode;
    }
    /**
     * Set referenceInBarcode value
     * @param \StructType\ReferenceInBarcode $referenceInBarcode
     * @return \StructType\StdShipmentLabelRequest
     */
    public function setReferenceInBarcode(\StructType\ReferenceInBarcode $referenceInBarcode = null)
    {
        $this->referenceInBarcode = $referenceInBarcode;
        return $this;
    }
}
