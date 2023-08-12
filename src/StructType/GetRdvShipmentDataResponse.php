<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentDataResponse StructType
 * @subpackage Structs
 */
class GetRdvShipmentDataResponse extends AbstractStructBase
{
    /**
     * The GetRdvShipmentDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRdvShipmentData
     */
    public $GetRdvShipmentDataResult;
    /**
     * Constructor method for GetRdvShipmentDataResponse
     * @uses GetRdvShipmentDataResponse::setGetRdvShipmentDataResult()
     * @param \ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult
     */
    public function __construct(\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null)
    {
        $this
            ->setGetRdvShipmentDataResult($getRdvShipmentDataResult);
    }
    /**
     * Get GetRdvShipmentDataResult value
     * @return \ArrayType\ArrayOfRdvShipmentData|null
     */
    public function getGetRdvShipmentDataResult()
    {
        return $this->GetRdvShipmentDataResult;
    }
    /**
     * Set GetRdvShipmentDataResult value
     * @param \ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult
     * @return \StructType\GetRdvShipmentDataResponse
     */
    public function setGetRdvShipmentDataResult(\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null)
    {
        $this->GetRdvShipmentDataResult = $getRdvShipmentDataResult;
        return $this;
    }
}
