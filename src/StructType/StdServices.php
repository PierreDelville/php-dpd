<?php

namespace StructType;

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
     * @var \StructType\ExtraInsurance
     */
    public $extraInsurance;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Contact
     */
    public $contact;
    /**
     * The parcelshop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ParcelShop
     */
    public $parcelshop;
    /**
     * The reverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Reverse
     */
    public $reverse;
    /**
     * The reverseInverseReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReverseInverseReturn
     */
    public $reverseInverseReturn;
    /**
     * The reversInverseBcReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReverseInverseReturnBc
     */
    public $reversInverseBcReturn;
    /**
     * The autoConsolidation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AutoConsolidation
     */
    public $autoConsolidation;
    /**
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PickupData
     */
    public $pickupAtCustomer;
    /**
     * The bic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Bic3
     */
    public $bic3;
    /**
     * The sameday
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Sameday
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
     * @param \StructType\ExtraInsurance $extraInsurance
     * @param \StructType\Contact $contact
     * @param \StructType\ParcelShop $parcelshop
     * @param \StructType\Reverse $reverse
     * @param \StructType\ReverseInverseReturn $reverseInverseReturn
     * @param \StructType\ReverseInverseReturnBc $reversInverseBcReturn
     * @param \StructType\AutoConsolidation $autoConsolidation
     * @param \StructType\PickupData $pickupAtCustomer
     * @param \StructType\Bic3 $bic3
     * @param \StructType\Sameday $sameday
     */
    public function __construct(\StructType\ExtraInsurance $extraInsurance = null, \StructType\Contact $contact = null, \StructType\ParcelShop $parcelshop = null, \StructType\Reverse $reverse = null, \StructType\ReverseInverseReturn $reverseInverseReturn = null, \StructType\ReverseInverseReturnBc $reversInverseBcReturn = null, \StructType\AutoConsolidation $autoConsolidation = null, \StructType\PickupData $pickupAtCustomer = null, \StructType\Bic3 $bic3 = null, \StructType\Sameday $sameday = null)
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
     * @return \StructType\ExtraInsurance|null
     */
    public function getExtraInsurance()
    {
        return $this->extraInsurance;
    }
    /**
     * Set extraInsurance value
     * @param \StructType\ExtraInsurance $extraInsurance
     * @return \StructType\StdServices
     */
    public function setExtraInsurance(\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
    /**
     * Get contact value
     * @return \StructType\Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param \StructType\Contact $contact
     * @return \StructType\StdServices
     */
    public function setContact(\StructType\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
    /**
     * Get parcelshop value
     * @return \StructType\ParcelShop|null
     */
    public function getParcelshop()
    {
        return $this->parcelshop;
    }
    /**
     * Set parcelshop value
     * @param \StructType\ParcelShop $parcelshop
     * @return \StructType\StdServices
     */
    public function setParcelshop(\StructType\ParcelShop $parcelshop = null)
    {
        $this->parcelshop = $parcelshop;
        return $this;
    }
    /**
     * Get reverse value
     * @return \StructType\Reverse|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param \StructType\Reverse $reverse
     * @return \StructType\StdServices
     */
    public function setReverse(\StructType\Reverse $reverse = null)
    {
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Get reverseInverseReturn value
     * @return \StructType\ReverseInverseReturn|null
     */
    public function getReverseInverseReturn()
    {
        return $this->reverseInverseReturn;
    }
    /**
     * Set reverseInverseReturn value
     * @param \StructType\ReverseInverseReturn $reverseInverseReturn
     * @return \StructType\StdServices
     */
    public function setReverseInverseReturn(\StructType\ReverseInverseReturn $reverseInverseReturn = null)
    {
        $this->reverseInverseReturn = $reverseInverseReturn;
        return $this;
    }
    /**
     * Get reversInverseBcReturn value
     * @return \StructType\ReverseInverseReturnBc|null
     */
    public function getReversInverseBcReturn()
    {
        return $this->reversInverseBcReturn;
    }
    /**
     * Set reversInverseBcReturn value
     * @param \StructType\ReverseInverseReturnBc $reversInverseBcReturn
     * @return \StructType\StdServices
     */
    public function setReversInverseBcReturn(\StructType\ReverseInverseReturnBc $reversInverseBcReturn = null)
    {
        $this->reversInverseBcReturn = $reversInverseBcReturn;
        return $this;
    }
    /**
     * Get autoConsolidation value
     * @return \StructType\AutoConsolidation|null
     */
    public function getAutoConsolidation()
    {
        return $this->autoConsolidation;
    }
    /**
     * Set autoConsolidation value
     * @param \StructType\AutoConsolidation $autoConsolidation
     * @return \StructType\StdServices
     */
    public function setAutoConsolidation(\StructType\AutoConsolidation $autoConsolidation = null)
    {
        $this->autoConsolidation = $autoConsolidation;
        return $this;
    }
    /**
     * Get pickupAtCustomer value
     * @return \StructType\PickupData|null
     */
    public function getPickupAtCustomer()
    {
        return $this->pickupAtCustomer;
    }
    /**
     * Set pickupAtCustomer value
     * @param \StructType\PickupData $pickupAtCustomer
     * @return \StructType\StdServices
     */
    public function setPickupAtCustomer(\StructType\PickupData $pickupAtCustomer = null)
    {
        $this->pickupAtCustomer = $pickupAtCustomer;
        return $this;
    }
    /**
     * Get bic3 value
     * @return \StructType\Bic3|null
     */
    public function getBic3()
    {
        return $this->bic3;
    }
    /**
     * Set bic3 value
     * @param \StructType\Bic3 $bic3
     * @return \StructType\StdServices
     */
    public function setBic3(\StructType\Bic3 $bic3 = null)
    {
        $this->bic3 = $bic3;
        return $this;
    }
    /**
     * Get sameday value
     * @return \StructType\Sameday|null
     */
    public function getSameday()
    {
        return $this->sameday;
    }
    /**
     * Set sameday value
     * @param \StructType\Sameday $sameday
     * @return \StructType\StdServices
     */
    public function setSameday(\StructType\Sameday $sameday = null)
    {
        $this->sameday = $sameday;
        return $this;
    }
}
