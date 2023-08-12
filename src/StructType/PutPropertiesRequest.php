<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutPropertiesRequest StructType
 * @subpackage Structs
 */
class PutPropertiesRequest extends AbstractStructBase
{
    /**
     * The ShipperNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ShipperNumber;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $Customer;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HardwareId;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Options;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfPropertyEntry
     */
    public $Properties;
    /**
     * The Sum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sum;
    /**
     * Constructor method for PutPropertiesRequest
     * @uses PutPropertiesRequest::setShipperNumber()
     * @uses PutPropertiesRequest::setCustomer()
     * @uses PutPropertiesRequest::setHardwareId()
     * @uses PutPropertiesRequest::setOptions()
     * @uses PutPropertiesRequest::setProperties()
     * @uses PutPropertiesRequest::setSum()
     * @param int $shipperNumber
     * @param \Dpd\StructType\Customer $customer
     * @param string $hardwareId
     * @param string $options
     * @param \Dpd\ArrayType\ArrayOfPropertyEntry $properties
     * @param string $sum
     */
    public function __construct($shipperNumber = null, \Dpd\StructType\Customer $customer = null, $hardwareId = null, $options = null, \Dpd\ArrayType\ArrayOfPropertyEntry $properties = null, $sum = null)
    {
        $this
            ->setShipperNumber($shipperNumber)
            ->setCustomer($customer)
            ->setHardwareId($hardwareId)
            ->setOptions($options)
            ->setProperties($properties)
            ->setSum($sum);
    }
    /**
     * Get ShipperNumber value
     * @return int
     */
    public function getShipperNumber()
    {
        return $this->ShipperNumber;
    }
    /**
     * Set ShipperNumber value
     * @param int $shipperNumber
     * @return \Dpd\StructType\PutPropertiesRequest
     */
    public function setShipperNumber($shipperNumber = null)
    {
        // validation for constraint: int
        if (!is_null($shipperNumber) && !(is_int($shipperNumber) || ctype_digit($shipperNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperNumber, true), gettype($shipperNumber)), __LINE__);
        }
        $this->ShipperNumber = $shipperNumber;
        return $this;
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
     * @return \Dpd\StructType\PutPropertiesRequest
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
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
     * @return \Dpd\StructType\PutPropertiesRequest
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
     * Get Options value
     * @return string|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param string $options
     * @return \Dpd\StructType\PutPropertiesRequest
     */
    public function setOptions($options = null)
    {
        // validation for constraint: string
        if (!is_null($options) && !is_string($options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($options, true), gettype($options)), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Get Properties value
     * @return \Dpd\ArrayType\ArrayOfPropertyEntry|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Dpd\ArrayType\ArrayOfPropertyEntry $properties
     * @return \Dpd\StructType\PutPropertiesRequest
     */
    public function setProperties(\Dpd\ArrayType\ArrayOfPropertyEntry $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Get Sum value
     * @return string|null
     */
    public function getSum()
    {
        return $this->Sum;
    }
    /**
     * Set Sum value
     * @param string $sum
     * @return \Dpd\StructType\PutPropertiesRequest
     */
    public function setSum($sum = null)
    {
        // validation for constraint: string
        if (!is_null($sum) && !is_string($sum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sum, true), gettype($sum)), __LINE__);
        }
        $this->Sum = $sum;
        return $this;
    }
}
