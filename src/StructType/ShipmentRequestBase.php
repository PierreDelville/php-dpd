<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRequestBase StructType
 * @subpackage Structs
 */
class ShipmentRequestBase extends AbstractStructBase
{
    /**
     * The customer_countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $customer_countrycode;
    /**
     * The customer_centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $customer_centernumber;
    /**
     * The customer_number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $customer_number;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $receiveraddress;
    /**
     * The receiverinfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\AddressInfo
     */
    public $receiverinfo;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $shipperaddress;
    /**
     * The retourAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $retourAddress;
    /**
     * The shippingdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $shippingdate;
    /**
     * Constructor method for ShipmentRequestBase
     * @uses ShipmentRequestBase::setCustomer_countrycode()
     * @uses ShipmentRequestBase::setCustomer_centernumber()
     * @uses ShipmentRequestBase::setCustomer_number()
     * @uses ShipmentRequestBase::setReceiveraddress()
     * @uses ShipmentRequestBase::setReceiverinfo()
     * @uses ShipmentRequestBase::setShipperaddress()
     * @uses ShipmentRequestBase::setRetourAddress()
     * @uses ShipmentRequestBase::setShippingdate()
     * @param int $customer_countrycode
     * @param int $customer_centernumber
     * @param int $customer_number
     * @param \Dpd\StructType\Address $receiveraddress
     * @param \Dpd\StructType\AddressInfo $receiverinfo
     * @param \Dpd\StructType\Address $shipperaddress
     * @param \Dpd\StructType\Address $retourAddress
     * @param string $shippingdate
     */
    public function __construct($customer_countrycode = null, $customer_centernumber = null, $customer_number = null, \Dpd\StructType\Address $receiveraddress = null, \Dpd\StructType\AddressInfo $receiverinfo = null, \Dpd\StructType\Address $shipperaddress = null, \Dpd\StructType\Address $retourAddress = null, $shippingdate = null)
    {
        $this
            ->setCustomer_countrycode($customer_countrycode)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomer_number($customer_number)
            ->setReceiveraddress($receiveraddress)
            ->setReceiverinfo($receiverinfo)
            ->setShipperaddress($shipperaddress)
            ->setRetourAddress($retourAddress)
            ->setShippingdate($shippingdate);
    }
    /**
     * Get customer_countrycode value
     * @return int
     */
    public function getCustomer_countrycode()
    {
        return $this->customer_countrycode;
    }
    /**
     * Set customer_countrycode value
     * @param int $customer_countrycode
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setCustomer_countrycode($customer_countrycode = null)
    {
        // validation for constraint: int
        if (!is_null($customer_countrycode) && !(is_int($customer_countrycode) || ctype_digit($customer_countrycode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_countrycode, true), gettype($customer_countrycode)), __LINE__);
        }
        $this->customer_countrycode = $customer_countrycode;
        return $this;
    }
    /**
     * Get customer_centernumber value
     * @return int
     */
    public function getCustomer_centernumber()
    {
        return $this->customer_centernumber;
    }
    /**
     * Set customer_centernumber value
     * @param int $customer_centernumber
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setCustomer_centernumber($customer_centernumber = null)
    {
        // validation for constraint: int
        if (!is_null($customer_centernumber) && !(is_int($customer_centernumber) || ctype_digit($customer_centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_centernumber, true), gettype($customer_centernumber)), __LINE__);
        }
        $this->customer_centernumber = $customer_centernumber;
        return $this;
    }
    /**
     * Get customer_number value
     * @return int
     */
    public function getCustomer_number()
    {
        return $this->customer_number;
    }
    /**
     * Set customer_number value
     * @param int $customer_number
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setCustomer_number($customer_number = null)
    {
        // validation for constraint: int
        if (!is_null($customer_number) && !(is_int($customer_number) || ctype_digit($customer_number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_number, true), gettype($customer_number)), __LINE__);
        }
        $this->customer_number = $customer_number;
        return $this;
    }
    /**
     * Get receiveraddress value
     * @return \Dpd\StructType\Address|null
     */
    public function getReceiveraddress()
    {
        return $this->receiveraddress;
    }
    /**
     * Set receiveraddress value
     * @param \Dpd\StructType\Address $receiveraddress
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setReceiveraddress(\Dpd\StructType\Address $receiveraddress = null)
    {
        $this->receiveraddress = $receiveraddress;
        return $this;
    }
    /**
     * Get receiverinfo value
     * @return \Dpd\StructType\AddressInfo|null
     */
    public function getReceiverinfo()
    {
        return $this->receiverinfo;
    }
    /**
     * Set receiverinfo value
     * @param \Dpd\StructType\AddressInfo $receiverinfo
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setReceiverinfo(\Dpd\StructType\AddressInfo $receiverinfo = null)
    {
        $this->receiverinfo = $receiverinfo;
        return $this;
    }
    /**
     * Get shipperaddress value
     * @return \Dpd\StructType\Address|null
     */
    public function getShipperaddress()
    {
        return $this->shipperaddress;
    }
    /**
     * Set shipperaddress value
     * @param \Dpd\StructType\Address $shipperaddress
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setShipperaddress(\Dpd\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
        return $this;
    }
    /**
     * Get retourAddress value
     * @return \Dpd\StructType\Address|null
     */
    public function getRetourAddress()
    {
        return $this->retourAddress;
    }
    /**
     * Set retourAddress value
     * @param \Dpd\StructType\Address $retourAddress
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setRetourAddress(\Dpd\StructType\Address $retourAddress = null)
    {
        $this->retourAddress = $retourAddress;
        return $this;
    }
    /**
     * Get shippingdate value
     * @return string|null
     */
    public function getShippingdate()
    {
        return $this->shippingdate;
    }
    /**
     * Set shippingdate value
     * @param string $shippingdate
     * @return \Dpd\StructType\ShipmentRequestBase
     */
    public function setShippingdate($shippingdate = null)
    {
        // validation for constraint: string
        if (!is_null($shippingdate) && !is_string($shippingdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingdate, true), gettype($shippingdate)), __LINE__);
        }
        $this->shippingdate = $shippingdate;
        return $this;
    }
}
