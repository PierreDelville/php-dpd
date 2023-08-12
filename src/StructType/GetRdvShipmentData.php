<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentData StructType
 * @subpackage Structs
 */
class GetRdvShipmentData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetRdvShipmentDataRequest
     */
    public $request;
    /**
     * Constructor method for GetRdvShipmentData
     * @uses GetRdvShipmentData::setRequest()
     * @param \Dpd\StructType\GetRdvShipmentDataRequest $request
     */
    public function __construct(\Dpd\StructType\GetRdvShipmentDataRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetRdvShipmentDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetRdvShipmentDataRequest $request
     * @return \Dpd\StructType\GetRdvShipmentData
     */
    public function setRequest(\Dpd\StructType\GetRdvShipmentDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
