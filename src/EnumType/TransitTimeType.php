<?php

namespace Dpd\EnumType;

use \Dpd\AbstractEnumStructBase;

/**
 * This class stands for TransitTimeType EnumType
 * @subpackage Enumerations
 */
class TransitTimeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TransitTime_Default'
     * @return string 'TransitTime_Default'
     */
    const VALUE_TRANSIT_TIME_DEFAULT = 'TransitTime_Default';
    /**
     * Constant for value 'TransitTime_Predict'
     * @return string 'TransitTime_Predict'
     */
    const VALUE_TRANSIT_TIME_PREDICT = 'TransitTime_Predict';
    /**
     * Return allowed values
     * @uses self::VALUE_TRANSIT_TIME_DEFAULT
     * @uses self::VALUE_TRANSIT_TIME_PREDICT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_TRANSIT_TIME_DEFAULT,
            self::VALUE_TRANSIT_TIME_PREDICT,
        );
    }
}
