<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelDataPn StructType
 * @subpackage Structs
 */
class LabelDataPn extends LabelDataBase
{
    /**
     * The DutiableHint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DutiableHint;
    /**
     * The Hint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hint;
    /**
     * The Routingtext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Routingtext;
    /**
     * The Servicetext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Servicetext;
    /**
     * The ServiceMark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ServiceMark;
    /**
     * The ReceiverCenterLine
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceiverCenterLine;
    /**
     * Constructor method for LabelDataPn
     * @uses LabelDataPn::setDutiableHint()
     * @uses LabelDataPn::setHint()
     * @uses LabelDataPn::setRoutingtext()
     * @uses LabelDataPn::setServicetext()
     * @uses LabelDataPn::setServiceMark()
     * @uses LabelDataPn::setReceiverCenterLine()
     * @param string $dutiableHint
     * @param string $hint
     * @param string $routingtext
     * @param string $servicetext
     * @param string $serviceMark
     * @param string $receiverCenterLine
     */
    public function __construct($dutiableHint = null, $hint = null, $routingtext = null, $servicetext = null, $serviceMark = null, $receiverCenterLine = null)
    {
        $this
            ->setDutiableHint($dutiableHint)
            ->setHint($hint)
            ->setRoutingtext($routingtext)
            ->setServicetext($servicetext)
            ->setServiceMark($serviceMark)
            ->setReceiverCenterLine($receiverCenterLine);
    }
    /**
     * Get DutiableHint value
     * @return string|null
     */
    public function getDutiableHint()
    {
        return $this->DutiableHint;
    }
    /**
     * Set DutiableHint value
     * @param string $dutiableHint
     * @return \StructType\LabelDataPn
     */
    public function setDutiableHint($dutiableHint = null)
    {
        // validation for constraint: string
        if (!is_null($dutiableHint) && !is_string($dutiableHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dutiableHint, true), gettype($dutiableHint)), __LINE__);
        }
        $this->DutiableHint = $dutiableHint;
        return $this;
    }
    /**
     * Get Hint value
     * @return string|null
     */
    public function getHint()
    {
        return $this->Hint;
    }
    /**
     * Set Hint value
     * @param string $hint
     * @return \StructType\LabelDataPn
     */
    public function setHint($hint = null)
    {
        // validation for constraint: string
        if (!is_null($hint) && !is_string($hint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hint, true), gettype($hint)), __LINE__);
        }
        $this->Hint = $hint;
        return $this;
    }
    /**
     * Get Routingtext value
     * @return string|null
     */
    public function getRoutingtext()
    {
        return $this->Routingtext;
    }
    /**
     * Set Routingtext value
     * @param string $routingtext
     * @return \StructType\LabelDataPn
     */
    public function setRoutingtext($routingtext = null)
    {
        // validation for constraint: string
        if (!is_null($routingtext) && !is_string($routingtext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingtext, true), gettype($routingtext)), __LINE__);
        }
        $this->Routingtext = $routingtext;
        return $this;
    }
    /**
     * Get Servicetext value
     * @return string|null
     */
    public function getServicetext()
    {
        return $this->Servicetext;
    }
    /**
     * Set Servicetext value
     * @param string $servicetext
     * @return \StructType\LabelDataPn
     */
    public function setServicetext($servicetext = null)
    {
        // validation for constraint: string
        if (!is_null($servicetext) && !is_string($servicetext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($servicetext, true), gettype($servicetext)), __LINE__);
        }
        $this->Servicetext = $servicetext;
        return $this;
    }
    /**
     * Get ServiceMark value
     * @return string|null
     */
    public function getServiceMark()
    {
        return $this->ServiceMark;
    }
    /**
     * Set ServiceMark value
     * @param string $serviceMark
     * @return \StructType\LabelDataPn
     */
    public function setServiceMark($serviceMark = null)
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->ServiceMark = $serviceMark;
        return $this;
    }
    /**
     * Get ReceiverCenterLine value
     * @return string|null
     */
    public function getReceiverCenterLine()
    {
        return $this->ReceiverCenterLine;
    }
    /**
     * Set ReceiverCenterLine value
     * @param string $receiverCenterLine
     * @return \StructType\LabelDataPn
     */
    public function setReceiverCenterLine($receiverCenterLine = null)
    {
        // validation for constraint: string
        if (!is_null($receiverCenterLine) && !is_string($receiverCenterLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverCenterLine, true), gettype($receiverCenterLine)), __LINE__);
        }
        $this->ReceiverCenterLine = $receiverCenterLine;
        return $this;
    }
}
