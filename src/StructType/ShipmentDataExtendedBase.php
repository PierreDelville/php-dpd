<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDataExtendedBase StructType
 * @subpackage Structs
 */
class ShipmentDataExtendedBase extends AbstractStructBase
{
    /**
     * The shipperCenter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $shipperCenter;
    /**
     * The receiverCenter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $receiverCenter;
    /**
     * The receiverTourNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $receiverTourNumber;
    /**
     * The customer_centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $customer_centernumber;
    /**
     * The customernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $customernumber;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $weight;
    /**
     * The shipping_date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $shipping_date;
    /**
     * The referencenumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $referencenumber;
    /**
     * The reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference2;
    /**
     * The reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference3;
    /**
     * The reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference4;
    /**
     * The referenceInternational
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $referenceInternational;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $shipperaddress;
    /**
     * The customeraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $customeraddress;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Address
     */
    public $receiveraddress;
    /**
     * The receiver_contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Contact
     */
    public $receiver_contact;
    /**
     * The pickup_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pickup_remark;
    /**
     * The deliver_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $deliver_remark;
    /**
     * The receiverinfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\AddressInfo
     */
    public $receiverinfo;
    /**
     * The Dimension
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ParcelDimension
     */
    public $Dimension;
    /**
     * Constructor method for ShipmentDataExtendedBase
     * @uses ShipmentDataExtendedBase::setShipperCenter()
     * @uses ShipmentDataExtendedBase::setReceiverCenter()
     * @uses ShipmentDataExtendedBase::setReceiverTourNumber()
     * @uses ShipmentDataExtendedBase::setCustomer_centernumber()
     * @uses ShipmentDataExtendedBase::setCustomernumber()
     * @uses ShipmentDataExtendedBase::setWeight()
     * @uses ShipmentDataExtendedBase::setShipping_date()
     * @uses ShipmentDataExtendedBase::setReferencenumber()
     * @uses ShipmentDataExtendedBase::setReference2()
     * @uses ShipmentDataExtendedBase::setReference3()
     * @uses ShipmentDataExtendedBase::setReference4()
     * @uses ShipmentDataExtendedBase::setReferenceInternational()
     * @uses ShipmentDataExtendedBase::setShipperaddress()
     * @uses ShipmentDataExtendedBase::setCustomeraddress()
     * @uses ShipmentDataExtendedBase::setReceiveraddress()
     * @uses ShipmentDataExtendedBase::setReceiver_contact()
     * @uses ShipmentDataExtendedBase::setPickup_remark()
     * @uses ShipmentDataExtendedBase::setDeliver_remark()
     * @uses ShipmentDataExtendedBase::setReceiverinfo()
     * @uses ShipmentDataExtendedBase::setDimension()
     * @param int $shipperCenter
     * @param int $receiverCenter
     * @param int $receiverTourNumber
     * @param string $customer_centernumber
     * @param string $customernumber
     * @param string $weight
     * @param string $shipping_date
     * @param string $referencenumber
     * @param string $reference2
     * @param string $reference3
     * @param string $reference4
     * @param string $referenceInternational
     * @param \Dpd\StructType\Address $shipperaddress
     * @param \Dpd\StructType\Address $customeraddress
     * @param \Dpd\StructType\Address $receiveraddress
     * @param \Dpd\StructType\Contact $receiver_contact
     * @param string $pickup_remark
     * @param string $deliver_remark
     * @param \Dpd\StructType\AddressInfo $receiverinfo
     * @param \Dpd\StructType\ParcelDimension $dimension
     */
    public function __construct($shipperCenter = null, $receiverCenter = null, $receiverTourNumber = null, $customer_centernumber = null, $customernumber = null, $weight = null, $shipping_date = null, $referencenumber = null, $reference2 = null, $reference3 = null, $reference4 = null, $referenceInternational = null, \Dpd\StructType\Address $shipperaddress = null, \Dpd\StructType\Address $customeraddress = null, \Dpd\StructType\Address $receiveraddress = null, \Dpd\StructType\Contact $receiver_contact = null, $pickup_remark = null, $deliver_remark = null, \Dpd\StructType\AddressInfo $receiverinfo = null, \Dpd\StructType\ParcelDimension $dimension = null)
    {
        $this
            ->setShipperCenter($shipperCenter)
            ->setReceiverCenter($receiverCenter)
            ->setReceiverTourNumber($receiverTourNumber)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomernumber($customernumber)
            ->setWeight($weight)
            ->setShipping_date($shipping_date)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setReferenceInternational($referenceInternational)
            ->setShipperaddress($shipperaddress)
            ->setCustomeraddress($customeraddress)
            ->setReceiveraddress($receiveraddress)
            ->setReceiver_contact($receiver_contact)
            ->setPickup_remark($pickup_remark)
            ->setDeliver_remark($deliver_remark)
            ->setReceiverinfo($receiverinfo)
            ->setDimension($dimension);
    }
    /**
     * Get shipperCenter value
     * @return int
     */
    public function getShipperCenter()
    {
        return $this->shipperCenter;
    }
    /**
     * Set shipperCenter value
     * @param int $shipperCenter
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setShipperCenter($shipperCenter = null)
    {
        // validation for constraint: int
        if (!is_null($shipperCenter) && !(is_int($shipperCenter) || ctype_digit($shipperCenter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperCenter, true), gettype($shipperCenter)), __LINE__);
        }
        $this->shipperCenter = $shipperCenter;
        return $this;
    }
    /**
     * Get receiverCenter value
     * @return int
     */
    public function getReceiverCenter()
    {
        return $this->receiverCenter;
    }
    /**
     * Set receiverCenter value
     * @param int $receiverCenter
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReceiverCenter($receiverCenter = null)
    {
        // validation for constraint: int
        if (!is_null($receiverCenter) && !(is_int($receiverCenter) || ctype_digit($receiverCenter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverCenter, true), gettype($receiverCenter)), __LINE__);
        }
        $this->receiverCenter = $receiverCenter;
        return $this;
    }
    /**
     * Get receiverTourNumber value
     * @return int
     */
    public function getReceiverTourNumber()
    {
        return $this->receiverTourNumber;
    }
    /**
     * Set receiverTourNumber value
     * @param int $receiverTourNumber
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReceiverTourNumber($receiverTourNumber = null)
    {
        // validation for constraint: int
        if (!is_null($receiverTourNumber) && !(is_int($receiverTourNumber) || ctype_digit($receiverTourNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverTourNumber, true), gettype($receiverTourNumber)), __LINE__);
        }
        $this->receiverTourNumber = $receiverTourNumber;
        return $this;
    }
    /**
     * Get customer_centernumber value
     * @return string|null
     */
    public function getCustomer_centernumber()
    {
        return $this->customer_centernumber;
    }
    /**
     * Set customer_centernumber value
     * @param string $customer_centernumber
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setCustomer_centernumber($customer_centernumber = null)
    {
        // validation for constraint: string
        if (!is_null($customer_centernumber) && !is_string($customer_centernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_centernumber, true), gettype($customer_centernumber)), __LINE__);
        }
        $this->customer_centernumber = $customer_centernumber;
        return $this;
    }
    /**
     * Get customernumber value
     * @return string|null
     */
    public function getCustomernumber()
    {
        return $this->customernumber;
    }
    /**
     * Set customernumber value
     * @param string $customernumber
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setCustomernumber($customernumber = null)
    {
        // validation for constraint: string
        if (!is_null($customernumber) && !is_string($customernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customernumber, true), gettype($customernumber)), __LINE__);
        }
        $this->customernumber = $customernumber;
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get shipping_date value
     * @return string|null
     */
    public function getShipping_date()
    {
        return $this->shipping_date;
    }
    /**
     * Set shipping_date value
     * @param string $shipping_date
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setShipping_date($shipping_date = null)
    {
        // validation for constraint: string
        if (!is_null($shipping_date) && !is_string($shipping_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipping_date, true), gettype($shipping_date)), __LINE__);
        }
        $this->shipping_date = $shipping_date;
        return $this;
    }
    /**
     * Get referencenumber value
     * @return string|null
     */
    public function getReferencenumber()
    {
        return $this->referencenumber;
    }
    /**
     * Set referencenumber value
     * @param string $referencenumber
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReferencenumber($referencenumber = null)
    {
        // validation for constraint: string
        if (!is_null($referencenumber) && !is_string($referencenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencenumber, true), gettype($referencenumber)), __LINE__);
        }
        $this->referencenumber = $referencenumber;
        return $this;
    }
    /**
     * Get reference2 value
     * @return string|null
     */
    public function getReference2()
    {
        return $this->reference2;
    }
    /**
     * Set reference2 value
     * @param string $reference2
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReference2($reference2 = null)
    {
        // validation for constraint: string
        if (!is_null($reference2) && !is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), gettype($reference2)), __LINE__);
        }
        $this->reference2 = $reference2;
        return $this;
    }
    /**
     * Get reference3 value
     * @return string|null
     */
    public function getReference3()
    {
        return $this->reference3;
    }
    /**
     * Set reference3 value
     * @param string $reference3
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReference3($reference3 = null)
    {
        // validation for constraint: string
        if (!is_null($reference3) && !is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), gettype($reference3)), __LINE__);
        }
        $this->reference3 = $reference3;
        return $this;
    }
    /**
     * Get reference4 value
     * @return string|null
     */
    public function getReference4()
    {
        return $this->reference4;
    }
    /**
     * Set reference4 value
     * @param string $reference4
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReference4($reference4 = null)
    {
        // validation for constraint: string
        if (!is_null($reference4) && !is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), gettype($reference4)), __LINE__);
        }
        $this->reference4 = $reference4;
        return $this;
    }
    /**
     * Get referenceInternational value
     * @return string|null
     */
    public function getReferenceInternational()
    {
        return $this->referenceInternational;
    }
    /**
     * Set referenceInternational value
     * @param string $referenceInternational
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReferenceInternational($referenceInternational = null)
    {
        // validation for constraint: string
        if (!is_null($referenceInternational) && !is_string($referenceInternational)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceInternational, true), gettype($referenceInternational)), __LINE__);
        }
        $this->referenceInternational = $referenceInternational;
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
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setShipperaddress(\Dpd\StructType\Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
        return $this;
    }
    /**
     * Get customeraddress value
     * @return \Dpd\StructType\Address|null
     */
    public function getCustomeraddress()
    {
        return $this->customeraddress;
    }
    /**
     * Set customeraddress value
     * @param \Dpd\StructType\Address $customeraddress
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setCustomeraddress(\Dpd\StructType\Address $customeraddress = null)
    {
        $this->customeraddress = $customeraddress;
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
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReceiveraddress(\Dpd\StructType\Address $receiveraddress = null)
    {
        $this->receiveraddress = $receiveraddress;
        return $this;
    }
    /**
     * Get receiver_contact value
     * @return \Dpd\StructType\Contact|null
     */
    public function getReceiver_contact()
    {
        return $this->receiver_contact;
    }
    /**
     * Set receiver_contact value
     * @param \Dpd\StructType\Contact $receiver_contact
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReceiver_contact(\Dpd\StructType\Contact $receiver_contact = null)
    {
        $this->receiver_contact = $receiver_contact;
        return $this;
    }
    /**
     * Get pickup_remark value
     * @return string|null
     */
    public function getPickup_remark()
    {
        return $this->pickup_remark;
    }
    /**
     * Set pickup_remark value
     * @param string $pickup_remark
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setPickup_remark($pickup_remark = null)
    {
        // validation for constraint: string
        if (!is_null($pickup_remark) && !is_string($pickup_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickup_remark, true), gettype($pickup_remark)), __LINE__);
        }
        $this->pickup_remark = $pickup_remark;
        return $this;
    }
    /**
     * Get deliver_remark value
     * @return string|null
     */
    public function getDeliver_remark()
    {
        return $this->deliver_remark;
    }
    /**
     * Set deliver_remark value
     * @param string $deliver_remark
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setDeliver_remark($deliver_remark = null)
    {
        // validation for constraint: string
        if (!is_null($deliver_remark) && !is_string($deliver_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliver_remark, true), gettype($deliver_remark)), __LINE__);
        }
        $this->deliver_remark = $deliver_remark;
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
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setReceiverinfo(\Dpd\StructType\AddressInfo $receiverinfo = null)
    {
        $this->receiverinfo = $receiverinfo;
        return $this;
    }
    /**
     * Get Dimension value
     * @return \Dpd\StructType\ParcelDimension|null
     */
    public function getDimension()
    {
        return $this->Dimension;
    }
    /**
     * Set Dimension value
     * @param \Dpd\StructType\ParcelDimension $dimension
     * @return \Dpd\StructType\ShipmentDataExtendedBase
     */
    public function setDimension(\Dpd\StructType\ParcelDimension $dimension = null)
    {
        $this->Dimension = $dimension;
        return $this;
    }
}
