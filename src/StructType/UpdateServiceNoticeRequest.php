<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateServiceNoticeRequest StructType
 * @subpackage Structs
 */
class UpdateServiceNoticeRequest extends UpdateServiceNoticeRequestBase
{
    /**
     * The answerID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $answerID;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $text;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $address;
    /**
     * Constructor method for UpdateServiceNoticeRequest
     * @uses UpdateServiceNoticeRequest::setAnswerID()
     * @uses UpdateServiceNoticeRequest::setText()
     * @uses UpdateServiceNoticeRequest::setAddress()
     * @param int $answerID
     * @param string $text
     * @param \StructType\Address $address
     */
    public function __construct($answerID = null, $text = null, \StructType\Address $address = null)
    {
        $this
            ->setAnswerID($answerID)
            ->setText($text)
            ->setAddress($address);
    }
    /**
     * Get answerID value
     * @return int
     */
    public function getAnswerID()
    {
        return $this->answerID;
    }
    /**
     * Set answerID value
     * @param int $answerID
     * @return \StructType\UpdateServiceNoticeRequest
     */
    public function setAnswerID($answerID = null)
    {
        // validation for constraint: int
        if (!is_null($answerID) && !(is_int($answerID) || ctype_digit($answerID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($answerID, true), gettype($answerID)), __LINE__);
        }
        $this->answerID = $answerID;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \StructType\UpdateServiceNoticeRequest
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Get address value
     * @return \StructType\Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \StructType\Address $address
     * @return \StructType\UpdateServiceNoticeRequest
     */
    public function setAddress(\StructType\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }
}
