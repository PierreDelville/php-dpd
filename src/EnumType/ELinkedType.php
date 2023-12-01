<?php

namespace Dpd\EnumType;

use \Dpd\AbstractStructEnumBase;

/**
 * This class stands for eLinkedType EnumType
 * @subpackage Enumerations
 */
class ELinkedType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Consolidation'
     * @return string 'Consolidation'
     */
    const VALUE_CONSOLIDATION = 'Consolidation';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CONSOLIDATION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CONSOLIDATION,
        );
    }
}
