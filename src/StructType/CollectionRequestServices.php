<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ExtraInsurance
     */
    public $extraInsurance;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ContactCollectionRequest
     */
    public $contact;
    /**
     * Constructor method for CollectionRequestServices
     * @uses CollectionRequestServices::setExtraInsurance()
     * @uses CollectionRequestServices::setContact()
     * @param \Dpd\StructType\ExtraInsurance $extraInsurance
     * @param \Dpd\StructType\ContactCollectionRequest $contact
     */
    public function __construct(\Dpd\StructType\ExtraInsurance $extraInsurance = null, \Dpd\StructType\ContactCollectionRequest $contact = null)
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
     * @return \Dpd\StructType\CollectionRequestServices
     */
    public function setExtraInsurance(\Dpd\StructType\ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
    /**
     * Get contact value
     * @return \Dpd\StructType\ContactCollectionRequest|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param \Dpd\StructType\ContactCollectionRequest $contact
     * @return \Dpd\StructType\CollectionRequestServices
     */
    public function setContact(\Dpd\StructType\ContactCollectionRequest $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}
