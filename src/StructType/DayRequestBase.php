<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DayRequestBase StructType
 * @subpackage Structs
 */
class DayRequestBase extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\AddressMini
     */
    public $address;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $date;
    /**
     * Constructor method for DayRequestBase
     * @uses DayRequestBase::setAddress()
     * @uses DayRequestBase::setDate()
     * @param \Dpd\StructType\AddressMini $address
     * @param string $date
     */
    public function __construct(\Dpd\StructType\AddressMini $address = null, $date = null)
    {
        $this
            ->setAddress($address)
            ->setDate($date);
    }
    /**
     * Get address value
     * @return \Dpd\StructType\AddressMini|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Dpd\StructType\AddressMini $address
     * @return \Dpd\StructType\DayRequestBase
     */
    public function setAddress(\Dpd\StructType\AddressMini $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Dpd\StructType\DayRequestBase
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
}
