<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExists StructType
 * @subpackage Structs
 */
class CheckIfReverseInverseShipmentExists extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\CheckIfReverseInverseShipmentExistsRequest
     */
    public $request;
    /**
     * Constructor method for CheckIfReverseInverseShipmentExists
     * @uses CheckIfReverseInverseShipmentExists::setRequest()
     * @param \Dpd\StructType\CheckIfReverseInverseShipmentExistsRequest $request
     */
    public function __construct(\Dpd\StructType\CheckIfReverseInverseShipmentExistsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\CheckIfReverseInverseShipmentExistsRequest $request
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExists
     */
    public function setRequest(\Dpd\StructType\CheckIfReverseInverseShipmentExistsRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
