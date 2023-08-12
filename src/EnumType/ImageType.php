<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ImageType EnumType
 * @subpackage Enumerations
 */
class ImageType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'POD'
     * @return string 'POD'
     */
    const VALUE_POD = 'POD';
    /**
     * Constant for value 'POA'
     * @return string 'POA'
     */
    const VALUE_POA = 'POA';
    /**
     * Constant for value 'DeliverySignature'
     * @return string 'DeliverySignature'
     */
    const VALUE_DELIVERY_SIGNATURE = 'DeliverySignature';
    /**
     * Constant for value 'DeliveryShop'
     * @return string 'DeliveryShop'
     */
    const VALUE_DELIVERY_SHOP = 'DeliveryShop';
    /**
     * Constant for value 'PickupSignature'
     * @return string 'PickupSignature'
     */
    const VALUE_PICKUP_SIGNATURE = 'PickupSignature';
    /**
     * Return allowed values
     * @uses self::VALUE_POD
     * @uses self::VALUE_POA
     * @uses self::VALUE_DELIVERY_SIGNATURE
     * @uses self::VALUE_DELIVERY_SHOP
     * @uses self::VALUE_PICKUP_SIGNATURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POD,
            self::VALUE_POA,
            self::VALUE_DELIVERY_SIGNATURE,
            self::VALUE_DELIVERY_SHOP,
            self::VALUE_PICKUP_SIGNATURE,
        );
    }
}
