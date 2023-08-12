<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentDetailRequest
     */
    public $request;
    /**
     * Constructor method for GetShipmentTraceSingle
     * @uses GetShipmentTraceSingle::setRequest()
     * @param \Dpd\StructType\ShipmentDetailRequest $request
     */
    public function __construct(\Dpd\StructType\ShipmentDetailRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ShipmentDetailRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ShipmentDetailRequest $request
     * @return \Dpd\StructType\GetShipmentTraceSingle
     */
    public function setRequest(\Dpd\StructType\ShipmentDetailRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
