<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentsWithLabels
     */
    public $CreateShipmentWithLabelsResult;
    /**
     * Constructor method for CreateShipmentWithLabelsResponse
     * @uses CreateShipmentWithLabelsResponse::setCreateShipmentWithLabelsResult()
     * @param \Dpd\StructType\ShipmentsWithLabels $createShipmentWithLabelsResult
     */
    public function __construct(\Dpd\StructType\ShipmentsWithLabels $createShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsResult($createShipmentWithLabelsResult);
    }
    /**
     * Get CreateShipmentWithLabelsResult value
     * @return \Dpd\StructType\ShipmentsWithLabels|null
     */
    public function getCreateShipmentWithLabelsResult()
    {
        return $this->CreateShipmentWithLabelsResult;
    }
    /**
     * Set CreateShipmentWithLabelsResult value
     * @param \Dpd\StructType\ShipmentsWithLabels $createShipmentWithLabelsResult
     * @return \Dpd\StructType\CreateShipmentWithLabelsResponse
     */
    public function setCreateShipmentWithLabelsResult(\Dpd\StructType\ShipmentsWithLabels $createShipmentWithLabelsResult = null)
    {
        $this->CreateShipmentWithLabelsResult = $createShipmentWithLabelsResult;
        return $this;
    }
}
