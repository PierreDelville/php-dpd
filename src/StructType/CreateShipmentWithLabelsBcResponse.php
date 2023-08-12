<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsBcResponse StructType
 * @subpackage Structs
 */
class CreateShipmentWithLabelsBcResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentWithLabelsBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ShipmentsWithLabelsBc
     */
    public $CreateShipmentWithLabelsBcResult;
    /**
     * Constructor method for CreateShipmentWithLabelsBcResponse
     * @uses CreateShipmentWithLabelsBcResponse::setCreateShipmentWithLabelsBcResult()
     * @param \StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult
     */
    public function __construct(\StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsBcResult($createShipmentWithLabelsBcResult);
    }
    /**
     * Get CreateShipmentWithLabelsBcResult value
     * @return \StructType\ShipmentsWithLabelsBc|null
     */
    public function getCreateShipmentWithLabelsBcResult()
    {
        return $this->CreateShipmentWithLabelsBcResult;
    }
    /**
     * Set CreateShipmentWithLabelsBcResult value
     * @param \StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult
     * @return \StructType\CreateShipmentWithLabelsBcResponse
     */
    public function setCreateShipmentWithLabelsBcResult(\StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null)
    {
        $this->CreateShipmentWithLabelsBcResult = $createShipmentWithLabelsBcResult;
        return $this;
    }
}
