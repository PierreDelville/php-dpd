<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsBc StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipmentWithLabelsBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ReverseShipmentLabelRequest
     */
    public $request;
    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsBc
     * @uses CreateReverseInverseShipmentWithLabelsBc::setRequest()
     * @param \Dpd\StructType\ReverseShipmentLabelRequest $request
     */
    public function __construct(\Dpd\StructType\ReverseShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ReverseShipmentLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ReverseShipmentLabelRequest $request
     * @return \Dpd\StructType\CreateReverseInverseShipmentWithLabelsBc
     */
    public function setRequest(\Dpd\StructType\ReverseShipmentLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
