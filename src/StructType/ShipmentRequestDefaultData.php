<?php

namespace StructType;

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
     * @var \StructType\StdServices
     */
    public $services;
    /**
     * Constructor method for ShipmentRequestDefaultData
     * @uses ShipmentRequestDefaultData::setServices()
     * @param \StructType\StdServices $services
     */
    public function __construct(\StructType\StdServices $services = null)
    {
        $this
            ->setServices($services);
    }
    /**
     * Get services value
     * @return \StructType\StdServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \StructType\StdServices $services
     * @return \StructType\ShipmentRequestDefaultData
     */
    public function setServices(\StructType\StdServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
