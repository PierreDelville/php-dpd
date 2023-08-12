<?php

namespace StructType;

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
     * @var \StructType\GetAllServiceNoticesResponse
     */
    public $GetAllServiceNoticesResult;
    /**
     * The ServiceNotices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfServiceNoticeEntry
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
     * @param \StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult
     * @param \ArrayType\ArrayOfServiceNoticeEntry $serviceNotices
     * @param string $lastKey
     */
    public function __construct($dataComplete = null, \StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult = null, \ArrayType\ArrayOfServiceNoticeEntry $serviceNotices = null, $lastKey = null)
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
     * @return \StructType\GetAllServiceNoticesResponse
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
     * @return \StructType\GetAllServiceNoticesResponse|null
     */
    public function getGetAllServiceNoticesResult()
    {
        return $this->GetAllServiceNoticesResult;
    }
    /**
     * Set GetAllServiceNoticesResult value
     * @param \StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult
     * @return \StructType\GetAllServiceNoticesResponse
     */
    public function setGetAllServiceNoticesResult(\StructType\GetAllServiceNoticesResponse $getAllServiceNoticesResult = null)
    {
        $this->GetAllServiceNoticesResult = $getAllServiceNoticesResult;
        return $this;
    }
    /**
     * Get ServiceNotices value
     * @return \ArrayType\ArrayOfServiceNoticeEntry|null
     */
    public function getServiceNotices()
    {
        return $this->ServiceNotices;
    }
    /**
     * Set ServiceNotices value
     * @param \ArrayType\ArrayOfServiceNoticeEntry $serviceNotices
     * @return \StructType\GetAllServiceNoticesResponse
     */
    public function setServiceNotices(\ArrayType\ArrayOfServiceNoticeEntry $serviceNotices = null)
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
     * @return \StructType\GetAllServiceNoticesResponse
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
