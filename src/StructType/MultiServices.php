<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Consolidation
     */
    public $consolidation;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Contact
     */
    public $contact;
    /**
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\PickupData
     */
    public $pickupAtCustomer;
    /**
     * Constructor method for MultiServices
     * @uses MultiServices::setConsolidation()
     * @uses MultiServices::setContact()
     * @uses MultiServices::setPickupAtCustomer()
     * @param \Dpd\StructType\Consolidation $consolidation
     * @param \Dpd\StructType\Contact $contact
     * @param \Dpd\StructType\PickupData $pickupAtCustomer
     */
    public function __construct(\Dpd\StructType\Consolidation $consolidation = null, \Dpd\StructType\Contact $contact = null, \Dpd\StructType\PickupData $pickupAtCustomer = null)
    {
        $this
            ->setConsolidation($consolidation)
            ->setContact($contact)
            ->setPickupAtCustomer($pickupAtCustomer);
    }
    /**
     * Get consolidation value
     * @return \Dpd\StructType\Consolidation|null
     */
    public function getConsolidation()
    {
        return $this->consolidation;
    }
    /**
     * Set consolidation value
     * @param \Dpd\StructType\Consolidation $consolidation
     * @return \Dpd\StructType\MultiServices
     */
    public function setConsolidation(\Dpd\StructType\Consolidation $consolidation = null)
    {
        $this->consolidation = $consolidation;
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
     * @return \Dpd\StructType\MultiServices
     */
    public function setContact(\Dpd\StructType\Contact $contact = null)
    {
        $this->contact = $contact;
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
     * @return \Dpd\StructType\MultiServices
     */
    public function setPickupAtCustomer(\Dpd\StructType\PickupData $pickupAtCustomer = null)
    {
        $this->pickupAtCustomer = $pickupAtCustomer;
        return $this;
    }
}
