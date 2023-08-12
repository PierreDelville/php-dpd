<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsBc StructType
 * @subpackage Structs
 */
class CreateShipmentWithLabelsBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\StdShipmentLabelRequest
     */
    public $request;
    /**
     * Constructor method for CreateShipmentWithLabelsBc
     * @uses CreateShipmentWithLabelsBc::setRequest()
     * @param \Dpd\StructType\StdShipmentLabelRequest $request
     */
    public function __construct(\Dpd\StructType\StdShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\StdShipmentLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\StdShipmentLabelRequest $request
     * @return \Dpd\StructType\CreateShipmentWithLabelsBc
     */
    public function setRequest(\Dpd\StructType\StdShipmentLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
