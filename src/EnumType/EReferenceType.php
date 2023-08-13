<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eReferenceType EnumType
 * @subpackage Enumerations
 */
class EReferenceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Referencenumber'
     * @return string 'Referencenumber'
     */
    const VALUE_REFERENCENUMBER = 'Referencenumber';
    /**
     * Constant for value 'Reference2'
     * @return string 'Reference2'
     */
    const VALUE_REFERENCE_2 = 'Reference2';
    /**
     * Constant for value 'Reference3'
     * @return string 'Reference3'
     */
    const VALUE_REFERENCE_3 = 'Reference3';
    /**
     * Constant for value 'Reference4'
     * @return string 'Reference4'
     */
    const VALUE_REFERENCE_4 = 'Reference4';
    /**
     * Return allowed values
     * @uses self::VALUE_REFERENCENUMBER
     * @uses self::VALUE_REFERENCE_2
     * @uses self::VALUE_REFERENCE_3
     * @uses self::VALUE_REFERENCE_4
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_REFERENCENUMBER,
            self::VALUE_REFERENCE_2,
            self::VALUE_REFERENCE_3,
            self::VALUE_REFERENCE_4,
        );
    }
}
