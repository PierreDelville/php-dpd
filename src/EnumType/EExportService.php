<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eExportService EnumType
 * @subpackage Enumerations
 */
class EExportService extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CheckCountry'
     * @return string 'CheckCountry'
     */
    const VALUE_CHECK_COUNTRY = 'CheckCountry';
    /**
     * Constant for value 'OnlyNational'
     * @return string 'OnlyNational'
     */
    const VALUE_ONLY_NATIONAL = 'OnlyNational';
    /**
     * Return allowed values
     * @uses self::VALUE_CHECK_COUNTRY
     * @uses self::VALUE_ONLY_NATIONAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECK_COUNTRY,
            self::VALUE_ONLY_NATIONAL,
        );
    }
}
