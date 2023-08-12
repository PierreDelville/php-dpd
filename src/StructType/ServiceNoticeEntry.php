<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeEntry StructType
 * @subpackage Structs
 */
class ServiceNoticeEntry extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
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
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $Customer;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfReason
     */
    public $Reason;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Weight;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Info;
    /**
     * The Counterquestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Counterquestion;
    /**
     * Constructor method for ServiceNoticeEntry
     * @uses ServiceNoticeEntry::setType()
     * @uses ServiceNoticeEntry::setBarcodeId()
     * @uses ServiceNoticeEntry::setBarcodeSource()
     * @uses ServiceNoticeEntry::setCustomer()
     * @uses ServiceNoticeEntry::setReason()
     * @uses ServiceNoticeEntry::setDate()
     * @uses ServiceNoticeEntry::setStatus()
     * @uses ServiceNoticeEntry::setWeight()
     * @uses ServiceNoticeEntry::setInfo()
     * @uses ServiceNoticeEntry::setCounterquestion()
     * @param string $type
     * @param string $barcodeId
     * @param string $barcodeSource
     * @param \Dpd\StructType\Customer $customer
     * @param \Dpd\ArrayType\ArrayOfReason $reason
     * @param string $date
     * @param string $status
     * @param string $weight
     * @param string $info
     * @param string $counterquestion
     */
    public function __construct($type = null, $barcodeId = null, $barcodeSource = null, \Dpd\StructType\Customer $customer = null, \Dpd\ArrayType\ArrayOfReason $reason = null, $date = null, $status = null, $weight = null, $info = null, $counterquestion = null)
    {
        $this
            ->setType($type)
            ->setBarcodeId($barcodeId)
            ->setBarcodeSource($barcodeSource)
            ->setCustomer($customer)
            ->setReason($reason)
            ->setDate($date)
            ->setStatus($status)
            ->setWeight($weight)
            ->setInfo($info)
            ->setCounterquestion($counterquestion);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Dpd\EnumType\ServiceNoticeType::valueIsValid()
     * @uses \Dpd\EnumType\ServiceNoticeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\ServiceNoticeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\ServiceNoticeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Dpd\EnumType\ServiceNoticeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Dpd\StructType\ServiceNoticeEntry
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
     * @return \Dpd\StructType\ServiceNoticeEntry
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
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Reason value
     * @return \Dpd\ArrayType\ArrayOfReason|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param \Dpd\ArrayType\ArrayOfReason $reason
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setReason(\Dpd\ArrayType\ArrayOfReason $reason = null)
    {
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param string $weight
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Info value
     * @return string|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param string $info
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setInfo($info = null)
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        $this->Info = $info;
        return $this;
    }
    /**
     * Get Counterquestion value
     * @return string|null
     */
    public function getCounterquestion()
    {
        return $this->Counterquestion;
    }
    /**
     * Set Counterquestion value
     * @param string $counterquestion
     * @return \Dpd\StructType\ServiceNoticeEntry
     */
    public function setCounterquestion($counterquestion = null)
    {
        // validation for constraint: string
        if (!is_null($counterquestion) && !is_string($counterquestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($counterquestion, true), gettype($counterquestion)), __LINE__);
        }
        $this->Counterquestion = $counterquestion;
        return $this;
    }
}
