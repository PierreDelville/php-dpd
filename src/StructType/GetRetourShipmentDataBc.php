<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataBc StructType
 * @subpackage Structs
 */
class GetRetourShipmentDataBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RetourShipmentBcRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourShipmentDataBc
     * @uses GetRetourShipmentDataBc::setRequest()
     * @param \StructType\RetourShipmentBcRequest $request
     */
    public function __construct(\StructType\RetourShipmentBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\RetourShipmentBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\RetourShipmentBcRequest $request
     * @return \StructType\GetRetourShipmentDataBc
     */
    public function setRequest(\StructType\RetourShipmentBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
