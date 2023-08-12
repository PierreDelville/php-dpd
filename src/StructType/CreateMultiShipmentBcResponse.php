<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\MultiShipmentBc
     */
    public $CreateMultiShipmentBcResult;
    /**
     * Constructor method for CreateMultiShipmentBcResponse
     * @uses CreateMultiShipmentBcResponse::setCreateMultiShipmentBcResult()
     * @param \Dpd\StructType\MultiShipmentBc $createMultiShipmentBcResult
     */
    public function __construct(\Dpd\StructType\MultiShipmentBc $createMultiShipmentBcResult = null)
    {
        $this
            ->setCreateMultiShipmentBcResult($createMultiShipmentBcResult);
    }
    /**
     * Get CreateMultiShipmentBcResult value
     * @return \Dpd\StructType\MultiShipmentBc|null
     */
    public function getCreateMultiShipmentBcResult()
    {
        return $this->CreateMultiShipmentBcResult;
    }
    /**
     * Set CreateMultiShipmentBcResult value
     * @param \Dpd\StructType\MultiShipmentBc $createMultiShipmentBcResult
     * @return \Dpd\StructType\CreateMultiShipmentBcResponse
     */
    public function setCreateMultiShipmentBcResult(\Dpd\StructType\MultiShipmentBc $createMultiShipmentBcResult = null)
    {
        $this->CreateMultiShipmentBcResult = $createMultiShipmentBcResult;
        return $this;
    }
}
