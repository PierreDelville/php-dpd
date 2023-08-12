<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\MultiShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateMultiShipmentBc
     * @uses CreateMultiShipmentBc::setRequest()
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
     * @return \Dpd\StructType\CreateMultiShipmentBc
     */
    public function setRequest(\Dpd\StructType\MultiShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
