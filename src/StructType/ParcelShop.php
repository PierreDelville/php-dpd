<?php

namespace StructType;

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
     * @var \StructType\ShopAddress
     */
    public $shopaddress;
    /**
     * Constructor method for ParcelShop
     * @uses ParcelShop::setShopaddress()
     * @param \StructType\ShopAddress $shopaddress
     */
    public function __construct(\StructType\ShopAddress $shopaddress = null)
    {
        $this
            ->setShopaddress($shopaddress);
    }
    /**
     * Get shopaddress value
     * @return \StructType\ShopAddress|null
     */
    public function getShopaddress()
    {
        return $this->shopaddress;
    }
    /**
     * Set shopaddress value
     * @param \StructType\ShopAddress $shopaddress
     * @return \StructType\ParcelShop
     */
    public function setShopaddress(\StructType\ShopAddress $shopaddress = null)
    {
        $this->shopaddress = $shopaddress;
        return $this;
    }
}
