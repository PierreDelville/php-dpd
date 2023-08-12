<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipment StructType
 * @subpackage Structs
 */
class CreateMultiShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\MultiShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateMultiShipment
     * @uses CreateMultiShipment::setRequest()
     * @param \Dpd\StructType\MultiShipmentRequest $request
     */
    public function __construct(\Dpd\StructType\MultiShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\MultiShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\MultiShipmentRequest $request
     * @return \Dpd\StructType\CreateMultiShipment
     */
    public function setRequest(\Dpd\StructType\MultiShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
