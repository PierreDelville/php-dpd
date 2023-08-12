<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelType StructType
 * @subpackage Structs
 */
class LabelType extends AbstractStructBase
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
     * Constructor method for LabelType
     * @uses LabelType::setType()
     * @param string $type
     */
    public function __construct($type = null)
    {
        $this
            ->setType($type);
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
     * @uses \EnumType\ELabelType::valueIsValid()
     * @uses \EnumType\ELabelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\LabelType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ELabelType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ELabelType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ELabelType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
