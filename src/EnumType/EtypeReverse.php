<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for etypeReverse EnumType
 * @subpackage Enumerations
 */
class EtypeReverse extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OnDemand'
     * @return string 'OnDemand'
     */
    const VALUE_ON_DEMAND = 'OnDemand';
    /**
     * Constant for value 'Prepared'
     * @return string 'Prepared'
     */
    const VALUE_PREPARED = 'Prepared';
    /**
     * Return allowed values
     * @uses self::VALUE_ON_DEMAND
     * @uses self::VALUE_PREPARED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_ON_DEMAND,
            self::VALUE_PREPARED,
        );
    }
}
