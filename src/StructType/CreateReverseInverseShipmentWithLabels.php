<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabels StructType
 * @subpackage Structs
 */
class CreateReverseInverseShipmentWithLabels extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReverseShipmentLabelRequest
     */
    public $request;
    /**
     * Constructor method for CreateReverseInverseShipmentWithLabels
     * @uses CreateReverseInverseShipmentWithLabels::setRequest()
     * @param \StructType\ReverseShipmentLabelRequest $request
     */
    public function __construct(\StructType\ReverseShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ReverseShipmentLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ReverseShipmentLabelRequest $request
     * @return \StructType\CreateReverseInverseShipmentWithLabels
     */
    public function setRequest(\StructType\ReverseShipmentLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
