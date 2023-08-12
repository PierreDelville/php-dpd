<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ServiceNoticeType EnumType
 * @subpackage Enumerations
 */
class ServiceNoticeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'pick'
     * @return string 'pick'
     */
    const VALUE_PICK = 'pick';
    /**
     * Constant for value 'dely'
     * @return string 'dely'
     */
    const VALUE_DELY = 'dely';
    /**
     * Return allowed values
     * @uses self::VALUE_PICK
     * @uses self::VALUE_DELY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PICK,
            self::VALUE_DELY,
        );
    }
}
