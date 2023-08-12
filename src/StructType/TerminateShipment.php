<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\TerminateShipmentRequest
     */
    public $request;
    /**
     * Constructor method for TerminateShipment
     * @uses TerminateShipment::setRequest()
     * @param \Dpd\StructType\TerminateShipmentRequest $request
     */
    public function __construct(\Dpd\StructType\TerminateShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\TerminateShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\TerminateShipmentRequest $request
     * @return \Dpd\StructType\TerminateShipment
     */
    public function setRequest(\Dpd\StructType\TerminateShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
