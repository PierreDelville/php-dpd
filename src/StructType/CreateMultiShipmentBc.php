<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentBc StructType
 * @subpackage Structs
 */
class CreateMultiShipmentBc extends AbstractStructBase
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
     * Constructor method for CreateMultiShipmentBc
     * @uses CreateMultiShipmentBc::setRequest()
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
     * @return \StructType\CreateMultiShipmentBc
     */
    public function setRequest(\StructType\MultiShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
