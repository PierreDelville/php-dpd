<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\LabelType
     */
    public $labelType;
    /**
     * Constructor method for StdShipmentLabelBaseRequest
     * @uses StdShipmentLabelBaseRequest::setCustomLabelText()
     * @uses StdShipmentLabelBaseRequest::setLabelType()
     * @param string $customLabelText
     * @param \Dpd\StructType\LabelType $labelType
     */
    public function __construct($customLabelText = null, \Dpd\StructType\LabelType $labelType = null)
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
     * @return \Dpd\StructType\StdShipmentLabelBaseRequest
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
     * @return \Dpd\StructType\LabelType|null
     */
    public function getLabelType()
    {
        return $this->labelType;
    }
    /**
     * Set labelType value
     * @param \Dpd\StructType\LabelType $labelType
     * @return \Dpd\StructType\StdShipmentLabelBaseRequest
     */
    public function setLabelType(\Dpd\StructType\LabelType $labelType = null)
    {
        $this->labelType = $labelType;
        return $this;
    }
}
