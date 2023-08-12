<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StdShipmentLabelBaseRequest StructType
 * @subpackage Structs
 */
class StdShipmentLabelBaseRequest extends StdShipmentRequest
{
    /**
     * The customLabelText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $customLabelText;
    /**
     * The labelType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LabelType
     */
    public $labelType;
    /**
     * Constructor method for StdShipmentLabelBaseRequest
     * @uses StdShipmentLabelBaseRequest::setCustomLabelText()
     * @uses StdShipmentLabelBaseRequest::setLabelType()
     * @param string $customLabelText
     * @param \StructType\LabelType $labelType
     */
    public function __construct($customLabelText = null, \StructType\LabelType $labelType = null)
    {
        $this
            ->setCustomLabelText($customLabelText)
            ->setLabelType($labelType);
    }
    /**
     * Get customLabelText value
     * @return string|null
     */
    public function getCustomLabelText()
    {
        return $this->customLabelText;
    }
    /**
     * Set customLabelText value
     * @param string $customLabelText
     * @return \StructType\StdShipmentLabelBaseRequest
     */
    public function setCustomLabelText($customLabelText = null)
    {
        // validation for constraint: string
        if (!is_null($customLabelText) && !is_string($customLabelText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabelText, true), gettype($customLabelText)), __LINE__);
        }
        $this->customLabelText = $customLabelText;
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
     * @return \StructType\StdShipmentLabelBaseRequest
     */
    public function setLabelType(\StructType\LabelType $labelType = null)
    {
        $this->labelType = $labelType;
        return $this;
    }
}
