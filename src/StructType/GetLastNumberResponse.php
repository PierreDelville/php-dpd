<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumberResponse StructType
 * @subpackage Structs
 */
class GetLastNumberResponse extends AbstractStructBase
{
    /**
     * The GetLastNumberResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\GetLastNumberResponse
     */
    public $GetLastNumberResult;
    /**
     * The entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfLong
     */
    public $entries;
    /**
     * Constructor method for GetLastNumberResponse
     * @uses GetLastNumberResponse::setGetLastNumberResult()
     * @uses GetLastNumberResponse::setEntries()
     * @param \Dpd\StructType\GetLastNumberResponse $getLastNumberResult
     * @param \Dpd\ArrayType\ArrayOfLong $entries
     */
    public function __construct(\Dpd\StructType\GetLastNumberResponse $getLastNumberResult = null, \Dpd\ArrayType\ArrayOfLong $entries = null)
    {
        $this
            ->setGetLastNumberResult($getLastNumberResult)
            ->setEntries($entries);
    }
    /**
     * Get GetLastNumberResult value
     * @return \Dpd\StructType\GetLastNumberResponse|null
     */
    public function getGetLastNumberResult()
    {
        return $this->GetLastNumberResult;
    }
    /**
     * Set GetLastNumberResult value
     * @param \Dpd\StructType\GetLastNumberResponse $getLastNumberResult
     * @return \Dpd\StructType\GetLastNumberResponse
     */
    public function setGetLastNumberResult(\Dpd\StructType\GetLastNumberResponse $getLastNumberResult = null)
    {
        $this->GetLastNumberResult = $getLastNumberResult;
        return $this;
    }
    /**
     * Get entries value
     * @return \Dpd\ArrayType\ArrayOfLong|null
     */
    public function getEntries()
    {
        return $this->entries;
    }
    /**
     * Set entries value
     * @param \Dpd\ArrayType\ArrayOfLong $entries
     * @return \Dpd\StructType\GetLastNumberResponse
     */
    public function setEntries(\Dpd\ArrayType\ArrayOfLong $entries = null)
    {
        $this->entries = $entries;
        return $this;
    }
}
