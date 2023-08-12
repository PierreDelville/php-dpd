<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\MultiServices
     */
    public $services;
    /**
     * The slaves
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfSlaveRequest
     */
    public $slaves;
    /**
     * Constructor method for MultiShipmentRequest
     * @uses MultiShipmentRequest::setServices()
     * @uses MultiShipmentRequest::setSlaves()
     * @param \Dpd\StructType\MultiServices $services
     * @param \Dpd\ArrayType\ArrayOfSlaveRequest $slaves
     */
    public function __construct(\Dpd\StructType\MultiServices $services = null, \Dpd\ArrayType\ArrayOfSlaveRequest $slaves = null)
    {
        $this
            ->setServices($services)
            ->setSlaves($slaves);
    }
    /**
     * Get services value
     * @return \Dpd\StructType\MultiServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \Dpd\StructType\MultiServices $services
     * @return \Dpd\StructType\MultiShipmentRequest
     */
    public function setServices(\Dpd\StructType\MultiServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
    /**
     * Get slaves value
     * @return \Dpd\ArrayType\ArrayOfSlaveRequest|null
     */
    public function getSlaves()
    {
        return $this->slaves;
    }
    /**
     * Set slaves value
     * @param \Dpd\ArrayType\ArrayOfSlaveRequest $slaves
     * @return \Dpd\StructType\MultiShipmentRequest
     */
    public function setSlaves(\Dpd\ArrayType\ArrayOfSlaveRequest $slaves = null)
    {
        $this->slaves = $slaves;
        return $this;
    }
}
