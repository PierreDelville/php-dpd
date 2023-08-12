<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rendezvous StructType
 * @subpackage Structs
 */
class Rendezvous extends AbstractStructBase
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
     * The From
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $From;
    /**
     * The To
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $To;
    /**
     * The PredictChoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PredictChoice;
    /**
     * Constructor method for Rendezvous
     * @uses Rendezvous::setType()
     * @uses Rendezvous::setFrom()
     * @uses Rendezvous::setTo()
     * @uses Rendezvous::setPredictChoice()
     * @param string $type
     * @param string $from
     * @param string $to
     * @param int $predictChoice
     */
    public function __construct($type = null, $from = null, $to = null, $predictChoice = null)
    {
        $this
            ->setType($type)
            ->setFrom($from)
            ->setTo($to)
            ->setPredictChoice($predictChoice);
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
     * @uses \EnumType\ERendezvousType::valueIsValid()
     * @uses \EnumType\ERendezvousType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Rendezvous
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ERendezvousType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ERendezvousType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ERendezvousType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get From value
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \StructType\Rendezvous
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->From = $from;
        return $this;
    }
    /**
     * Get To value
     * @return string
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param string $to
     * @return \StructType\Rendezvous
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->To = $to;
        return $this;
    }
    /**
     * Get PredictChoice value
     * @return int
     */
    public function getPredictChoice()
    {
        return $this->PredictChoice;
    }
    /**
     * Set PredictChoice value
     * @param int $predictChoice
     * @return \StructType\Rendezvous
     */
    public function setPredictChoice($predictChoice = null)
    {
        // validation for constraint: int
        if (!is_null($predictChoice) && !(is_int($predictChoice) || ctype_digit($predictChoice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($predictChoice, true), gettype($predictChoice)), __LINE__);
        }
        $this->PredictChoice = $predictChoice;
        return $this;
    }
}
