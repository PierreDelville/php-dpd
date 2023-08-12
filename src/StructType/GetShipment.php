<?php

namespace StructType;

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
     * @var \StructType\ShipmentRequest
     */
    public $request;
    /**
     * Constructor method for GetShipment
     * @uses GetShipment::setRequest()
     * @param \StructType\ShipmentRequest $request
     */
    public function __construct(\StructType\ShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ShipmentRequest $request
     * @return \StructType\GetShipment
     */
    public function setRequest(\StructType\ShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
