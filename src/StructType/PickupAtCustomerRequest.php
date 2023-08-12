<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAtCustomerRequest StructType
 * @subpackage Structs
 */
class PickupAtCustomerRequest extends PickupAtCustomerRequestBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfParcel
     */
    public $shipments;
    /**
     * Constructor method for PickupAtCustomerRequest
     * @uses PickupAtCustomerRequest::setShipments()
     * @param \ArrayType\ArrayOfParcel $shipments
     */
    public function __construct(\ArrayType\ArrayOfParcel $shipments = null)
    {
        $this
            ->setShipments($shipments);
    }
    /**
     * Get shipments value
     * @return \ArrayType\ArrayOfParcel|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \ArrayType\ArrayOfParcel $shipments
     * @return \StructType\PickupAtCustomerRequest
     */
    public function setShipments(\ArrayType\ArrayOfParcel $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
