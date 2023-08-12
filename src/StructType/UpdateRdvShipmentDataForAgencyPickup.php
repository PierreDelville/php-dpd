<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForAgencyPickup
     * @uses UpdateRdvShipmentDataForAgencyPickup::setRequest()
     * @param \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request
     */
    public function __construct(\Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request
     * @return \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickup
     */
    public function setRequest(\Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
