<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipment StructType
 * @subpackage Structs
 */
class GetShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ShipmentRequest
     */
    public $request;
    /**
     * Constructor method for GetShipment
     * @uses GetShipment::setRequest()
     * @param \Dpd\StructType\ShipmentRequest $request
     */
    public function __construct(\Dpd\StructType\ShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ShipmentRequest $request
     * @return \Dpd\StructType\GetShipment
     */
    public function setRequest(\Dpd\StructType\ShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
