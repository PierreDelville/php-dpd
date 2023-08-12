<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataResponse StructType
 * @subpackage Structs
 */
class GetRetourShipmentDataResponse extends AbstractStructBase
{
    /**
     * The GetRetourShipmentDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RetourShipmentData
     */
    public $GetRetourShipmentDataResult;
    /**
     * Constructor method for GetRetourShipmentDataResponse
     * @uses GetRetourShipmentDataResponse::setGetRetourShipmentDataResult()
     * @param \StructType\RetourShipmentData $getRetourShipmentDataResult
     */
    public function __construct(\StructType\RetourShipmentData $getRetourShipmentDataResult = null)
    {
        $this
            ->setGetRetourShipmentDataResult($getRetourShipmentDataResult);
    }
    /**
     * Get GetRetourShipmentDataResult value
     * @return \StructType\RetourShipmentData|null
     */
    public function getGetRetourShipmentDataResult()
    {
        return $this->GetRetourShipmentDataResult;
    }
    /**
     * Set GetRetourShipmentDataResult value
     * @param \StructType\RetourShipmentData $getRetourShipmentDataResult
     * @return \StructType\GetRetourShipmentDataResponse
     */
    public function setGetRetourShipmentDataResult(\StructType\RetourShipmentData $getRetourShipmentDataResult = null)
    {
        $this->GetRetourShipmentDataResult = $getRetourShipmentDataResult;
        return $this;
    }
}
