<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBc StructType
 * @subpackage Structs
 */
class GetShipmentBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentRequestBc
     */
    public $request;
    /**
     * Constructor method for GetShipmentBc
     * @uses GetShipmentBc::setRequest()
     * @param \StructType\ShipmentRequestBc $request
     */
    public function __construct(\StructType\ShipmentRequestBc $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ShipmentRequestBc|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ShipmentRequestBc $request
     * @return \StructType\GetShipmentBc
     */
    public function setRequest(\StructType\ShipmentRequestBc $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
