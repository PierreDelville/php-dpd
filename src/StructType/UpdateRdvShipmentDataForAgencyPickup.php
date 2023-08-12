<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForAgencyPickup StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataForAgencyPickup extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UpdateRdvShipmentDataForAgencyPickupRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForAgencyPickup
     * @uses UpdateRdvShipmentDataForAgencyPickup::setRequest()
     * @param \StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request
     */
    public function __construct(\StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\UpdateRdvShipmentDataForAgencyPickupRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request
     * @return \StructType\UpdateRdvShipmentDataForAgencyPickup
     */
    public function setRequest(\StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
