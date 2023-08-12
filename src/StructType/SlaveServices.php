<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ExtraInsurance
     */
    public $extraInsurance;
    /**
     * Constructor method for SlaveServices
     * @uses SlaveServices::setExtraInsurance()
     * @param \Dpd\StructType\ExtraInsurance $extraInsurance
     */
    public function __construct(\Dpd\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this
            ->setExtraInsurance($extraInsurance);
    }
    /**
     * Get extraInsurance value
     * @return \Dpd\StructType\ExtraInsurance|null
     */
    public function getExtraInsurance()
    {
        return $this->extraInsurance;
    }
    /**
     * Set extraInsurance value
     * @param \Dpd\StructType\ExtraInsurance $extraInsurance
     * @return \Dpd\StructType\SlaveServices
     */
    public function setExtraInsurance(\Dpd\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
}
