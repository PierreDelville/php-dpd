<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetShipmentBcMultiRequest
     */
    public $request;
    /**
     * Constructor method for GetShipmentBcMulti
     * @uses GetShipmentBcMulti::setRequest()
     * @param \Dpd\StructType\GetShipmentBcMultiRequest $request
     */
    public function __construct(\Dpd\StructType\GetShipmentBcMultiRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetShipmentBcMultiRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetShipmentBcMultiRequest $request
     * @return \Dpd\StructType\GetShipmentBcMulti
     */
    public function setRequest(\Dpd\StructType\GetShipmentBcMultiRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
