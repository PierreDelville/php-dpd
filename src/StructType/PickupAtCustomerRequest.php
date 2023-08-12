<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfParcel
     */
    public $shipments;
    /**
     * Constructor method for PickupAtCustomerRequest
     * @uses PickupAtCustomerRequest::setShipments()
     * @param \Dpd\ArrayType\ArrayOfParcel $shipments
     */
    public function __construct(\Dpd\ArrayType\ArrayOfParcel $shipments = null)
    {
        $this
            ->setShipments($shipments);
    }
    /**
     * Get shipments value
     * @return \Dpd\ArrayType\ArrayOfParcel|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param \Dpd\ArrayType\ArrayOfParcel $shipments
     * @return \Dpd\StructType\PickupAtCustomerRequest
     */
    public function setShipments(\Dpd\ArrayType\ArrayOfParcel $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
