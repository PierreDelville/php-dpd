<?php

namespace StructType;

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
     * Constructor method for ReverseInverseServices
     * @uses ReverseInverseServices::setExtraInsurance()
     * @uses ReverseInverseServices::setContact()
     * @param \StructType\ExtraInsurance $extraInsurance
     * @param \StructType\Contact $contact
     */
    public function __construct(\StructType\ExtraInsurance $extraInsurance = null, \StructType\Contact $contact = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setContact($contact);
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
     * @return \StructType\ReverseInverseServices
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
     * @return \StructType\ReverseInverseServices
     */
    public function setContact(\StructType\Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}
