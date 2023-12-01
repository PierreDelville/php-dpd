<?php

namespace Dpd\EnumType;

use \Dpd\AbstractStructEnumBase;

/**
 * This class stands for ReferenceSearchMode EnumType
 * @subpackage Enumerations
 */
class ReferenceSearchMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Equals'
     * @return string 'Equals'
     */
    const VALUE_EQUALS = 'Equals';
    /**
     * Constant for value 'Like'
     * @return string 'Like'
     */
    const VALUE_LIKE = 'Like';
    /**
     * Return allowed values
     * @uses self::VALUE_EQUALS
     * @uses self::VALUE_LIKE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_EQUALS,
            self::VALUE_LIKE,
        );
    }
}
