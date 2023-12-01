<?php

namespace Dpd\EnumType;

use \Dpd\AbstractEnumStructBase;

/**
 * This class stands for eLinkedShipmentType EnumType
 * @subpackage Enumerations
 */
class ELinkedShipmentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Slave'
     * @return string 'Slave'
     */
    const VALUE_SLAVE = 'Slave';
    /**
     * Return allowed values
     * @uses self::VALUE_SLAVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_SLAVE,
        );
    }
}
