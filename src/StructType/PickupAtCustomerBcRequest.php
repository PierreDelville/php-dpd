<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfString
     */
    public $shipments;
    /**
     * Constructor method for PickupAtCustomerBcRequest
     * @uses PickupAtCustomerBcRequest::setShipments()
     * @param \Dpd\ArrayType\ArrayOfString $shipments
     */
    public function __construct(\Dpd\ArrayType\ArrayOfString $shipments = null)
    {
        $this
            ->setShipments($shipments);
    }
    /**
     * Get shipments value
     * @return \Dpd\ArrayType\ArrayOfString|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \Dpd\ArrayType\ArrayOfString $shipments
     * @return \Dpd\StructType\PickupAtCustomerBcRequest
     */
    public function setShipments(\Dpd\ArrayType\ArrayOfString $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
