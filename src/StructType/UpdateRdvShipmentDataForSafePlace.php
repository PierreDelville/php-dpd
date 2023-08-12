<?php

namespace StructType;

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
     * @var \StructType\UpdateRdvShipmentDataForSafePlaceRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlace
     * @uses UpdateRdvShipmentDataForSafePlace::setRequest()
     * @param \StructType\UpdateRdvShipmentDataForSafePlaceRequest $request
     */
    public function __construct(\StructType\UpdateRdvShipmentDataForSafePlaceRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\UpdateRdvShipmentDataForSafePlaceRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\UpdateRdvShipmentDataForSafePlaceRequest $request
     * @return \StructType\UpdateRdvShipmentDataForSafePlace
     */
    public function setRequest(\StructType\UpdateRdvShipmentDataForSafePlaceRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
