<?php

namespace Dpd\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for etypeConsolidation EnumType
 * @subpackage Enumerations
 */
class EtypeConsolidation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CombinedDelivery'
     * @return string 'CombinedDelivery'
     */
    const VALUE_COMBINED_DELIVERY = 'CombinedDelivery';
    /**
     * Constant for value 'CombinedInvoicing'
     * @return string 'CombinedInvoicing'
     */
    const VALUE_COMBINED_INVOICING = 'CombinedInvoicing';
    /**
     * Constant for value 'CombinedDeliveryAndInvoicing'
     * @return string 'CombinedDeliveryAndInvoicing'
     */
    const VALUE_COMBINED_DELIVERY_AND_INVOICING = 'CombinedDeliveryAndInvoicing';
    /**
     * Return allowed values
     * @uses self::VALUE_COMBINED_DELIVERY
     * @uses self::VALUE_COMBINED_INVOICING
     * @uses self::VALUE_COMBINED_DELIVERY_AND_INVOICING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_COMBINED_DELIVERY,
            self::VALUE_COMBINED_INVOICING,
            self::VALUE_COMBINED_DELIVERY_AND_INVOICING,
        );
    }
}
