<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShopAddress StructType
 * @subpackage Structs
 */
class ShopAddress extends Address
{
    /**
     * The shopid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $shopid;
    /**
     * Constructor method for ShopAddress
     * @uses ShopAddress::setShopid()
     * @param string $shopid
     */
    public function __construct($shopid = null)
    {
        $this
            ->setShopid($shopid);
    }
    /**
     * Get shopid value
     * @return string|null
     */
    public function getShopid()
    {
        return $this->shopid;
    }
    /**
     * Set shopid value
     * @param string $shopid
     * @return \Dpd\StructType\ShopAddress
     */
    public function setShopid($shopid = null)
    {
        // validation for constraint: string
        if (!is_null($shopid) && !is_string($shopid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopid, true), gettype($shopid)), __LINE__);
        }
        $this->shopid = $shopid;
        return $this;
    }
}
