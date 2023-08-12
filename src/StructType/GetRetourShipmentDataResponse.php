<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RetourShipmentData
     */
    public $GetRetourShipmentDataResult;
    /**
     * Constructor method for GetRetourShipmentDataResponse
     * @uses GetRetourShipmentDataResponse::setGetRetourShipmentDataResult()
     * @param \Dpd\StructType\RetourShipmentData $getRetourShipmentDataResult
     */
    public function __construct(\Dpd\StructType\RetourShipmentData $getRetourShipmentDataResult = null)
    {
        $this
            ->setGetRetourShipmentDataResult($getRetourShipmentDataResult);
    }
    /**
     * Get GetRetourShipmentDataResult value
     * @return \Dpd\StructType\RetourShipmentData|null
     */
    public function getGetRetourShipmentDataResult()
    {
        return $this->GetRetourShipmentDataResult;
    }
    /**
     * Set GetRetourShipmentDataResult value
     * @param \Dpd\StructType\RetourShipmentData $getRetourShipmentDataResult
     * @return \Dpd\StructType\GetRetourShipmentDataResponse
     */
    public function setGetRetourShipmentDataResult(\Dpd\StructType\RetourShipmentData $getRetourShipmentDataResult = null)
    {
        $this->GetRetourShipmentDataResult = $getRetourShipmentDataResult;
        return $this;
    }
}
