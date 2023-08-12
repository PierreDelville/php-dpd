<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentResponse StructType
 * @subpackage Structs
 */
class CreateShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipment
     */
    public $CreateShipmentResult;
    /**
     * Constructor method for CreateShipmentResponse
     * @uses CreateShipmentResponse::setCreateShipmentResult()
     * @param \ArrayType\ArrayOfShipment $createShipmentResult
     */
    public function __construct(\ArrayType\ArrayOfShipment $createShipmentResult = null)
    {
        $this
            ->setCreateShipmentResult($createShipmentResult);
    }
    /**
     * Get CreateShipmentResult value
     * @return \ArrayType\ArrayOfShipment|null
     */
    public function getCreateShipmentResult()
    {
        return $this->CreateShipmentResult;
    }
    /**
     * Set CreateShipmentResult value
     * @param \ArrayType\ArrayOfShipment $createShipmentResult
     * @return \StructType\CreateShipmentResponse
     */
    public function setCreateShipmentResult(\ArrayType\ArrayOfShipment $createShipmentResult = null)
    {
        $this->CreateShipmentResult = $createShipmentResult;
        return $this;
    }
}
