<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiServices StructType
 * @subpackage Structs
 */
class MultiServices extends ServiceBaseList
{
    /**
     * The consolidation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Consolidation
     */
    public $consolidation;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Contact
     */
    public $contact;
    /**
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PickupData
     */
    public $pickupAtCustomer;
    /**
     * Constructor method for MultiServices
     * @uses MultiServices::setConsolidation()
     * @uses MultiServices::setContact()
     * @uses MultiServices::setPickupAtCustomer()
     * @param \StructType\Consolidation $consolidation
     * @param \StructType\Contact $contact
     * @param \StructType\PickupData $pickupAtCustomer
     */
    public function __construct(\StructType\Consolidation $consolidation = null, \StructType\Contact $contact = null, \StructType\PickupData $pickupAtCustomer = null)
    {
        $this
            ->setConsolidation($consolidation)
            ->setContact($contact)
            ->setPickupAtCustomer($pickupAtCustomer);
    }
    /**
     * Get consolidation value
     * @return \StructType\Consolidation|null
     */
    public function getConsolidation()
    {
        return $this->consolidation;
    }
    /**
     * Set consolidation value
     * @param \StructType\Consolidation $consolidation
     * @return \StructType\MultiServices
     */
    public function setConsolidation(\StructType\Consolidation $consolidation = null)
    {
        $this->consolidation = $consolidation;
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
     * @return \StructType\MultiServices
     */
    public function setContact(\StructType\Contact $contact = null)
    {
        $this->contact = $contact;
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
     * @return \StructType\MultiServices
     */
    public function setPickupAtCustomer(\StructType\PickupData $pickupAtCustomer = null)
    {
        $this->pickupAtCustomer = $pickupAtCustomer;
        return $this;
    }
}
