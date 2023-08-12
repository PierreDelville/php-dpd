<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfShipment
     */
    public $CreateShipmentResult;
    /**
     * Constructor method for CreateShipmentResponse
     * @uses CreateShipmentResponse::setCreateShipmentResult()
     * @param \Dpd\ArrayType\ArrayOfShipment $createShipmentResult
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipment $createShipmentResult = null)
    {
        $this
            ->setCreateShipmentResult($createShipmentResult);
    }
    /**
     * Get CreateShipmentResult value
     * @return \Dpd\ArrayType\ArrayOfShipment|null
     */
    public function getCreateShipmentResult()
    {
        return $this->CreateShipmentResult;
    }
    /**
     * Set CreateShipmentResult value
     * @param \Dpd\ArrayType\ArrayOfShipment $createShipmentResult
     * @return \Dpd\StructType\CreateShipmentResponse
     */
    public function setCreateShipmentResult(\Dpd\ArrayType\ArrayOfShipment $createShipmentResult = null)
    {
        $this->CreateShipmentResult = $createShipmentResult;
        return $this;
    }
}
