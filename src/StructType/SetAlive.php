<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setAlive StructType
 * @subpackage Structs
 */
class SetAlive extends AbstractStructBase
{
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $value;
    /**
     * Constructor method for setAlive
     * @uses SetAlive::setValue()
     * @param bool $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get value value
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param bool $value
     * @return \StructType\SetAlive
     */
    public function setValue($value = null)
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
