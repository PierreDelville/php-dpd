<?php

namespace Dpd\EnumType;

use \Dpd\AbstractEnumStructBase;

/**
 * This class stands for etype EnumType
 * @subpackage Enumerations
 */
class Etype extends AbstractStructEnumBase
{
    /**
     * Constant for value 'REVERSE'
     * @return string 'REVERSE'
     */
    const VALUE_REVERSE = 'REVERSE';
    /**
     * Constant for value 'PROOF'
     * @return string 'PROOF'
     */
    const VALUE_PROOF = 'PROOF';
    /**
     * Constant for value 'EPRINT'
     * @return string 'EPRINT'
     */
    const VALUE_EPRINT = 'EPRINT';
    /**
     * Constant for value 'EPRINTATTACHMENT'
     * @return string 'EPRINTATTACHMENT'
     */
    const VALUE_EPRINTATTACHMENT = 'EPRINTATTACHMENT';
    /**
     * Constant for value 'MASTER'
     * @return string 'MASTER'
     */
    const VALUE_MASTER = 'MASTER';
    /**
     * Constant for value 'COLLECTIONREQUEST'
     * @return string 'COLLECTIONREQUEST'
     */
    const VALUE_COLLECTIONREQUEST = 'COLLECTIONREQUEST';
    /**
     * Constant for value 'BIC3'
     * @return string 'BIC3'
     */
    const VALUE_BIC_3 = 'BIC3';
    /**
     * Constant for value 'REVERSEBIC3'
     * @return string 'REVERSEBIC3'
     */
    const VALUE_REVERSEBIC_3 = 'REVERSEBIC3';
    /**
     * Constant for value 'PROOFBIC3'
     * @return string 'PROOFBIC3'
     */
    const VALUE_PROOFBIC_3 = 'PROOFBIC3';
    /**
     * Return allowed values
     * @uses self::VALUE_REVERSE
     * @uses self::VALUE_PROOF
     * @uses self::VALUE_EPRINT
     * @uses self::VALUE_EPRINTATTACHMENT
     * @uses self::VALUE_MASTER
     * @uses self::VALUE_COLLECTIONREQUEST
     * @uses self::VALUE_BIC_3
     * @uses self::VALUE_REVERSEBIC_3
     * @uses self::VALUE_PROOFBIC_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return array(
            self::VALUE_REVERSE,
            self::VALUE_PROOF,
            self::VALUE_EPRINT,
            self::VALUE_EPRINTATTACHMENT,
            self::VALUE_MASTER,
            self::VALUE_COLLECTIONREQUEST,
            self::VALUE_BIC_3,
            self::VALUE_REVERSEBIC_3,
            self::VALUE_PROOFBIC_3,
        );
    }
}
