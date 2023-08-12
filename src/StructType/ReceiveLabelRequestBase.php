<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiveLabelRequestBase StructType
 * @subpackage Structs
 */
abstract class ReceiveLabelRequestBase extends AbstractStructBase
{
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
     * The bic3data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Bic3LabelData
     */
    public $bic3data;
    /**
     * The labelType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LabelType
     */
    public $labelType;
    /**
     * Constructor method for ReceiveLabelRequestBase
     * @uses ReceiveLabelRequestBase::setOverrideShipperLabelAddress()
     * @uses ReceiveLabelRequestBase::setRefnrasbarcode()
     * @uses ReceiveLabelRequestBase::setReferenceInBarcode()
     * @uses ReceiveLabelRequestBase::setBic3data()
     * @uses ReceiveLabelRequestBase::setLabelType()
     * @param \StructType\Address $overrideShipperLabelAddress
     * @param bool $refnrasbarcode
     * @param \StructType\ReferenceInBarcode $referenceInBarcode
     * @param \StructType\Bic3LabelData $bic3data
     * @param \StructType\LabelType $labelType
     */
    public function __construct(\StructType\Address $overrideShipperLabelAddress = null, $refnrasbarcode = null, \StructType\ReferenceInBarcode $referenceInBarcode = null, \StructType\Bic3LabelData $bic3data = null, \StructType\LabelType $labelType = null)
    {
        $this
            ->setOverrideShipperLabelAddress($overrideShipperLabelAddress)
            ->setRefnrasbarcode($refnrasbarcode)
            ->setReferenceInBarcode($referenceInBarcode)
            ->setBic3data($bic3data)
            ->setLabelType($labelType);
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
     * @return \StructType\ReceiveLabelRequestBase
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
     * @return \StructType\ReceiveLabelRequestBase
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
     * @return \StructType\ReceiveLabelRequestBase
     */
    public function setReferenceInBarcode(\StructType\ReferenceInBarcode $referenceInBarcode = null)
    {
        $this->referenceInBarcode = $referenceInBarcode;
        return $this;
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
     * @return \StructType\ReceiveLabelRequestBase
     */
    public function setBic3data(\StructType\Bic3LabelData $bic3data = null)
    {
        $this->bic3data = $bic3data;
        return $this;
    }
    /**
     * Get labelType value
     * @return \StructType\LabelType|null
     */
    public function getLabelType()
    {
        return $this->labelType;
    }
    /**
     * Set labelType value
     * @param \StructType\LabelType $labelType
     * @return \StructType\ReceiveLabelRequestBase
     */
    public function setLabelType(\StructType\LabelType $labelType = null)
    {
        $this->labelType = $labelType;
        return $this;
    }
}
