<?php

namespace StructType;

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
     * @var \StructType\GetLastNumberResponse
     */
    public $GetLastNumberResult;
    /**
     * The entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfLong
     */
    public $entries;
    /**
     * Constructor method for GetLastNumberResponse
     * @uses GetLastNumberResponse::setGetLastNumberResult()
     * @uses GetLastNumberResponse::setEntries()
     * @param \StructType\GetLastNumberResponse $getLastNumberResult
     * @param \ArrayType\ArrayOfLong $entries
     */
    public function __construct(\StructType\GetLastNumberResponse $getLastNumberResult = null, \ArrayType\ArrayOfLong $entries = null)
    {
        $this
            ->setGetLastNumberResult($getLastNumberResult)
            ->setEntries($entries);
    }
    /**
     * Get GetLastNumberResult value
     * @return \StructType\GetLastNumberResponse|null
     */
    public function getGetLastNumberResult()
    {
        return $this->GetLastNumberResult;
    }
    /**
     * Set GetLastNumberResult value
     * @param \StructType\GetLastNumberResponse $getLastNumberResult
     * @return \StructType\GetLastNumberResponse
     */
    public function setGetLastNumberResult(\StructType\GetLastNumberResponse $getLastNumberResult = null)
    {
        $this->GetLastNumberResult = $getLastNumberResult;
        return $this;
    }
    /**
     * Get entries value
     * @return \ArrayType\ArrayOfLong|null
     */
    public function getEntries()
    {
        return $this->entries;
    }
    /**
     * Set entries value
     * @param \ArrayType\ArrayOfLong $entries
     * @return \StructType\GetLastNumberResponse
     */
    public function setEntries(\ArrayType\ArrayOfLong $entries = null)
    {
        $this->entries = $entries;
        return $this;
    }
}
