<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clsTrace StructType
 * @subpackage Structs
 */
class ClsTrace extends AbstractStructBase
{
    /**
     * The StatusNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $StatusNumber;
    /**
     * The ScanDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScanDate;
    /**
     * The ScanTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScanTime;
    /**
     * The StatusDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StatusDescription;
    /**
     * The CenterName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CenterName;
    /**
     * The CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CenterNumber;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $User;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Remark;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Info;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfClsTraceDetails
     */
    public $Details;
    /**
     * Constructor method for clsTrace
     * @uses ClsTrace::setStatusNumber()
     * @uses ClsTrace::setScanDate()
     * @uses ClsTrace::setScanTime()
     * @uses ClsTrace::setStatusDescription()
     * @uses ClsTrace::setCenterName()
     * @uses ClsTrace::setCenterNumber()
     * @uses ClsTrace::setUser()
     * @uses ClsTrace::setRemark()
     * @uses ClsTrace::setInfo()
     * @uses ClsTrace::setDetails()
     * @param int $statusNumber
     * @param string $scanDate
     * @param string $scanTime
     * @param string $statusDescription
     * @param string $centerName
     * @param string $centerNumber
     * @param string $user
     * @param string $remark
     * @param string $info
     * @param \Dpd\ArrayType\ArrayOfClsTraceDetails $details
     */
    public function __construct($statusNumber = null, $scanDate = null, $scanTime = null, $statusDescription = null, $centerName = null, $centerNumber = null, $user = null, $remark = null, $info = null, \Dpd\ArrayType\ArrayOfClsTraceDetails $details = null)
    {
        $this
            ->setStatusNumber($statusNumber)
            ->setScanDate($scanDate)
            ->setScanTime($scanTime)
            ->setStatusDescription($statusDescription)
            ->setCenterName($centerName)
            ->setCenterNumber($centerNumber)
            ->setUser($user)
            ->setRemark($remark)
            ->setInfo($info)
            ->setDetails($details);
    }
    /**
     * Get StatusNumber value
     * @return int
     */
    public function getStatusNumber()
    {
        return $this->StatusNumber;
    }
    /**
     * Set StatusNumber value
     * @param int $statusNumber
     * @return \Dpd\StructType\ClsTrace
     */
    public function setStatusNumber($statusNumber = null)
    {
        // validation for constraint: int
        if (!is_null($statusNumber) && !(is_int($statusNumber) || ctype_digit($statusNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusNumber, true), gettype($statusNumber)), __LINE__);
        }
        $this->StatusNumber = $statusNumber;
        return $this;
    }
    /**
     * Get ScanDate value
     * @return string|null
     */
    public function getScanDate()
    {
        return $this->ScanDate;
    }
    /**
     * Set ScanDate value
     * @param string $scanDate
     * @return \Dpd\StructType\ClsTrace
     */
    public function setScanDate($scanDate = null)
    {
        // validation for constraint: string
        if (!is_null($scanDate) && !is_string($scanDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scanDate, true), gettype($scanDate)), __LINE__);
        }
        $this->ScanDate = $scanDate;
        return $this;
    }
    /**
     * Get ScanTime value
     * @return string|null
     */
    public function getScanTime()
    {
        return $this->ScanTime;
    }
    /**
     * Set ScanTime value
     * @param string $scanTime
     * @return \Dpd\StructType\ClsTrace
     */
    public function setScanTime($scanTime = null)
    {
        // validation for constraint: string
        if (!is_null($scanTime) && !is_string($scanTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scanTime, true), gettype($scanTime)), __LINE__);
        }
        $this->ScanTime = $scanTime;
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \Dpd\StructType\ClsTrace
     */
    public function setStatusDescription($statusDescription = null)
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusDescription, true), gettype($statusDescription)), __LINE__);
        }
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    /**
     * Get CenterName value
     * @return string|null
     */
    public function getCenterName()
    {
        return $this->CenterName;
    }
    /**
     * Set CenterName value
     * @param string $centerName
     * @return \Dpd\StructType\ClsTrace
     */
    public function setCenterName($centerName = null)
    {
        // validation for constraint: string
        if (!is_null($centerName) && !is_string($centerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centerName, true), gettype($centerName)), __LINE__);
        }
        $this->CenterName = $centerName;
        return $this;
    }
    /**
     * Get CenterNumber value
     * @return string|null
     */
    public function getCenterNumber()
    {
        return $this->CenterNumber;
    }
    /**
     * Set CenterNumber value
     * @param string $centerNumber
     * @return \Dpd\StructType\ClsTrace
     */
    public function setCenterNumber($centerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($centerNumber) && !is_string($centerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centerNumber, true), gettype($centerNumber)), __LINE__);
        }
        $this->CenterNumber = $centerNumber;
        return $this;
    }
    /**
     * Get User value
     * @return string|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param string $user
     * @return \Dpd\StructType\ClsTrace
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->User = $user;
        return $this;
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \Dpd\StructType\ClsTrace
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get Info value
     * @return string|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param string $info
     * @return \Dpd\StructType\ClsTrace
     */
    public function setInfo($info = null)
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        $this->Info = $info;
        return $this;
    }
    /**
     * Get Details value
     * @return \Dpd\ArrayType\ArrayOfClsTraceDetails|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param \Dpd\ArrayType\ArrayOfClsTraceDetails $details
     * @return \Dpd\StructType\ClsTrace
     */
    public function setDetails(\Dpd\ArrayType\ArrayOfClsTraceDetails $details = null)
    {
        $this->Details = $details;
        return $this;
    }
}
