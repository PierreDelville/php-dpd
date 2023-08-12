<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectionRequestServices StructType
 * @subpackage Structs
 */
class CollectionRequestServices extends ServiceBaseList
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
     * @var \StructType\ContactCollectionRequest
     */
    public $contact;
    /**
     * Constructor method for CollectionRequestServices
     * @uses CollectionRequestServices::setExtraInsurance()
     * @uses CollectionRequestServices::setContact()
     * @param \StructType\ExtraInsurance $extraInsurance
     * @param \StructType\ContactCollectionRequest $contact
     */
    public function __construct(\StructType\ExtraInsurance $extraInsurance = null, \StructType\ContactCollectionRequest $contact = null)
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
     * @return \StructType\CollectionRequestServices
     */
    public function setExtraInsurance(\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
    /**
     * Get contact value
     * @return \StructType\ContactCollectionRequest|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param \StructType\ContactCollectionRequest $contact
     * @return \StructType\CollectionRequestServices
     */
    public function setContact(\StructType\ContactCollectionRequest $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}
