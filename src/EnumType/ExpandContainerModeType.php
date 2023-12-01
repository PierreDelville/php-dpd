<?php

namespace Dpd\EnumType;

use \Dpd\AbstractStructEnumBase;

/**
 * This class stands for ExpandContainerModeType EnumType
 * @subpackage Enumerations
 */
class ExpandContainerModeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MasterOnly'
     * @return string 'MasterOnly'
     */
    const VALUE_MASTER_ONLY = 'MasterOnly';
    /**
     * Constant for value 'MasterAndSlave'
     * @return string 'MasterAndSlave'
     */
    const VALUE_MASTER_AND_SLAVE = 'MasterAndSlave';
    /**
     * Return allowed values
     * @uses self::VALUE_MASTER_ONLY
     * @uses self::VALUE_MASTER_AND_SLAVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_MASTER_ONLY,
            self::VALUE_MASTER_AND_SLAVE,
        );
    }
}
