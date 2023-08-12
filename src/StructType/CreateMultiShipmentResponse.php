<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentResponse StructType
 * @subpackage Structs
 */
class CreateMultiShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateMultiShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiShipment
     */
    public $CreateMultiShipmentResult;
    /**
     * Constructor method for CreateMultiShipmentResponse
     * @uses CreateMultiShipmentResponse::setCreateMultiShipmentResult()
     * @param \StructType\MultiShipment $createMultiShipmentResult
     */
    public function __construct(\StructType\MultiShipment $createMultiShipmentResult = null)
    {
        $this
            ->setCreateMultiShipmentResult($createMultiShipmentResult);
    }
    /**
     * Get CreateMultiShipmentResult value
     * @return \StructType\MultiShipment|null
     */
    public function getCreateMultiShipmentResult()
    {
        return $this->CreateMultiShipmentResult;
    }
    /**
     * Set CreateMultiShipmentResult value
     * @param \StructType\MultiShipment $createMultiShipmentResult
     * @return \StructType\CreateMultiShipmentResponse
     */
    public function setCreateMultiShipmentResult(\StructType\MultiShipment $createMultiShipmentResult = null)
    {
        $this->CreateMultiShipmentResult = $createMultiShipmentResult;
        return $this;
    }
}
