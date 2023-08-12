<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionsRequest StructType
 * @subpackage Structs
 */
class GetOptionsRequest extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $Customer;
    /**
     * The ProductType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductType;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HardwareId;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Group;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfString
     */
    public $Options;
    /**
     * Constructor method for GetOptionsRequest
     * @uses GetOptionsRequest::setCustomer()
     * @uses GetOptionsRequest::setProductType()
     * @uses GetOptionsRequest::setHardwareId()
     * @uses GetOptionsRequest::setGroup()
     * @uses GetOptionsRequest::setOptions()
     * @param \Dpd\StructType\Customer $customer
     * @param string $productType
     * @param string $hardwareId
     * @param string $group
     * @param \Dpd\ArrayType\ArrayOfString $options
     */
    public function __construct(\Dpd\StructType\Customer $customer = null, $productType = null, $hardwareId = null, $group = null, \Dpd\ArrayType\ArrayOfString $options = null)
    {
        $this
            ->setCustomer($customer)
            ->setProductType($productType)
            ->setHardwareId($hardwareId)
            ->setGroup($group)
            ->setOptions($options);
    }
    /**
     * Get Customer value
     * @return \Dpd\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Dpd\StructType\Customer $customer
     * @return \Dpd\StructType\GetOptionsRequest
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $productType
     * @return \Dpd\StructType\GetOptionsRequest
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->ProductType = $productType;
        return $this;
    }
    /**
     * Get HardwareId value
     * @return string|null
     */
    public function getHardwareId()
    {
        return $this->HardwareId;
    }
    /**
     * Set HardwareId value
     * @param string $hardwareId
     * @return \Dpd\StructType\GetOptionsRequest
     */
    public function setHardwareId($hardwareId = null)
    {
        // validation for constraint: string
        if (!is_null($hardwareId) && !is_string($hardwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareId, true), gettype($hardwareId)), __LINE__);
        }
        $this->HardwareId = $hardwareId;
        return $this;
    }
    /**
     * Get Group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param string $group
     * @return \Dpd\StructType\GetOptionsRequest
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->Group = $group;
        return $this;
    }
    /**
     * Get Options value
     * @return \Dpd\ArrayType\ArrayOfString|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Dpd\ArrayType\ArrayOfString $options
     * @return \Dpd\StructType\GetOptionsRequest
     */
    public function setOptions(\Dpd\ArrayType\ArrayOfString $options = null)
    {
        $this->Options = $options;
        return $this;
    }
}
