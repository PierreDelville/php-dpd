<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateShipment StructType
 * @subpackage Structs
 */
class TerminateShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TerminateShipmentRequest
     */
    public $request;
    /**
     * Constructor method for TerminateShipment
     * @uses TerminateShipment::setRequest()
     * @param \StructType\TerminateShipmentRequest $request
     */
    public function __construct(\StructType\TerminateShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\TerminateShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\TerminateShipmentRequest $request
     * @return \StructType\TerminateShipment
     */
    public function setRequest(\StructType\TerminateShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
