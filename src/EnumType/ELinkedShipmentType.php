<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

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
    public static function getValidValues()
    {
        return array(
            self::VALUE_SLAVE,
        );
    }
}
