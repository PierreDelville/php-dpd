<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentRequestBc
     */
    public $request;
    /**
     * Constructor method for GetShipmentBc
     * @uses GetShipmentBc::setRequest()
     * @param \Dpd\StructType\ShipmentRequestBc $request
     */
    public function __construct(\Dpd\StructType\ShipmentRequestBc $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ShipmentRequestBc|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ShipmentRequestBc $request
     * @return \Dpd\StructType\GetShipmentBc
     */
    public function setRequest(\Dpd\StructType\ShipmentRequestBc $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
