<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceResponse StructType
 * @subpackage Structs
 */
class GetLastTraceResponse extends GetLastTraceBaseResponse
{
    /**
     * The GetLastTraceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfGetLastTraceResponse
     */
    public $GetLastTraceResult;
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Parcel
     */
    public $Parcel;
    /**
     * Constructor method for GetLastTraceResponse
     * @uses GetLastTraceResponse::setGetLastTraceResult()
     * @uses GetLastTraceResponse::setParcel()
     * @param \ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult
     * @param \StructType\Parcel $parcel
     */
    public function __construct(\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult = null, \StructType\Parcel $parcel = null)
    {
        $this
            ->setGetLastTraceResult($getLastTraceResult)
            ->setParcel($parcel);
    }
    /**
     * Get GetLastTraceResult value
     * @return \ArrayType\ArrayOfGetLastTraceResponse|null
     */
    public function getGetLastTraceResult()
    {
        return $this->GetLastTraceResult;
    }
    /**
     * Set GetLastTraceResult value
     * @param \ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult
     * @return \StructType\GetLastTraceResponse
     */
    public function setGetLastTraceResult(\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult = null)
    {
        $this->GetLastTraceResult = $getLastTraceResult;
        return $this;
    }
    /**
     * Get Parcel value
     * @return \StructType\Parcel|null
     */
    public function getParcel()
    {
        return $this->Parcel;
    }
    /**
     * Set Parcel value
     * @param \StructType\Parcel $parcel
     * @return \StructType\GetLastTraceResponse
     */
    public function setParcel(\StructType\Parcel $parcel = null)
    {
        $this->Parcel = $parcel;
        return $this;
    }
}
