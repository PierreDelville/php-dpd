<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentBcResponse StructType
 * @subpackage Structs
 */
class CreateShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipmentBc
     */
    public $CreateShipmentBcResult;
    /**
     * Constructor method for CreateShipmentBcResponse
     * @uses CreateShipmentBcResponse::setCreateShipmentBcResult()
     * @param \ArrayType\ArrayOfShipmentBc $createShipmentBcResult
     */
    public function __construct(\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null)
    {
        $this
            ->setCreateShipmentBcResult($createShipmentBcResult);
    }
    /**
     * Get CreateShipmentBcResult value
     * @return \ArrayType\ArrayOfShipmentBc|null
     */
    public function getCreateShipmentBcResult()
    {
        return $this->CreateShipmentBcResult;
    }
    /**
     * Set CreateShipmentBcResult value
     * @param \ArrayType\ArrayOfShipmentBc $createShipmentBcResult
     * @return \StructType\CreateShipmentBcResponse
     */
    public function setCreateShipmentBcResult(\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null)
    {
        $this->CreateShipmentBcResult = $createShipmentBcResult;
        return $this;
    }
}
