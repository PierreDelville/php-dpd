<?php

namespace StructType;

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
     * @var \StructType\MultiShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateMultiShipment
     * @uses CreateMultiShipment::setRequest()
     * @param \StructType\MultiShipmentRequest $request
     */
    public function __construct(\StructType\MultiShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\MultiShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\MultiShipmentRequest $request
     * @return \StructType\CreateMultiShipment
     */
    public function setRequest(\StructType\MultiShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
