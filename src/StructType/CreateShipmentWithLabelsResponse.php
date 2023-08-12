<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsResponse StructType
 * @subpackage Structs
 */
class CreateShipmentWithLabelsResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentWithLabelsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentsWithLabels
     */
    public $CreateShipmentWithLabelsResult;
    /**
     * Constructor method for CreateShipmentWithLabelsResponse
     * @uses CreateShipmentWithLabelsResponse::setCreateShipmentWithLabelsResult()
     * @param \StructType\ShipmentsWithLabels $createShipmentWithLabelsResult
     */
    public function __construct(\StructType\ShipmentsWithLabels $createShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsResult($createShipmentWithLabelsResult);
    }
    /**
     * Get CreateShipmentWithLabelsResult value
     * @return \StructType\ShipmentsWithLabels|null
     */
    public function getCreateShipmentWithLabelsResult()
    {
        return $this->CreateShipmentWithLabelsResult;
    }
    /**
     * Set CreateShipmentWithLabelsResult value
     * @param \StructType\ShipmentsWithLabels $createShipmentWithLabelsResult
     * @return \StructType\CreateShipmentWithLabelsResponse
     */
    public function setCreateShipmentWithLabelsResult(\StructType\ShipmentsWithLabels $createShipmentWithLabelsResult = null)
    {
        $this->CreateShipmentWithLabelsResult = $createShipmentWithLabelsResult;
        return $this;
    }
}
