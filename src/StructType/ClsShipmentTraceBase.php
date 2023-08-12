<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clsShipmentTraceBase StructType
 * @subpackage Structs
 */
class ClsShipmentTraceBase extends AbstractStructBase
{
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Weight;
    /**
     * The IsB2C
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsB2C;
    /**
     * The IsRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsRetour;
    /**
     * The CustomerCenternumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CustomerCenternumber;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CustomerNumber;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BarcodeSource;
    /**
     * The ReceiverDepotNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ReceiverDepotNumber;
    /**
     * The ReceiverTourNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ReceiverTourNumber;
    /**
     * The DeliveryRecordNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $DeliveryRecordNumber;
    /**
     * The DeliveryRecordPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $DeliveryRecordPosition;
    /**
     * The ShipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentNumber;
    /**
     * The DestinationCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountry;
    /**
     * The DestinationZipcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DestinationZipcode;
    /**
     * The ShippingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingDate;
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The Receiver
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Receiver;
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference;
    /**
     * The Reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference2;
    /**
     * The Reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference3;
    /**
     * The Reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference4;
    /**
     * The DeliveryScheduled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\SdgiData
     */
    public $DeliveryScheduled;
    /**
     * The Traces
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfClsTrace
     */
    public $Traces;
    /**
     * The Reference_International
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reference_International;
    /**
     * The PointRelaisName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PointRelaisName;
    /**
     * The PointRelaisLink
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PointRelaisLink;
    /**
     * The ShipmentNumber_Retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentNumber_Retour;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeId;
    /**
     * Constructor method for clsShipmentTraceBase
     * @uses ClsShipmentTraceBase::setWeight()
     * @uses ClsShipmentTraceBase::setIsB2C()
     * @uses ClsShipmentTraceBase::setIsRetour()
     * @uses ClsShipmentTraceBase::setCustomerCenternumber()
     * @uses ClsShipmentTraceBase::setCustomerNumber()
     * @uses ClsShipmentTraceBase::setBarcodeSource()
     * @uses ClsShipmentTraceBase::setReceiverDepotNumber()
     * @uses ClsShipmentTraceBase::setReceiverTourNumber()
     * @uses ClsShipmentTraceBase::setDeliveryRecordNumber()
     * @uses ClsShipmentTraceBase::setDeliveryRecordPosition()
     * @uses ClsShipmentTraceBase::setShipmentNumber()
     * @uses ClsShipmentTraceBase::setDestinationCountry()
     * @uses ClsShipmentTraceBase::setDestinationZipcode()
     * @uses ClsShipmentTraceBase::setShippingDate()
     * @uses ClsShipmentTraceBase::setDeliveryDate()
     * @uses ClsShipmentTraceBase::setReceiver()
     * @uses ClsShipmentTraceBase::setReference()
     * @uses ClsShipmentTraceBase::setReference2()
     * @uses ClsShipmentTraceBase::setReference3()
     * @uses ClsShipmentTraceBase::setReference4()
     * @uses ClsShipmentTraceBase::setDeliveryScheduled()
     * @uses ClsShipmentTraceBase::setTraces()
     * @uses ClsShipmentTraceBase::setReference_International()
     * @uses ClsShipmentTraceBase::setPointRelaisName()
     * @uses ClsShipmentTraceBase::setPointRelaisLink()
     * @uses ClsShipmentTraceBase::setShipmentNumber_Retour()
     * @uses ClsShipmentTraceBase::setBarcodeId()
     * @param float $weight
     * @param bool $isB2C
     * @param bool $isRetour
     * @param int $customerCenternumber
     * @param int $customerNumber
     * @param int $barcodeSource
     * @param int $receiverDepotNumber
     * @param int $receiverTourNumber
     * @param int $deliveryRecordNumber
     * @param int $deliveryRecordPosition
     * @param string $shipmentNumber
     * @param string $destinationCountry
     * @param string $destinationZipcode
     * @param string $shippingDate
     * @param string $deliveryDate
     * @param string $receiver
     * @param string $reference
     * @param string $reference2
     * @param string $reference3
     * @param string $reference4
     * @param \Dpd\StructType\SdgiData $deliveryScheduled
     * @param \Dpd\ArrayType\ArrayOfClsTrace $traces
     * @param string $reference_International
     * @param string $pointRelaisName
     * @param string $pointRelaisLink
     * @param string $shipmentNumber_Retour
     * @param string $barcodeId
     */
    public function __construct($weight = null, $isB2C = null, $isRetour = null, $customerCenternumber = null, $customerNumber = null, $barcodeSource = null, $receiverDepotNumber = null, $receiverTourNumber = null, $deliveryRecordNumber = null, $deliveryRecordPosition = null, $shipmentNumber = null, $destinationCountry = null, $destinationZipcode = null, $shippingDate = null, $deliveryDate = null, $receiver = null, $reference = null, $reference2 = null, $reference3 = null, $reference4 = null, \Dpd\StructType\SdgiData $deliveryScheduled = null, \Dpd\ArrayType\ArrayOfClsTrace $traces = null, $reference_International = null, $pointRelaisName = null, $pointRelaisLink = null, $shipmentNumber_Retour = null, $barcodeId = null)
    {
        $this
            ->setWeight($weight)
            ->setIsB2C($isB2C)
            ->setIsRetour($isRetour)
            ->setCustomerCenternumber($customerCenternumber)
            ->setCustomerNumber($customerNumber)
            ->setBarcodeSource($barcodeSource)
            ->setReceiverDepotNumber($receiverDepotNumber)
            ->setReceiverTourNumber($receiverTourNumber)
            ->setDeliveryRecordNumber($deliveryRecordNumber)
            ->setDeliveryRecordPosition($deliveryRecordPosition)
            ->setShipmentNumber($shipmentNumber)
            ->setDestinationCountry($destinationCountry)
            ->setDestinationZipcode($destinationZipcode)
            ->setShippingDate($shippingDate)
            ->setDeliveryDate($deliveryDate)
            ->setReceiver($receiver)
            ->setReference($reference)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setDeliveryScheduled($deliveryScheduled)
            ->setTraces($traces)
            ->setReference_International($reference_International)
            ->setPointRelaisName($pointRelaisName)
            ->setPointRelaisLink($pointRelaisLink)
            ->setShipmentNumber_Retour($shipmentNumber_Retour)
            ->setBarcodeId($barcodeId);
    }
    /**
     * Get Weight value
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param float $weight
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get IsB2C value
     * @return bool
     */
    public function getIsB2C()
    {
        return $this->IsB2C;
    }
    /**
     * Set IsB2C value
     * @param bool $isB2C
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setIsB2C($isB2C = null)
    {
        // validation for constraint: boolean
        if (!is_null($isB2C) && !is_bool($isB2C)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isB2C, true), gettype($isB2C)), __LINE__);
        }
        $this->IsB2C = $isB2C;
        return $this;
    }
    /**
     * Get IsRetour value
     * @return bool
     */
    public function getIsRetour()
    {
        return $this->IsRetour;
    }
    /**
     * Set IsRetour value
     * @param bool $isRetour
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setIsRetour($isRetour = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRetour) && !is_bool($isRetour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRetour, true), gettype($isRetour)), __LINE__);
        }
        $this->IsRetour = $isRetour;
        return $this;
    }
    /**
     * Get CustomerCenternumber value
     * @return int
     */
    public function getCustomerCenternumber()
    {
        return $this->CustomerCenternumber;
    }
    /**
     * Set CustomerCenternumber value
     * @param int $customerCenternumber
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setCustomerCenternumber($customerCenternumber = null)
    {
        // validation for constraint: int
        if (!is_null($customerCenternumber) && !(is_int($customerCenternumber) || ctype_digit($customerCenternumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerCenternumber, true), gettype($customerCenternumber)), __LINE__);
        }
        $this->CustomerCenternumber = $customerCenternumber;
        return $this;
    }
    /**
     * Get CustomerNumber value
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }
    /**
     * Set CustomerNumber value
     * @param int $customerNumber
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setCustomerNumber($customerNumber = null)
    {
        // validation for constraint: int
        if (!is_null($customerNumber) && !(is_int($customerNumber) || ctype_digit($customerNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        $this->CustomerNumber = $customerNumber;
        return $this;
    }
    /**
     * Get BarcodeSource value
     * @return int
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }
    /**
     * Set BarcodeSource value
     * @param int $barcodeSource
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: int
        if (!is_null($barcodeSource) && !(is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
        return $this;
    }
    /**
     * Get ReceiverDepotNumber value
     * @return int
     */
    public function getReceiverDepotNumber()
    {
        return $this->ReceiverDepotNumber;
    }
    /**
     * Set ReceiverDepotNumber value
     * @param int $receiverDepotNumber
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReceiverDepotNumber($receiverDepotNumber = null)
    {
        // validation for constraint: int
        if (!is_null($receiverDepotNumber) && !(is_int($receiverDepotNumber) || ctype_digit($receiverDepotNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverDepotNumber, true), gettype($receiverDepotNumber)), __LINE__);
        }
        $this->ReceiverDepotNumber = $receiverDepotNumber;
        return $this;
    }
    /**
     * Get ReceiverTourNumber value
     * @return int
     */
    public function getReceiverTourNumber()
    {
        return $this->ReceiverTourNumber;
    }
    /**
     * Set ReceiverTourNumber value
     * @param int $receiverTourNumber
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReceiverTourNumber($receiverTourNumber = null)
    {
        // validation for constraint: int
        if (!is_null($receiverTourNumber) && !(is_int($receiverTourNumber) || ctype_digit($receiverTourNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverTourNumber, true), gettype($receiverTourNumber)), __LINE__);
        }
        $this->ReceiverTourNumber = $receiverTourNumber;
        return $this;
    }
    /**
     * Get DeliveryRecordNumber value
     * @return int
     */
    public function getDeliveryRecordNumber()
    {
        return $this->DeliveryRecordNumber;
    }
    /**
     * Set DeliveryRecordNumber value
     * @param int $deliveryRecordNumber
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setDeliveryRecordNumber($deliveryRecordNumber = null)
    {
        // validation for constraint: int
        if (!is_null($deliveryRecordNumber) && !(is_int($deliveryRecordNumber) || ctype_digit($deliveryRecordNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryRecordNumber, true), gettype($deliveryRecordNumber)), __LINE__);
        }
        $this->DeliveryRecordNumber = $deliveryRecordNumber;
        return $this;
    }
    /**
     * Get DeliveryRecordPosition value
     * @return int
     */
    public function getDeliveryRecordPosition()
    {
        return $this->DeliveryRecordPosition;
    }
    /**
     * Set DeliveryRecordPosition value
     * @param int $deliveryRecordPosition
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setDeliveryRecordPosition($deliveryRecordPosition = null)
    {
        // validation for constraint: int
        if (!is_null($deliveryRecordPosition) && !(is_int($deliveryRecordPosition) || ctype_digit($deliveryRecordPosition))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryRecordPosition, true), gettype($deliveryRecordPosition)), __LINE__);
        }
        $this->DeliveryRecordPosition = $deliveryRecordPosition;
        return $this;
    }
    /**
     * Get ShipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->ShipmentNumber;
    }
    /**
     * Set ShipmentNumber value
     * @param string $shipmentNumber
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), gettype($shipmentNumber)), __LINE__);
        }
        $this->ShipmentNumber = $shipmentNumber;
        return $this;
    }
    /**
     * Get DestinationCountry value
     * @return string|null
     */
    public function getDestinationCountry()
    {
        return $this->DestinationCountry;
    }
    /**
     * Set DestinationCountry value
     * @param string $destinationCountry
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setDestinationCountry($destinationCountry = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountry) && !is_string($destinationCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCountry, true), gettype($destinationCountry)), __LINE__);
        }
        $this->DestinationCountry = $destinationCountry;
        return $this;
    }
    /**
     * Get DestinationZipcode value
     * @return string|null
     */
    public function getDestinationZipcode()
    {
        return $this->DestinationZipcode;
    }
    /**
     * Set DestinationZipcode value
     * @param string $destinationZipcode
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setDestinationZipcode($destinationZipcode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationZipcode) && !is_string($destinationZipcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationZipcode, true), gettype($destinationZipcode)), __LINE__);
        }
        $this->DestinationZipcode = $destinationZipcode;
        return $this;
    }
    /**
     * Get ShippingDate value
     * @return string|null
     */
    public function getShippingDate()
    {
        return $this->ShippingDate;
    }
    /**
     * Set ShippingDate value
     * @param string $shippingDate
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setShippingDate($shippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->ShippingDate = $shippingDate;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get Receiver value
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }
    /**
     * Set Receiver value
     * @param string $receiver
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReceiver($receiver = null)
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver, true), gettype($receiver)), __LINE__);
        }
        $this->Receiver = $receiver;
        return $this;
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param string $reference
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get Reference2 value
     * @return string|null
     */
    public function getReference2()
    {
        return $this->Reference2;
    }
    /**
     * Set Reference2 value
     * @param string $reference2
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReference2($reference2 = null)
    {
        // validation for constraint: string
        if (!is_null($reference2) && !is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), gettype($reference2)), __LINE__);
        }
        $this->Reference2 = $reference2;
        return $this;
    }
    /**
     * Get Reference3 value
     * @return string|null
     */
    public function getReference3()
    {
        return $this->Reference3;
    }
    /**
     * Set Reference3 value
     * @param string $reference3
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReference3($reference3 = null)
    {
        // validation for constraint: string
        if (!is_null($reference3) && !is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), gettype($reference3)), __LINE__);
        }
        $this->Reference3 = $reference3;
        return $this;
    }
    /**
     * Get Reference4 value
     * @return string|null
     */
    public function getReference4()
    {
        return $this->Reference4;
    }
    /**
     * Set Reference4 value
     * @param string $reference4
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReference4($reference4 = null)
    {
        // validation for constraint: string
        if (!is_null($reference4) && !is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), gettype($reference4)), __LINE__);
        }
        $this->Reference4 = $reference4;
        return $this;
    }
    /**
     * Get DeliveryScheduled value
     * @return \Dpd\StructType\SdgiData|null
     */
    public function getDeliveryScheduled()
    {
        return $this->DeliveryScheduled;
    }
    /**
     * Set DeliveryScheduled value
     * @param \Dpd\StructType\SdgiData $deliveryScheduled
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setDeliveryScheduled(\Dpd\StructType\SdgiData $deliveryScheduled = null)
    {
        $this->DeliveryScheduled = $deliveryScheduled;
        return $this;
    }
    /**
     * Get Traces value
     * @return \Dpd\ArrayType\ArrayOfClsTrace|null
     */
    public function getTraces()
    {
        return $this->Traces;
    }
    /**
     * Set Traces value
     * @param \Dpd\ArrayType\ArrayOfClsTrace $traces
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setTraces(\Dpd\ArrayType\ArrayOfClsTrace $traces = null)
    {
        $this->Traces = $traces;
        return $this;
    }
    /**
     * Get Reference_International value
     * @return string|null
     */
    public function getReference_International()
    {
        return $this->Reference_International;
    }
    /**
     * Set Reference_International value
     * @param string $reference_International
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setReference_International($reference_International = null)
    {
        // validation for constraint: string
        if (!is_null($reference_International) && !is_string($reference_International)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_International, true), gettype($reference_International)), __LINE__);
        }
        $this->Reference_International = $reference_International;
        return $this;
    }
    /**
     * Get PointRelaisName value
     * @return string|null
     */
    public function getPointRelaisName()
    {
        return $this->PointRelaisName;
    }
    /**
     * Set PointRelaisName value
     * @param string $pointRelaisName
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setPointRelaisName($pointRelaisName = null)
    {
        // validation for constraint: string
        if (!is_null($pointRelaisName) && !is_string($pointRelaisName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pointRelaisName, true), gettype($pointRelaisName)), __LINE__);
        }
        $this->PointRelaisName = $pointRelaisName;
        return $this;
    }
    /**
     * Get PointRelaisLink value
     * @return string|null
     */
    public function getPointRelaisLink()
    {
        return $this->PointRelaisLink;
    }
    /**
     * Set PointRelaisLink value
     * @param string $pointRelaisLink
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setPointRelaisLink($pointRelaisLink = null)
    {
        // validation for constraint: string
        if (!is_null($pointRelaisLink) && !is_string($pointRelaisLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pointRelaisLink, true), gettype($pointRelaisLink)), __LINE__);
        }
        $this->PointRelaisLink = $pointRelaisLink;
        return $this;
    }
    /**
     * Get ShipmentNumber_Retour value
     * @return string|null
     */
    public function getShipmentNumber_Retour()
    {
        return $this->ShipmentNumber_Retour;
    }
    /**
     * Set ShipmentNumber_Retour value
     * @param string $shipmentNumber_Retour
     * @return \Dpd\StructType\ClsShipmentTraceBase
     */
    public function setShipmentNumber_Retour($shipmentNumber_Retour = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber_Retour) && !is_string($shipmentNumber_Retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber_Retour, true), gettype($shipmentNumber_Retour)), __LINE__);
        }
        $this->ShipmentNumber_Retour = $shipmentNumber_Retour;
        return $this;
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
     * @return \Dpd\StructType\ClsShipmentTraceBase
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
}
