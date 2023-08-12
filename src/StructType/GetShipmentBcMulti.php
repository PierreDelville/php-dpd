<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcMulti StructType
 * @subpackage Structs
 */
class GetShipmentBcMulti extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetShipmentBcMultiRequest
     */
    public $request;
    /**
     * Constructor method for GetShipmentBcMulti
     * @uses GetShipmentBcMulti::setRequest()
     * @param \StructType\GetShipmentBcMultiRequest $request
     */
    public function __construct(\StructType\GetShipmentBcMultiRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetShipmentBcMultiRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetShipmentBcMultiRequest $request
     * @return \StructType\GetShipmentBcMulti
     */
    public function setRequest(\StructType\GetShipmentBcMultiRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
