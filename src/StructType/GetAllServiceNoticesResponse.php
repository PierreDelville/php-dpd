<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServiceNoticesResponse StructType
 * @subpackage Structs
 */
class GetAllServiceNoticesResponse extends AbstractStructBase
{
    /**
     * The DataComplete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $DataComplete;
    /**
     * The GetAllServiceNoticesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetAllServiceNoticesResponse
     */
    public $GetAllServiceNoticesResult;
    /**
     * The ServiceNotices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfServiceNoticeEntry
     */
    public $ServiceNotices;
    /**
     * The LastKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastKey;
    /**
     * Constructor method for GetAllServiceNoticesResponse
     * @uses GetAllServiceNoticesResponse::setDataComplete()
     * @uses GetAllServiceNoticesResponse::setGetAllServiceNoticesResult()
     * @uses GetAllServiceNoticesResponse::setServiceNotices()
     * @uses GetAllServiceNoticesResponse::setLastKey()
     * @param bool $dataComplete
     * @param \Dpd\StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult
     * @param \Dpd\ArrayType\ArrayOfServiceNoticeEntry $serviceNotices
     * @param string $lastKey
     */
    public function __construct($dataComplete = null, \Dpd\StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult = null, \Dpd\ArrayType\ArrayOfServiceNoticeEntry $serviceNotices = null, $lastKey = null)
    {
        $this
            ->setDataComplete($dataComplete)
            ->setGetAllServiceNoticesResult($getAllServiceNoticesResult)
            ->setServiceNotices($serviceNotices)
            ->setLastKey($lastKey);
    }
    /**
     * Get DataComplete value
     * @return bool
     */
    public function getDataComplete()
    {
        return $this->DataComplete;
    }
    /**
     * Set DataComplete value
     * @param bool $dataComplete
     * @return \Dpd\StructType\GetAllServiceNoticesResponse
     */
    public function setDataComplete($dataComplete = null)
    {
        // validation for constraint: boolean
        if (!is_null($dataComplete) && !is_bool($dataComplete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dataComplete, true), gettype($dataComplete)), __LINE__);
        }
        $this->DataComplete = $dataComplete;
        return $this;
    }
    /**
     * Get GetAllServiceNoticesResult value
     * @return \Dpd\StructType\GetAllServiceNoticesResponse|null
     */
    public function getGetAllServiceNoticesResult()
    {
        return $this->GetAllServiceNoticesResult;
    }
    /**
     * Set GetAllServiceNoticesResult value
     * @param \Dpd\StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult
     * @return \Dpd\StructType\GetAllServiceNoticesResponse
     */
    public function setGetAllServiceNoticesResult(\Dpd\StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult = null)
    {
        $this->GetAllServiceNoticesResult = $getAllServiceNoticesResult;
        return $this;
    }
    /**
     * Get ServiceNotices value
     * @return \Dpd\ArrayType\ArrayOfServiceNoticeEntry|null
     */
    public function getServiceNotices()
    {
        return $this->ServiceNotices;
    }
    /**
     * Set ServiceNotices value
     * @param \Dpd\ArrayType\ArrayOfServiceNoticeEntry $serviceNotices
     * @return \Dpd\StructType\GetAllServiceNoticesResponse
     */
    public function setServiceNotices(\Dpd\ArrayType\ArrayOfServiceNoticeEntry $serviceNotices = null)
    {
        $this->ServiceNotices = $serviceNotices;
        return $this;
    }
    /**
     * Get LastKey value
     * @return string|null
     */
    public function getLastKey()
    {
        return $this->LastKey;
    }
    /**
     * Set LastKey value
     * @param string $lastKey
     * @return \Dpd\StructType\GetAllServiceNoticesResponse
     */
    public function setLastKey($lastKey = null)
    {
        // validation for constraint: string
        if (!is_null($lastKey) && !is_string($lastKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastKey, true), gettype($lastKey)), __LINE__);
        }
        $this->LastKey = $lastKey;
        return $this;
    }
}
