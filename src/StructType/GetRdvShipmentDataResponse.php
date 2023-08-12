<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfRdvShipmentData
     */
    public $GetRdvShipmentDataResult;
    /**
     * Constructor method for GetRdvShipmentDataResponse
     * @uses GetRdvShipmentDataResponse::setGetRdvShipmentDataResult()
     * @param \Dpd\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult
     */
    public function __construct(\Dpd\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null)
    {
        $this
            ->setGetRdvShipmentDataResult($getRdvShipmentDataResult);
    }
    /**
     * Get GetRdvShipmentDataResult value
     * @return \Dpd\ArrayType\ArrayOfRdvShipmentData|null
     */
    public function getGetRdvShipmentDataResult()
    {
        return $this->GetRdvShipmentDataResult;
    }
    /**
     * Set GetRdvShipmentDataResult value
     * @param \Dpd\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult
     * @return \Dpd\StructType\GetRdvShipmentDataResponse
     */
    public function setGetRdvShipmentDataResult(\Dpd\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null)
    {
        $this->GetRdvShipmentDataResult = $getRdvShipmentDataResult;
        return $this;
    }
}
