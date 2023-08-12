<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseInverseServices StructType
 * @subpackage Structs
 */
class ReverseInverseServices extends ServiceBaseList
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
     * Constructor method for ReverseInverseServices
     * @uses ReverseInverseServices::setExtraInsurance()
     * @uses ReverseInverseServices::setContact()
     * @param \Dpd\StructType\ExtraInsurance $extraInsurance
     * @param \Dpd\StructType\Contact $contact
     */
    public function __construct(\Dpd\StructType\ExtraInsurance $extraInsurance = null, \Dpd\StructType\Contact $contact = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setContact($contact);
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
     * @return \Dpd\StructType\ReverseInverseServices
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
     * @return \Dpd\StructType\ReverseInverseServices
     */
    public function setContact(\Dpd\StructType\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}
