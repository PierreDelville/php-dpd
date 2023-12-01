<?php

namespace Dpd\EnumType;

use \Dpd\AbstractStructEnumBase;

/**
 * This class stands for etypeContact EnumType
 * @subpackage Enumerations
 */
class EtypeContact extends AbstractStructEnumBase
{
    /**
     * Constant for value 'No'
     * @return string 'No'
     */
    const VALUE_NO = 'No';
    /**
     * Constant for value 'Predict'
     * @return string 'Predict'
     */
    const VALUE_PREDICT = 'Predict';
    /**
     * Constant for value 'AutomaticSMS'
     * @return string 'AutomaticSMS'
     */
    const VALUE_AUTOMATIC_SMS = 'AutomaticSMS';
    /**
     * Constant for value 'AutomaticMail'
     * @return string 'AutomaticMail'
     */
    const VALUE_AUTOMATIC_MAIL = 'AutomaticMail';
    /**
     * Return allowed values
     * @uses self::VALUE_NO
     * @uses self::VALUE_PREDICT
     * @uses self::VALUE_AUTOMATIC_SMS
     * @uses self::VALUE_AUTOMATIC_MAIL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_NO,
            self::VALUE_PREDICT,
            self::VALUE_AUTOMATIC_SMS,
            self::VALUE_AUTOMATIC_MAIL,
        );
    }
}
