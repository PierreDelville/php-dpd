<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eLimitTypeService EnumType
 * @subpackage Enumerations
 */
class ELimitTypeService extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoLimit'
     * @return string 'NoLimit'
     */
    const VALUE_NO_LIMIT = 'NoLimit';
    /**
     * Constant for value 'ServiceValue'
     * @return string 'ServiceValue'
     */
    const VALUE_SERVICE_VALUE = 'ServiceValue';
    /**
     * Constant for value 'AttributeValue'
     * @return string 'AttributeValue'
     */
    const VALUE_ATTRIBUTE_VALUE = 'AttributeValue';
    /**
     * Constant for value 'NumberOfParcels'
     * @return string 'NumberOfParcels'
     */
    const VALUE_NUMBER_OF_PARCELS = 'NumberOfParcels';
    /**
     * Constant for value 'Weight'
     * @return string 'Weight'
     */
    const VALUE_WEIGHT = 'Weight';
    /**
     * Constant for value 'CutOff'
     * @return string 'CutOff'
     */
    const VALUE_CUT_OFF = 'CutOff';
    /**
     * Constant for value 'Validity'
     * @return string 'Validity'
     */
    const VALUE_VALIDITY = 'Validity';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_LIMIT
     * @uses self::VALUE_SERVICE_VALUE
     * @uses self::VALUE_ATTRIBUTE_VALUE
     * @uses self::VALUE_NUMBER_OF_PARCELS
     * @uses self::VALUE_WEIGHT
     * @uses self::VALUE_CUT_OFF
     * @uses self::VALUE_VALIDITY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_LIMIT,
            self::VALUE_SERVICE_VALUE,
            self::VALUE_ATTRIBUTE_VALUE,
            self::VALUE_NUMBER_OF_PARCELS,
            self::VALUE_WEIGHT,
            self::VALUE_CUT_OFF,
            self::VALUE_VALIDITY,
        );
    }
}
