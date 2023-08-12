<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtraInsurance StructType
 * @subpackage Structs
 */
class ExtraInsurance extends DefaultService
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $type;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $value;
    /**
     * Constructor method for ExtraInsurance
     * @uses ExtraInsurance::setType()
     * @uses ExtraInsurance::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct($type = null, $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Dpd\EnumType\EtypeInsurance::valueIsValid()
     * @uses \Dpd\EnumType\EtypeInsurance::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Dpd\StructType\ExtraInsurance
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\EtypeInsurance::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\EtypeInsurance', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Dpd\EnumType\EtypeInsurance::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Dpd\StructType\ExtraInsurance
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
