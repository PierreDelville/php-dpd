<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for etypeInsurance EnumType
 * @subpackage Enumerations
 */
class EtypeInsurance extends AbstractStructEnumBase
{
    /**
     * Constant for value 'byShipments'
     * @return string 'byShipments'
     */
    const VALUE_BY_SHIPMENTS = 'byShipments';
    /**
     * Constant for value 'byWeight'
     * @return string 'byWeight'
     */
    const VALUE_BY_WEIGHT = 'byWeight';
    /**
     * Return allowed values
     * @uses self::VALUE_BY_SHIPMENTS
     * @uses self::VALUE_BY_WEIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_SHIPMENTS,
            self::VALUE_BY_WEIGHT,
        );
    }
}
