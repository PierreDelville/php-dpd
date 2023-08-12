<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentData StructType
 * @subpackage Structs
 */
class GetRetourShipmentData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RetourShipmentRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourShipmentData
     * @uses GetRetourShipmentData::setRequest()
     * @param \StructType\RetourShipmentRequest $request
     */
    public function __construct(\StructType\RetourShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\RetourShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\RetourShipmentRequest $request
     * @return \StructType\GetRetourShipmentData
     */
    public function setRequest(\StructType\RetourShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
