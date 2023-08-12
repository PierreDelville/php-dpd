<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateServiceNoticeRequestBase StructType
 * @subpackage Structs
 */
class UpdateServiceNoticeRequestBase extends AbstractStructBase
{
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeId;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeSource;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $customer;
    /**
     * Constructor method for UpdateServiceNoticeRequestBase
     * @uses UpdateServiceNoticeRequestBase::setBarcodeId()
     * @uses UpdateServiceNoticeRequestBase::setBarcodeSource()
     * @uses UpdateServiceNoticeRequestBase::setCustomer()
     * @param string $barcodeId
     * @param string $barcodeSource
     * @param \Dpd\StructType\Customer $customer
     */
    public function __construct($barcodeId = null, $barcodeSource = null, \Dpd\StructType\Customer $customer = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setBarcodeSource($barcodeSource)
            ->setCustomer($customer);
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
     * @return \Dpd\StructType\UpdateServiceNoticeRequestBase
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
     * @return \Dpd\StructType\UpdateServiceNoticeRequestBase
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
     * @return \Dpd\StructType\UpdateServiceNoticeRequestBase
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
}
