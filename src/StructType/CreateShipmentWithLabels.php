<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabels StructType
 * @subpackage Structs
 */
class CreateShipmentWithLabels extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\StdShipmentLabelRequest
     */
    public $request;
    /**
     * Constructor method for CreateShipmentWithLabels
     * @uses CreateShipmentWithLabels::setRequest()
     * @param \StructType\StdShipmentLabelRequest $request
     */
    public function __construct(\StructType\StdShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\StdShipmentLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\StdShipmentLabelRequest $request
     * @return \StructType\CreateShipmentWithLabels
     */
    public function setRequest(\StructType\StdShipmentLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
