<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipment StructType
 * @subpackage Structs
 */
class CreateShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\StdShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateShipment
     * @uses CreateShipment::setRequest()
     * @param \StructType\StdShipmentRequest $request
     */
    public function __construct(\StructType\StdShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\StdShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\StdShipmentRequest $request
     * @return \StructType\CreateShipment
     */
    public function setRequest(\StructType\StdShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
