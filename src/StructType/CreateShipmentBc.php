<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\StdShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateShipmentBc
     * @uses CreateShipmentBc::setRequest()
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
     * @return \Dpd\StructType\CreateShipmentBc
     */
    public function setRequest(\Dpd\StructType\StdShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
