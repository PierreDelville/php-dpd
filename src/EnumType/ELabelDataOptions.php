<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eLabelDataOptions EnumType
 * @subpackage Enumerations
 */
class ELabelDataOptions extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Images'
     * @return string 'Images'
     */
    const VALUE_IMAGES = 'Images';
    /**
     * Return allowed values
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_IMAGES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_IMAGES,
        );
    }
}
