<?php

namespace StructType;

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
     * @var \StructType\CheckIfReverseInverseShipmentExistsRequest
     */
    public $request;
    /**
     * Constructor method for CheckIfReverseInverseShipmentExists
     * @uses CheckIfReverseInverseShipmentExists::setRequest()
     * @param \StructType\CheckIfReverseInverseShipmentExistsRequest $request
     */
    public function __construct(\StructType\CheckIfReverseInverseShipmentExistsRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\CheckIfReverseInverseShipmentExistsRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\CheckIfReverseInverseShipmentExistsRequest $request
     * @return \StructType\CheckIfReverseInverseShipmentExists
     */
    public function setRequest(\StructType\CheckIfReverseInverseShipmentExistsRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
