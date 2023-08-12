<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Consolidation StructType
 * @subpackage Structs
 */
class Consolidation extends DefaultService
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
     * Constructor method for Consolidation
     * @uses Consolidation::setType()
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
     * @uses \EnumType\EtypeConsolidation::valueIsValid()
     * @uses \EnumType\EtypeConsolidation::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Consolidation
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EtypeConsolidation::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EtypeConsolidation', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\EtypeConsolidation::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
