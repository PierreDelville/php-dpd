<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceBcResponse StructType
 * @subpackage Structs
 */
class GetLastTraceBcResponse extends GetLastTraceBaseResponse
{
    /**
     * The GetLastTraceBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfGetLastTraceBcResponse
     */
    public $GetLastTraceBcResult;
    /**
     * The ShipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentNumber;
    /**
     * Constructor method for GetLastTraceBcResponse
     * @uses GetLastTraceBcResponse::setGetLastTraceBcResult()
     * @uses GetLastTraceBcResponse::setShipmentNumber()
     * @param \Dpd\ArrayType\ArrayOfGetLastTraceBcResponse $getLastTraceBcResult
     * @param string $shipmentNumber
     */
    public function __construct(\Dpd\ArrayType\ArrayOfGetLastTraceBcResponse $getLastTraceBcResult = null, $shipmentNumber = null)
    {
        $this
            ->setGetLastTraceBcResult($getLastTraceBcResult)
            ->setShipmentNumber($shipmentNumber);
    }
    /**
     * Get GetLastTraceBcResult value
     * @return \Dpd\ArrayType\ArrayOfGetLastTraceBcResponse|null
     */
    public function getGetLastTraceBcResult()
    {
        return $this->GetLastTraceBcResult;
    }
    /**
     * Set GetLastTraceBcResult value
     * @param \Dpd\ArrayType\ArrayOfGetLastTraceBcResponse $getLastTraceBcResult
     * @return \Dpd\StructType\GetLastTraceBcResponse
     */
    public function setGetLastTraceBcResult(\Dpd\ArrayType\ArrayOfGetLastTraceBcResponse $getLastTraceBcResult = null)
    {
        $this->GetLastTraceBcResult = $getLastTraceBcResult;
        return $this;
    }
    /**
     * Get ShipmentNumber value
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->ShipmentNumber;
    }
    /**
     * Set ShipmentNumber value
     * @param string $shipmentNumber
     * @return \Dpd\StructType\GetLastTraceBcResponse
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), gettype($shipmentNumber)), __LINE__);
        }
        $this->ShipmentNumber = $shipmentNumber;
        return $this;
    }
}
