<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceInBarcode StructType
 * @subpackage Structs
 */
class ReferenceInBarcode extends AbstractStructBase
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
     * Constructor method for ReferenceInBarcode
     * @uses ReferenceInBarcode::setType()
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
     * @uses \Dpd\EnumType\EReferenceType::valueIsValid()
     * @uses \Dpd\EnumType\EReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Dpd\StructType\ReferenceInBarcode
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\EReferenceType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\EReferenceType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Dpd\EnumType\EReferenceType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
