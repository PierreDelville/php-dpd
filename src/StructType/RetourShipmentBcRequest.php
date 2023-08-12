<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetourShipmentBcRequest StructType
 * @subpackage Structs
 */
class RetourShipmentBcRequest extends RetourShipmentBaseRequest
{
    /**
     * The originalBarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $originalBarcodeSource;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $customer;
    /**
     * The originalBarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $originalBarcode;
    /**
     * The originalBarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $originalBarcodeId;
    /**
     * Constructor method for RetourShipmentBcRequest
     * @uses RetourShipmentBcRequest::setOriginalBarcodeSource()
     * @uses RetourShipmentBcRequest::setCustomer()
     * @uses RetourShipmentBcRequest::setOriginalBarcode()
     * @uses RetourShipmentBcRequest::setOriginalBarcodeId()
     * @param int $originalBarcodeSource
     * @param \Dpd\StructType\Customer $customer
     * @param string $originalBarcode
     * @param string $originalBarcodeId
     */
    public function __construct($originalBarcodeSource = null, \Dpd\StructType\Customer $customer = null, $originalBarcode = null, $originalBarcodeId = null)
    {
        $this
            ->setOriginalBarcodeSource($originalBarcodeSource)
            ->setCustomer($customer)
            ->setOriginalBarcode($originalBarcode)
            ->setOriginalBarcodeId($originalBarcodeId);
    }
    /**
     * Get originalBarcodeSource value
     * @return int
     */
    public function getOriginalBarcodeSource()
    {
        return $this->originalBarcodeSource;
    }
    /**
     * Set originalBarcodeSource value
     * @param int $originalBarcodeSource
     * @return \Dpd\StructType\RetourShipmentBcRequest
     */
    public function setOriginalBarcodeSource($originalBarcodeSource = null)
    {
        // validation for constraint: int
        if (!is_null($originalBarcodeSource) && !(is_int($originalBarcodeSource) || ctype_digit($originalBarcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalBarcodeSource, true), gettype($originalBarcodeSource)), __LINE__);
        }
        $this->originalBarcodeSource = $originalBarcodeSource;
        return $this;
    }
    /**
     * Get customer value
     * @return \Dpd\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \Dpd\StructType\Customer $customer
     * @return \Dpd\StructType\RetourShipmentBcRequest
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * Get originalBarcode value
     * @return string|null
     */
    public function getOriginalBarcode()
    {
        return $this->originalBarcode;
    }
    /**
     * Set originalBarcode value
     * @param string $originalBarcode
     * @return \Dpd\StructType\RetourShipmentBcRequest
     */
    public function setOriginalBarcode($originalBarcode = null)
    {
        // validation for constraint: string
        if (!is_null($originalBarcode) && !is_string($originalBarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBarcode, true), gettype($originalBarcode)), __LINE__);
        }
        $this->originalBarcode = $originalBarcode;
        return $this;
    }
    /**
     * Get originalBarcodeId value
     * @return string|null
     */
    public function getOriginalBarcodeId()
    {
        return $this->originalBarcodeId;
    }
    /**
     * Set originalBarcodeId value
     * @param string $originalBarcodeId
     * @return \Dpd\StructType\RetourShipmentBcRequest
     */
    public function setOriginalBarcodeId($originalBarcodeId = null)
    {
        // validation for constraint: string
        if (!is_null($originalBarcodeId) && !is_string($originalBarcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBarcodeId, true), gettype($originalBarcodeId)), __LINE__);
        }
        $this->originalBarcodeId = $originalBarcodeId;
        return $this;
    }
}
