<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BcIdentifier EnumType
 * @subpackage Enumerations
 */
class BcIdentifier extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Aztec'
     * @return string 'Aztec'
     */
    const VALUE_AZTEC = 'Aztec';
    /**
     * Constant for value 'Bic3'
     * @return string 'Bic3'
     */
    const VALUE_BIC_3 = 'Bic3';
    /**
     * Return allowed values
     * @uses self::VALUE_AZTEC
     * @uses self::VALUE_BIC_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_AZTEC,
            self::VALUE_BIC_3,
        );
    }
}
