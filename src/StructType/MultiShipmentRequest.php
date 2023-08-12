<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiShipmentRequest StructType
 * @subpackage Structs
 */
class MultiShipmentRequest extends ShipmentRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiServices
     */
    public $services;
    /**
     * The slaves
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfSlaveRequest
     */
    public $slaves;
    /**
     * Constructor method for MultiShipmentRequest
     * @uses MultiShipmentRequest::setServices()
     * @uses MultiShipmentRequest::setSlaves()
     * @param \StructType\MultiServices $services
     * @param \ArrayType\ArrayOfSlaveRequest $slaves
     */
    public function __construct(\StructType\MultiServices $services = null, \ArrayType\ArrayOfSlaveRequest $slaves = null)
    {
        $this
            ->setServices($services)
            ->setSlaves($slaves);
    }
    /**
     * Get services value
     * @return \StructType\MultiServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \StructType\MultiServices $services
     * @return \StructType\MultiShipmentRequest
     */
    public function setServices(\StructType\MultiServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
    /**
     * Get slaves value
     * @return \ArrayType\ArrayOfSlaveRequest|null
     */
    public function getSlaves()
    {
        return $this->slaves;
    }
    /**
     * Set slaves value
     * @param \ArrayType\ArrayOfSlaveRequest $slaves
     * @return \StructType\MultiShipmentRequest
     */
    public function setSlaves(\ArrayType\ArrayOfSlaveRequest $slaves = null)
    {
        $this->slaves = $slaves;
        return $this;
    }
}
