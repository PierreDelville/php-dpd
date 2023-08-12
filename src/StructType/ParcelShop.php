<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelShop StructType
 * @subpackage Structs
 */
class ParcelShop extends DefaultService
{
    /**
     * The shopaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ShopAddress
     */
    public $shopaddress;
    /**
     * Constructor method for ParcelShop
     * @uses ParcelShop::setShopaddress()
     * @param \Dpd\StructType\ShopAddress $shopaddress
     */
    public function __construct(\Dpd\StructType\ShopAddress $shopaddress = null)
    {
        $this
            ->setShopaddress($shopaddress);
    }
    /**
     * Get shopaddress value
     * @return \Dpd\StructType\ShopAddress|null
     */
    public function getShopaddress()
    {
        return $this->shopaddress;
    }
    /**
     * Set shopaddress value
     * @param \Dpd\StructType\ShopAddress $shopaddress
     * @return \Dpd\StructType\ParcelShop
     */
    public function setShopaddress(\Dpd\StructType\ShopAddress $shopaddress = null)
    {
        $this->shopaddress = $shopaddress;
        return $this;
    }
}
