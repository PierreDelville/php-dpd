<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForShop StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataForShop extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\UpdateRdvShipmentDataForShopRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForShop
     * @uses UpdateRdvShipmentDataForShop::setRequest()
     * @param \StructType\UpdateRdvShipmentDataForShopRequest $request
     */
    public function __construct(\StructType\UpdateRdvShipmentDataForShopRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\UpdateRdvShipmentDataForShopRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\UpdateRdvShipmentDataForShopRequest $request
     * @return \StructType\UpdateRdvShipmentDataForShop
     */
    public function setRequest(\StructType\UpdateRdvShipmentDataForShopRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
