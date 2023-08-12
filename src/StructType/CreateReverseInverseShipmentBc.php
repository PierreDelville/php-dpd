<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentBc StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipmentBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ReverseShipmentRequest
     */
    public $request;
    /**
     * Constructor method for CreateReverseInverseShipmentBc
     * @uses CreateReverseInverseShipmentBc::setRequest()
     * @param \Dpd\StructType\ReverseShipmentRequest $request
     */
    public function __construct(\Dpd\StructType\ReverseShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ReverseShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ReverseShipmentRequest $request
     * @return \Dpd\StructType\CreateReverseInverseShipmentBc
     */
    public function setRequest(\Dpd\StructType\ReverseShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
