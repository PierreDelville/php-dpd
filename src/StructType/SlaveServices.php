<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SlaveServices StructType
 * @subpackage Structs
 */
class SlaveServices extends ServiceBaseList
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ExtraInsurance
     */
    public $extraInsurance;
    /**
     * Constructor method for SlaveServices
     * @uses SlaveServices::setExtraInsurance()
     * @param \StructType\ExtraInsurance $extraInsurance
     */
    public function __construct(\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this
            ->setExtraInsurance($extraInsurance);
    }
    /**
     * Get extraInsurance value
     * @return \StructType\ExtraInsurance|null
     */
    public function getExtraInsurance()
    {
        return $this->extraInsurance;
    }
    /**
     * Set extraInsurance value
     * @param \StructType\ExtraInsurance $extraInsurance
     * @return \StructType\SlaveServices
     */
    public function setExtraInsurance(\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
}
