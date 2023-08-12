<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StdServices StructType
 * @subpackage Structs
 */
class StdServices extends StdServicesBase
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ExtraInsurance
     */
    public $extraInsurance;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Contact
     */
    public $contact;
    /**
     * The parcelshop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ParcelShop
     */
    public $parcelshop;
    /**
     * The reverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Reverse
     */
    public $reverse;
    /**
     * The reverseInverseReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ReverseInverseReturn
     */
    public $reverseInverseReturn;
    /**
     * The reversInverseBcReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ReverseInverseReturnBc
     */
    public $reversInverseBcReturn;
    /**
     * The autoConsolidation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\AutoConsolidation
     */
    public $autoConsolidation;
    /**
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\PickupData
     */
    public $pickupAtCustomer;
    /**
     * The bic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Bic3
     */
    public $bic3;
    /**
     * The sameday
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Sameday
     */
    public $sameday;
    /**
     * Constructor method for StdServices
     * @uses StdServices::setExtraInsurance()
     * @uses StdServices::setContact()
     * @uses StdServices::setParcelshop()
     * @uses StdServices::setReverse()
     * @uses StdServices::setReverseInverseReturn()
     * @uses StdServices::setReversInverseBcReturn()
     * @uses StdServices::setAutoConsolidation()
     * @uses StdServices::setPickupAtCustomer()
     * @uses StdServices::setBic3()
     * @uses StdServices::setSameday()
     * @param \Dpd\StructType\ExtraInsurance $extraInsurance
     * @param \Dpd\StructType\Contact $contact
     * @param \Dpd\StructType\ParcelShop $parcelshop
     * @param \Dpd\StructType\Reverse $reverse
     * @param \Dpd\StructType\ReverseInverseReturn $reverseInverseReturn
     * @param \Dpd\StructType\ReverseInverseReturnBc $reversInverseBcReturn
     * @param \Dpd\StructType\AutoConsolidation $autoConsolidation
     * @param \Dpd\StructType\PickupData $pickupAtCustomer
     * @param \Dpd\StructType\Bic3 $bic3
     * @param \Dpd\StructType\Sameday $sameday
     */
    public function __construct(\Dpd\StructType\ExtraInsurance $extraInsurance = null, \Dpd\StructType\Contact $contact = null, \Dpd\StructType\ParcelShop $parcelshop = null, \Dpd\StructType\Reverse $reverse = null, \Dpd\StructType\ReverseInverseReturn $reverseInverseReturn = null, \Dpd\StructType\ReverseInverseReturnBc $reversInverseBcReturn = null, \Dpd\StructType\AutoConsolidation $autoConsolidation = null, \Dpd\StructType\PickupData $pickupAtCustomer = null, \Dpd\StructType\Bic3 $bic3 = null, \Dpd\StructType\Sameday $sameday = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setContact($contact)
            ->setParcelshop($parcelshop)
            ->setReverse($reverse)
            ->setReverseInverseReturn($reverseInverseReturn)
            ->setReversInverseBcReturn($reversInverseBcReturn)
            ->setAutoConsolidation($autoConsolidation)
            ->setPickupAtCustomer($pickupAtCustomer)
            ->setBic3($bic3)
            ->setSameday($sameday);
    }
    /**
     * Get extraInsurance value
     * @return \Dpd\StructType\ExtraInsurance|null
     */
    public function getExtraInsurance()
    {
        return $this->extraInsurance;
    }
    /**
     * Set extraInsurance value
     * @param \Dpd\StructType\ExtraInsurance $extraInsurance
     * @return \Dpd\StructType\StdServices
     */
    public function setExtraInsurance(\Dpd\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
    /**
     * Get contact value
     * @return \Dpd\StructType\Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param \Dpd\StructType\Contact $contact
     * @return \Dpd\StructType\StdServices
     */
    public function setContact(\Dpd\StructType\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
    /**
     * Get parcelshop value
     * @return \Dpd\StructType\ParcelShop|null
     */
    public function getParcelshop()
    {
        return $this->parcelshop;
    }
    /**
     * Set parcelshop value
     * @param \Dpd\StructType\ParcelShop $parcelshop
     * @return \Dpd\StructType\StdServices
     */
    public function setParcelshop(\Dpd\StructType\ParcelShop $parcelshop = null)
    {
        $this->parcelshop = $parcelshop;
        return $this;
    }
    /**
     * Get reverse value
     * @return \Dpd\StructType\Reverse|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param \Dpd\StructType\Reverse $reverse
     * @return \Dpd\StructType\StdServices
     */
    public function setReverse(\Dpd\StructType\Reverse $reverse = null)
    {
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Get reverseInverseReturn value
     * @return \Dpd\StructType\ReverseInverseReturn|null
     */
    public function getReverseInverseReturn()
    {
        return $this->reverseInverseReturn;
    }
    /**
     * Set reverseInverseReturn value
     * @param \Dpd\StructType\ReverseInverseReturn $reverseInverseReturn
     * @return \Dpd\StructType\StdServices
     */
    public function setReverseInverseReturn(\Dpd\StructType\ReverseInverseReturn $reverseInverseReturn = null)
    {
        $this->reverseInverseReturn = $reverseInverseReturn;
        return $this;
    }
    /**
     * Get reversInverseBcReturn value
     * @return \Dpd\StructType\ReverseInverseReturnBc|null
     */
    public function getReversInverseBcReturn()
    {
        return $this->reversInverseBcReturn;
    }
    /**
     * Set reversInverseBcReturn value
     * @param \Dpd\StructType\ReverseInverseReturnBc $reversInverseBcReturn
     * @return \Dpd\StructType\StdServices
     */
    public function setReversInverseBcReturn(\Dpd\StructType\ReverseInverseReturnBc $reversInverseBcReturn = null)
    {
        $this->reversInverseBcReturn = $reversInverseBcReturn;
        return $this;
    }
    /**
     * Get autoConsolidation value
     * @return \Dpd\StructType\AutoConsolidation|null
     */
    public function getAutoConsolidation()
    {
        return $this->autoConsolidation;
    }
    /**
     * Set autoConsolidation value
     * @param \Dpd\StructType\AutoConsolidation $autoConsolidation
     * @return \Dpd\StructType\StdServices
     */
    public function setAutoConsolidation(\Dpd\StructType\AutoConsolidation $autoConsolidation = null)
    {
        $this->autoConsolidation = $autoConsolidation;
        return $this;
    }
    /**
     * Get pickupAtCustomer value
     * @return \Dpd\StructType\PickupData|null
     */
    public function getPickupAtCustomer()
    {
        return $this->pickupAtCustomer;
    }
    /**
     * Set pickupAtCustomer value
     * @param \Dpd\StructType\PickupData $pickupAtCustomer
     * @return \Dpd\StructType\StdServices
     */
    public function setPickupAtCustomer(\Dpd\StructType\PickupData $pickupAtCustomer = null)
    {
        $this->pickupAtCustomer = $pickupAtCustomer;
        return $this;
    }
    /**
     * Get bic3 value
     * @return \Dpd\StructType\Bic3|null
     */
    public function getBic3()
    {
        return $this->bic3;
    }
    /**
     * Set bic3 value
     * @param \Dpd\StructType\Bic3 $bic3
     * @return \Dpd\StructType\StdServices
     */
    public function setBic3(\Dpd\StructType\Bic3 $bic3 = null)
    {
        $this->bic3 = $bic3;
        return $this;
    }
    /**
     * Get sameday value
     * @return \Dpd\StructType\Sameday|null
     */
    public function getSameday()
    {
        return $this->sameday;
    }
    /**
     * Set sameday value
     * @param \Dpd\StructType\Sameday $sameday
     * @return \Dpd\StructType\StdServices
     */
    public function setSameday(\Dpd\StructType\Sameday $sameday = null)
    {
        $this->sameday = $sameday;
        return $this;
    }
}
