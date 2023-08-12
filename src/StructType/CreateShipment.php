<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\StdShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateShipment
     * @uses CreateShipment::setRequest()
     * @param \Dpd\StructType\StdShipmentRequest $request
     */
    public function __construct(\Dpd\StructType\StdShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\StdShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\StdShipmentRequest $request
     * @return \Dpd\StructType\CreateShipment
     */
    public function setRequest(\Dpd\StructType\StdShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
