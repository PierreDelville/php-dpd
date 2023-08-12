<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentBcResponse StructType
 * @subpackage Structs
 */
class CreateMultiShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateMultiShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiShipmentBc
     */
    public $CreateMultiShipmentBcResult;
    /**
     * Constructor method for CreateMultiShipmentBcResponse
     * @uses CreateMultiShipmentBcResponse::setCreateMultiShipmentBcResult()
     * @param \StructType\MultiShipmentBc $createMultiShipmentBcResult
     */
    public function __construct(\StructType\MultiShipmentBc $createMultiShipmentBcResult = null)
    {
        $this
            ->setCreateMultiShipmentBcResult($createMultiShipmentBcResult);
    }
    /**
     * Get CreateMultiShipmentBcResult value
     * @return \StructType\MultiShipmentBc|null
     */
    public function getCreateMultiShipmentBcResult()
    {
        return $this->CreateMultiShipmentBcResult;
    }
    /**
     * Set CreateMultiShipmentBcResult value
     * @param \StructType\MultiShipmentBc $createMultiShipmentBcResult
     * @return \StructType\CreateMultiShipmentBcResponse
     */
    public function setCreateMultiShipmentBcResult(\StructType\MultiShipmentBc $createMultiShipmentBcResult = null)
    {
        $this->CreateMultiShipmentBcResult = $createMultiShipmentBcResult;
        return $this;
    }
}
