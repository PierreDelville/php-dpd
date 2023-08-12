<?php

namespace StructType;

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
     * @var \StructType\GetRdvShipmentDataRequest
     */
    public $request;
    /**
     * Constructor method for GetRdvShipmentData
     * @uses GetRdvShipmentData::setRequest()
     * @param \StructType\GetRdvShipmentDataRequest $request
     */
    public function __construct(\StructType\GetRdvShipmentDataRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetRdvShipmentDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetRdvShipmentDataRequest $request
     * @return \StructType\GetRdvShipmentData
     */
    public function setRequest(\StructType\GetRdvShipmentDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
