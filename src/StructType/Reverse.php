<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reverse StructType
 * @subpackage Structs
 */
class Reverse extends DefaultService
{
    /**
     * The expireOffset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $expireOffset;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $type;
    /**
     * The retour_receiver
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $retour_receiver;
    /**
     * Constructor method for Reverse
     * @uses Reverse::setExpireOffset()
     * @uses Reverse::setType()
     * @uses Reverse::setRetour_receiver()
     * @param int $expireOffset
     * @param string $type
     * @param \StructType\Address $retour_receiver
     */
    public function __construct($expireOffset = null, $type = null, \StructType\Address $retour_receiver = null)
    {
        $this
            ->setExpireOffset($expireOffset)
            ->setType($type)
            ->setRetour_receiver($retour_receiver);
    }
    /**
     * Get expireOffset value
     * @return int
     */
    public function getExpireOffset()
    {
        return $this->expireOffset;
    }
    /**
     * Set expireOffset value
     * @param int $expireOffset
     * @return \StructType\Reverse
     */
    public function setExpireOffset($expireOffset = null)
    {
        // validation for constraint: int
        if (!is_null($expireOffset) && !(is_int($expireOffset) || ctype_digit($expireOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expireOffset, true), gettype($expireOffset)), __LINE__);
        }
        $this->expireOffset = $expireOffset;
        return $this;
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
     * @uses \EnumType\EtypeReverse::valueIsValid()
     * @uses \EnumType\EtypeReverse::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Reverse
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EtypeReverse::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EtypeReverse', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EtypeReverse::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get retour_receiver value
     * @return \StructType\Address|null
     */
    public function getRetour_receiver()
    {
        return $this->retour_receiver;
    }
    /**
     * Set retour_receiver value
     * @param \StructType\Address $retour_receiver
     * @return \StructType\Reverse
     */
    public function setRetour_receiver(\StructType\Address $retour_receiver = null)
    {
        $this->retour_receiver = $retour_receiver;
        return $this;
    }
}
