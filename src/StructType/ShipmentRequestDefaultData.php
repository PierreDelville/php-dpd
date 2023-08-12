<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRequestDefaultData StructType
 * @subpackage Structs
 */
class ShipmentRequestDefaultData extends ShipmentRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\StdServices
     */
    public $services;
    /**
     * Constructor method for ShipmentRequestDefaultData
     * @uses ShipmentRequestDefaultData::setServices()
     * @param \Dpd\StructType\StdServices $services
     */
    public function __construct(\Dpd\StructType\StdServices $services = null)
    {
        $this
            ->setServices($services);
    }
    /**
     * Get services value
     * @return \Dpd\StructType\StdServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \Dpd\StructType\StdServices $services
     * @return \Dpd\StructType\ShipmentRequestDefaultData
     */
    public function setServices(\Dpd\StructType\StdServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
