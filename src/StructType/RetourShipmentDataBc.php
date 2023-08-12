<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetourShipmentDataBc StructType
 * @subpackage Structs
 */
class RetourShipmentDataBc extends ShipmentDataBc
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RetourServices
     */
    public $services;
    /**
     * Constructor method for RetourShipmentDataBc
     * @uses RetourShipmentDataBc::setServices()
     * @param \StructType\RetourServices $services
     */
    public function __construct(\StructType\RetourServices $services = null)
    {
        $this
            ->setServices($services);
    }
    /**
     * Get services value
     * @return \StructType\RetourServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \StructType\RetourServices $services
     * @return \StructType\RetourShipmentDataBc
     */
    public function setServices(\StructType\RetourServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
