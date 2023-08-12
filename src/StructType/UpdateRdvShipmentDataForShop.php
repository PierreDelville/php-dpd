<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\UpdateRdvShipmentDataForShopRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForShop
     * @uses UpdateRdvShipmentDataForShop::setRequest()
     * @param \Dpd\StructType\UpdateRdvShipmentDataForShopRequest $request
     */
    public function __construct(\Dpd\StructType\UpdateRdvShipmentDataForShopRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\UpdateRdvShipmentDataForShopRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\UpdateRdvShipmentDataForShopRequest $request
     * @return \Dpd\StructType\UpdateRdvShipmentDataForShop
     */
    public function setRequest(\Dpd\StructType\UpdateRdvShipmentDataForShopRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
