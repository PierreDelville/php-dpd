<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeAnswersRequest StructType
 * @subpackage Structs
 */
class ServiceNoticeAnswersRequest extends AbstractStructBase
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
     * The language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * Constructor method for ServiceNoticeAnswersRequest
     * @uses ServiceNoticeAnswersRequest::setType()
     * @uses ServiceNoticeAnswersRequest::setLanguage()
     * @param string $type
     * @param string $language
     */
    public function __construct($type = null, $language = null)
    {
        $this
            ->setType($type)
            ->setLanguage($language);
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
     * @uses \Dpd\EnumType\ServiceNoticeType::valueIsValid()
     * @uses \Dpd\EnumType\ServiceNoticeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Dpd\StructType\ServiceNoticeAnswersRequest
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\ServiceNoticeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\ServiceNoticeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Dpd\EnumType\ServiceNoticeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Dpd\StructType\ServiceNoticeAnswersRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
}
