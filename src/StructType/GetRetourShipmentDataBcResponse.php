<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataBcResponse StructType
 * @subpackage Structs
 */
class GetRetourShipmentDataBcResponse extends AbstractStructBase
{
    /**
     * The GetRetourShipmentDataBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RetourShipmentDataBc
     */
    public $GetRetourShipmentDataBcResult;
    /**
     * Constructor method for GetRetourShipmentDataBcResponse
     * @uses GetRetourShipmentDataBcResponse::setGetRetourShipmentDataBcResult()
     * @param \StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult
     */
    public function __construct(\StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult = null)
    {
        $this
            ->setGetRetourShipmentDataBcResult($getRetourShipmentDataBcResult);
    }
    /**
     * Get GetRetourShipmentDataBcResult value
     * @return \StructType\RetourShipmentDataBc|null
     */
    public function getGetRetourShipmentDataBcResult()
    {
        return $this->GetRetourShipmentDataBcResult;
    }
    /**
     * Set GetRetourShipmentDataBcResult value
     * @param \StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult
     * @return \StructType\GetRetourShipmentDataBcResponse
     */
    public function setGetRetourShipmentDataBcResult(\StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult = null)
    {
        $this->GetRetourShipmentDataBcResult = $getRetourShipmentDataBcResult;
        return $this;
    }
}
