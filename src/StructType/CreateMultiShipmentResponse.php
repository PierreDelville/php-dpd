<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\MultiShipment
     */
    public $CreateMultiShipmentResult;
    /**
     * Constructor method for CreateMultiShipmentResponse
     * @uses CreateMultiShipmentResponse::setCreateMultiShipmentResult()
     * @param \Dpd\StructType\MultiShipment $createMultiShipmentResult
     */
    public function __construct(\Dpd\StructType\MultiShipment $createMultiShipmentResult = null)
    {
        $this
            ->setCreateMultiShipmentResult($createMultiShipmentResult);
    }
    /**
     * Get CreateMultiShipmentResult value
     * @return \Dpd\StructType\MultiShipment|null
     */
    public function getCreateMultiShipmentResult()
    {
        return $this->CreateMultiShipmentResult;
    }
    /**
     * Set CreateMultiShipmentResult value
     * @param \Dpd\StructType\MultiShipment $createMultiShipmentResult
     * @return \Dpd\StructType\CreateMultiShipmentResponse
     */
    public function setCreateMultiShipmentResult(\Dpd\StructType\MultiShipment $createMultiShipmentResult = null)
    {
        $this->CreateMultiShipmentResult = $createMultiShipmentResult;
        return $this;
    }
}
