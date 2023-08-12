<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceSingle StructType
 * @subpackage Structs
 */
class GetShipmentTraceSingle extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentDetailRequest
     */
    public $request;
    /**
     * Constructor method for GetShipmentTraceSingle
     * @uses GetShipmentTraceSingle::setRequest()
     * @param \StructType\ShipmentDetailRequest $request
     */
    public function __construct(\StructType\ShipmentDetailRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ShipmentDetailRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ShipmentDetailRequest $request
     * @return \StructType\GetShipmentTraceSingle
     */
    public function setRequest(\StructType\ShipmentDetailRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
