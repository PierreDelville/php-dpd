<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentBc StructType
 * @subpackage Structs
 */
class CreateShipmentBc extends AbstractStructBase
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
     * Constructor method for CreateShipmentBc
     * @uses CreateShipmentBc::setRequest()
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
     * @return \StructType\CreateShipmentBc
     */
    public function setRequest(\StructType\StdShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
