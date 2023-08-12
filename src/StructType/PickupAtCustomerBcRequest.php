<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAtCustomerBcRequest StructType
 * @subpackage Structs
 */
class PickupAtCustomerBcRequest extends PickupAtCustomerRequestBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfString
     */
    public $shipments;
    /**
     * Constructor method for PickupAtCustomerBcRequest
     * @uses PickupAtCustomerBcRequest::setShipments()
     * @param \ArrayType\ArrayOfString $shipments
     */
    public function __construct(\ArrayType\ArrayOfString $shipments = null)
    {
        $this
            ->setShipments($shipments);
    }
    /**
     * Get shipments value
     * @return \ArrayType\ArrayOfString|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \ArrayType\ArrayOfString $shipments
     * @return \StructType\PickupAtCustomerBcRequest
     */
    public function setShipments(\ArrayType\ArrayOfString $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
