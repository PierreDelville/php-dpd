<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfShipmentBc
     */
    public $CreateShipmentBcResult;
    /**
     * Constructor method for CreateShipmentBcResponse
     * @uses CreateShipmentBcResponse::setCreateShipmentBcResult()
     * @param \Dpd\ArrayType\ArrayOfShipmentBc $createShipmentBcResult
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null)
    {
        $this
            ->setCreateShipmentBcResult($createShipmentBcResult);
    }
    /**
     * Get CreateShipmentBcResult value
     * @return \Dpd\ArrayType\ArrayOfShipmentBc|null
     */
    public function getCreateShipmentBcResult()
    {
        return $this->CreateShipmentBcResult;
    }
    /**
     * Set CreateShipmentBcResult value
     * @param \Dpd\ArrayType\ArrayOfShipmentBc $createShipmentBcResult
     * @return \Dpd\StructType\CreateShipmentBcResponse
     */
    public function setCreateShipmentBcResult(\Dpd\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null)
    {
        $this->CreateShipmentBcResult = $createShipmentBcResult;
        return $this;
    }
}
