<?php

namespace Dpd\EnumType;

use \Dpd\AbstractEnumStructBase;

/**
 * This class stands for RdvShipmentDataSearchMode EnumType
 * @subpackage Enumerations
 */
class RdvShipmentDataSearchMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SearchByParcelNumber'
     * @return string 'SearchByParcelNumber'
     */
    const VALUE_SEARCH_BY_PARCEL_NUMBER = 'SearchByParcelNumber';
    /**
     * Constant for value 'SearchByAvisDePassage'
     * @return string 'SearchByAvisDePassage'
     */
    const VALUE_SEARCH_BY_AVIS_DE_PASSAGE = 'SearchByAvisDePassage';
    /**
     * Constant for value 'SearchByToken'
     * @return string 'SearchByToken'
     */
    const VALUE_SEARCH_BY_TOKEN = 'SearchByToken';
    /**
     * Constant for value 'SearchByBIC3'
     * @return string 'SearchByBIC3'
     */
    const VALUE_SEARCH_BY_BIC_3 = 'SearchByBIC3';
    /**
     * Return allowed values
     * @uses self::VALUE_SEARCH_BY_PARCEL_NUMBER
     * @uses self::VALUE_SEARCH_BY_AVIS_DE_PASSAGE
     * @uses self::VALUE_SEARCH_BY_TOKEN
     * @uses self::VALUE_SEARCH_BY_BIC_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_SEARCH_BY_PARCEL_NUMBER,
            self::VALUE_SEARCH_BY_AVIS_DE_PASSAGE,
            self::VALUE_SEARCH_BY_TOKEN,
            self::VALUE_SEARCH_BY_BIC_3,
        );
    }
}
