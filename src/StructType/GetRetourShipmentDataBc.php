<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RetourShipmentBcRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourShipmentDataBc
     * @uses GetRetourShipmentDataBc::setRequest()
     * @param \Dpd\StructType\RetourShipmentBcRequest $request
     */
    public function __construct(\Dpd\StructType\RetourShipmentBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\RetourShipmentBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\RetourShipmentBcRequest $request
     * @return \Dpd\StructType\GetRetourShipmentDataBc
     */
    public function setRequest(\Dpd\StructType\RetourShipmentBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
