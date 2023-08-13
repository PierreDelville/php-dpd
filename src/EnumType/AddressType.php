<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressType EnumType
 * @subpackage Enumerations
 */
class AddressType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StandardAddress'
     * @return string 'StandardAddress'
     */
    const VALUE_STANDARD_ADDRESS = 'StandardAddress';
    /**
     * Constant for value 'PickupAddress'
     * @return string 'PickupAddress'
     */
    const VALUE_PICKUP_ADDRESS = 'PickupAddress';
    /**
     * Constant for value 'ReturnAddress'
     * @return string 'ReturnAddress'
     */
    const VALUE_RETURN_ADDRESS = 'ReturnAddress';
    /**
     * Return allowed values
     * @uses self::VALUE_STANDARD_ADDRESS
     * @uses self::VALUE_PICKUP_ADDRESS
     * @uses self::VALUE_RETURN_ADDRESS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_STANDARD_ADDRESS,
            self::VALUE_PICKUP_ADDRESS,
            self::VALUE_RETURN_ADDRESS,
        );
    }
}
