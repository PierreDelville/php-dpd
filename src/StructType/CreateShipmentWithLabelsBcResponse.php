<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ShipmentsWithLabelsBc
     */
    public $CreateShipmentWithLabelsBcResult;
    /**
     * Constructor method for CreateShipmentWithLabelsBcResponse
     * @uses CreateShipmentWithLabelsBcResponse::setCreateShipmentWithLabelsBcResult()
     * @param \Dpd\StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult
     */
    public function __construct(\Dpd\StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsBcResult($createShipmentWithLabelsBcResult);
    }
    /**
     * Get CreateShipmentWithLabelsBcResult value
     * @return \Dpd\StructType\ShipmentsWithLabelsBc|null
     */
    public function getCreateShipmentWithLabelsBcResult()
    {
        return $this->CreateShipmentWithLabelsBcResult;
    }
    /**
     * Set CreateShipmentWithLabelsBcResult value
     * @param \Dpd\StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult
     * @return \Dpd\StructType\CreateShipmentWithLabelsBcResponse
     */
    public function setCreateShipmentWithLabelsBcResult(\Dpd\StructType\ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null)
    {
        $this->CreateShipmentWithLabelsBcResult = $createShipmentWithLabelsBcResult;
        return $this;
    }
}
