<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RetourServices
     */
    public $services;
    /**
     * Constructor method for RetourShipmentDataBc
     * @uses RetourShipmentDataBc::setServices()
     * @param \Dpd\StructType\RetourServices $services
     */
    public function __construct(\Dpd\StructType\RetourServices $services = null)
    {
        $this
            ->setServices($services);
    }
    /**
     * Get services value
     * @return \Dpd\StructType\RetourServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \Dpd\StructType\RetourServices $services
     * @return \Dpd\StructType\RetourShipmentDataBc
     */
    public function setServices(\Dpd\StructType\RetourServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
