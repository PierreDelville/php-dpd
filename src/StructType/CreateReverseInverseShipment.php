<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipment StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReverseShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateReverseInverseShipment
     * @uses CreateReverseInverseShipment::setRequest()
     * @param \StructType\ReverseShipmentRequest $request
     */
    public function __construct(\StructType\ReverseShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ReverseShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ReverseShipmentRequest $request
     * @return \StructType\CreateReverseInverseShipment
     */
    public function setRequest(\StructType\ReverseShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
