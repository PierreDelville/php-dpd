<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BcDataExt StructType
 * @subpackage Structs
 */
class BcDataExt extends BcData
{
    /**
     * The BarCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarCode;
    /**
     * Constructor method for BcDataExt
     * @uses BcDataExt::setBarCode()
     * @param string $barCode
     */
    public function __construct($barCode = null)
    {
        $this
            ->setBarCode($barCode);
    }
    /**
     * Get BarCode value
     * @return string|null
     */
    public function getBarCode()
    {
        return $this->BarCode;
    }
    /**
     * Set BarCode value
     * @param string $barCode
     * @return \StructType\BcDataExt
     */
    public function setBarCode($barCode = null)
    {
        // validation for constraint: string
        if (!is_null($barCode) && !is_string($barCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCode, true), gettype($barCode)), __LINE__);
        }
        $this->BarCode = $barCode;
        return $this;
    }
}
