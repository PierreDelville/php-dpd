<?php

namespace Dpd\EnumType;

use \Dpd\AbstractEnumStructBase;

/**
 * This class stands for eBic3Mode EnumType
 * @subpackage Enumerations
 */
class EBic3Mode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OnlyStdLabels'
     * @return string 'OnlyStdLabels'
     */
    const VALUE_ONLY_STD_LABELS = 'OnlyStdLabels';
    /**
     * Constant for value 'OnlyBic3'
     * @return string 'OnlyBic3'
     */
    const VALUE_ONLY_BIC_3 = 'OnlyBic3';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return allowed values
     * @uses self::VALUE_ONLY_STD_LABELS
     * @uses self::VALUE_ONLY_BIC_3
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_ONLY_STD_LABELS,
            self::VALUE_ONLY_BIC_3,
            self::VALUE_ALL,
        );
    }
}
