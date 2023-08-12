<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RetourShipmentRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourShipmentData
     * @uses GetRetourShipmentData::setRequest()
     * @param \Dpd\StructType\RetourShipmentRequest $request
     */
    public function __construct(\Dpd\StructType\RetourShipmentRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\RetourShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\RetourShipmentRequest $request
     * @return \Dpd\StructType\GetRetourShipmentData
     */
    public function setRequest(\Dpd\StructType\RetourShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
