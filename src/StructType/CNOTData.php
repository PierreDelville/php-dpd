<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CNOTData StructType
 * @subpackage Structs
 */
class CNOTData extends AbstractStructBase
{
    /**
     * The Depot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Depot;
    /**
     * The TimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TimeStamp;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HardwareId;
    /**
     * The TourNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TourNumber;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Tasks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTask
     */
    public $Tasks;
    /**
     * The Locations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfLocation
     */
    public $Locations;
    /**
     * The PhoneCalls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfPhoneCall
     */
    public $PhoneCalls;
    /**
     * Constructor method for CNOTData
     * @uses CNOTData::setDepot()
     * @uses CNOTData::setTimeStamp()
     * @uses CNOTData::setHardwareId()
     * @uses CNOTData::setTourNumber()
     * @uses CNOTData::setStatus()
     * @uses CNOTData::setTasks()
     * @uses CNOTData::setLocations()
     * @uses CNOTData::setPhoneCalls()
     * @param int $depot
     * @param string $timeStamp
     * @param string $hardwareId
     * @param string $tourNumber
     * @param string $status
     * @param \ArrayType\ArrayOfTask $tasks
     * @param \ArrayType\ArrayOfLocation $locations
     * @param \ArrayType\ArrayOfPhoneCall $phoneCalls
     */
    public function __construct($depot = null, $timeStamp = null, $hardwareId = null, $tourNumber = null, $status = null, \ArrayType\ArrayOfTask $tasks = null, \ArrayType\ArrayOfLocation $locations = null, \ArrayType\ArrayOfPhoneCall $phoneCalls = null)
    {
        $this
            ->setDepot($depot)
            ->setTimeStamp($timeStamp)
            ->setHardwareId($hardwareId)
            ->setTourNumber($tourNumber)
            ->setStatus($status)
            ->setTasks($tasks)
            ->setLocations($locations)
            ->setPhoneCalls($phoneCalls);
    }
    /**
     * Get Depot value
     * @return int
     */
    public function getDepot()
    {
        return $this->Depot;
    }
    /**
     * Set Depot value
     * @param int $depot
     * @return \StructType\CNOTData
     */
    public function setDepot($depot = null)
    {
        // validation for constraint: int
        if (!is_null($depot) && !(is_int($depot) || ctype_digit($depot))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depot, true), gettype($depot)), __LINE__);
        }
        $this->Depot = $depot;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \StructType\CNOTData
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get HardwareId value
     * @return string|null
     */
    public function getHardwareId()
    {
        return $this->HardwareId;
    }
    /**
     * Set HardwareId value
     * @param string $hardwareId
     * @return \StructType\CNOTData
     */
    public function setHardwareId($hardwareId = null)
    {
        // validation for constraint: string
        if (!is_null($hardwareId) && !is_string($hardwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareId, true), gettype($hardwareId)), __LINE__);
        }
        $this->HardwareId = $hardwareId;
        return $this;
    }
    /**
     * Get TourNumber value
     * @return string|null
     */
    public function getTourNumber()
    {
        return $this->TourNumber;
    }
    /**
     * Set TourNumber value
     * @param string $tourNumber
     * @return \StructType\CNOTData
     */
    public function setTourNumber($tourNumber = null)
    {
        // validation for constraint: string
        if (!is_null($tourNumber) && !is_string($tourNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourNumber, true), gettype($tourNumber)), __LINE__);
        }
        $this->TourNumber = $tourNumber;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\CNOTData
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Tasks value
     * @return \ArrayType\ArrayOfTask|null
     */
    public function getTasks()
    {
        return $this->Tasks;
    }
    /**
     * Set Tasks value
     * @param \ArrayType\ArrayOfTask $tasks
     * @return \StructType\CNOTData
     */
    public function setTasks(\ArrayType\ArrayOfTask $tasks = null)
    {
        $this->Tasks = $tasks;
        return $this;
    }
    /**
     * Get Locations value
     * @return \ArrayType\ArrayOfLocation|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }
    /**
     * Set Locations value
     * @param \ArrayType\ArrayOfLocation $locations
     * @return \StructType\CNOTData
     */
    public function setLocations(\ArrayType\ArrayOfLocation $locations = null)
    {
        $this->Locations = $locations;
        return $this;
    }
    /**
     * Get PhoneCalls value
     * @return \ArrayType\ArrayOfPhoneCall|null
     */
    public function getPhoneCalls()
    {
        return $this->PhoneCalls;
    }
    /**
     * Set PhoneCalls value
     * @param \ArrayType\ArrayOfPhoneCall $phoneCalls
     * @return \StructType\CNOTData
     */
    public function setPhoneCalls(\ArrayType\ArrayOfPhoneCall $phoneCalls = null)
    {
        $this->PhoneCalls = $phoneCalls;
        return $this;
    }
}
