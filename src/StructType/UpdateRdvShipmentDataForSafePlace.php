<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlace StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataForSafePlace extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlace
     * @uses UpdateRdvShipmentDataForSafePlace::setRequest()
     * @param \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest $request
     */
    public function __construct(\Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest $request
     * @return \Dpd\StructType\UpdateRdvShipmentDataForSafePlace
     */
    public function setRequest(\Dpd\StructType\UpdateRdvShipmentDataForSafePlaceRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
