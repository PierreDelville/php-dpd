<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Bic3LabelData
     */
    public $bic3data;
    /**
     * The overrideShipperLabelAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
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
     * @var \Dpd\StructType\ReferenceInBarcode
     */
    public $referenceInBarcode;
    /**
     * Constructor method for StdShipmentLabelRequest
     * @uses StdShipmentLabelRequest::setBic3data()
     * @uses StdShipmentLabelRequest::setOverrideShipperLabelAddress()
     * @uses StdShipmentLabelRequest::setRefnrasbarcode()
     * @uses StdShipmentLabelRequest::setReferenceInBarcode()
     * @param \Dpd\StructType\Bic3LabelData $bic3data
     * @param \Dpd\StructType\Address $overrideShipperLabelAddress
     * @param bool $refnrasbarcode
     * @param \Dpd\StructType\ReferenceInBarcode $referenceInBarcode
     */
    public function __construct(\Dpd\StructType\Bic3LabelData $bic3data = null, \Dpd\StructType\Address $overrideShipperLabelAddress = null, $refnrasbarcode = null, \Dpd\StructType\ReferenceInBarcode $referenceInBarcode = null)
    {
        $this
            ->setBic3data($bic3data)
            ->setOverrideShipperLabelAddress($overrideShipperLabelAddress)
            ->setRefnrasbarcode($refnrasbarcode)
            ->setReferenceInBarcode($referenceInBarcode);
    }
    /**
     * Get bic3data value
     * @return \Dpd\StructType\Bic3LabelData|null
     */
    public function getBic3data()
    {
        return $this->bic3data;
    }
    /**
     * Set bic3data value
     * @param \Dpd\StructType\Bic3LabelData $bic3data
     * @return \Dpd\StructType\StdShipmentLabelRequest
     */
    public function setBic3data(\Dpd\StructType\Bic3LabelData $bic3data = null)
    {
        $this->bic3data = $bic3data;
        return $this;
    }
    /**
     * Get overrideShipperLabelAddress value
     * @return \Dpd\StructType\Address|null
     */
    public function getOverrideShipperLabelAddress()
    {
        return $this->overrideShipperLabelAddress;
    }
    /**
     * Set overrideShipperLabelAddress value
     * @param \Dpd\StructType\Address $overrideShipperLabelAddress
     * @return \Dpd\StructType\StdShipmentLabelRequest
     */
    public function setOverrideShipperLabelAddress(\Dpd\StructType\Address $overrideShipperLabelAddress = null)
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
     * @return \Dpd\StructType\StdShipmentLabelRequest
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
     * @return \Dpd\StructType\ReferenceInBarcode|null
     */
    public function getReferenceInBarcode()
    {
        return $this->referenceInBarcode;
    }
    /**
     * Set referenceInBarcode value
     * @param \Dpd\StructType\ReferenceInBarcode $referenceInBarcode
     * @return \Dpd\StructType\StdShipmentLabelRequest
     */
    public function setReferenceInBarcode(\Dpd\StructType\ReferenceInBarcode $referenceInBarcode = null)
    {
        $this->referenceInBarcode = $referenceInBarcode;
        return $this;
    }
}
