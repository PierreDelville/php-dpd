<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CheckReverseInverseShipmentReturn EnumType
 * @subpackage Enumerations
 */
class CheckReverseInverseShipmentReturn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WellDone'
     * @return string 'WellDone'
     */
    const VALUE_WELL_DONE = 'WellDone';
    /**
     * Constant for value 'OriginalShipmentNotFound'
     * @return string 'OriginalShipmentNotFound'
     */
    const VALUE_ORIGINAL_SHIPMENT_NOT_FOUND = 'OriginalShipmentNotFound';
    /**
     * Constant for value 'OriginalShipmentAlreadyLinked'
     * @return string 'OriginalShipmentAlreadyLinked'
     */
    const VALUE_ORIGINAL_SHIPMENT_ALREADY_LINKED = 'OriginalShipmentAlreadyLinked';
    /**
     * Return allowed values
     * @uses self::VALUE_WELL_DONE
     * @uses self::VALUE_ORIGINAL_SHIPMENT_NOT_FOUND
     * @uses self::VALUE_ORIGINAL_SHIPMENT_ALREADY_LINKED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_WELL_DONE,
            self::VALUE_ORIGINAL_SHIPMENT_NOT_FOUND,
            self::VALUE_ORIGINAL_SHIPMENT_ALREADY_LINKED,
        );
    }
}
