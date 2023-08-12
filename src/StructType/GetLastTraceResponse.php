<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfGetLastTraceResponse
     */
    public $GetLastTraceResult;
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Parcel
     */
    public $Parcel;
    /**
     * Constructor method for GetLastTraceResponse
     * @uses GetLastTraceResponse::setGetLastTraceResult()
     * @uses GetLastTraceResponse::setParcel()
     * @param \Dpd\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult
     * @param \Dpd\StructType\Parcel $parcel
     */
    public function __construct(\Dpd\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult = null, \Dpd\StructType\Parcel $parcel = null)
    {
        $this
            ->setGetLastTraceResult($getLastTraceResult)
            ->setParcel($parcel);
    }
    /**
     * Get GetLastTraceResult value
     * @return \Dpd\ArrayType\ArrayOfGetLastTraceResponse|null
     */
    public function getGetLastTraceResult()
    {
        return $this->GetLastTraceResult;
    }
    /**
     * Set GetLastTraceResult value
     * @param \Dpd\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult
     * @return \Dpd\StructType\GetLastTraceResponse
     */
    public function setGetLastTraceResult(\Dpd\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult = null)
    {
        $this->GetLastTraceResult = $getLastTraceResult;
        return $this;
    }
    /**
     * Get Parcel value
     * @return \Dpd\StructType\Parcel|null
     */
    public function getParcel()
    {
        return $this->Parcel;
    }
    /**
     * Set Parcel value
     * @param \Dpd\StructType\Parcel $parcel
     * @return \Dpd\StructType\GetLastTraceResponse
     */
    public function setParcel(\Dpd\StructType\Parcel $parcel = null)
    {
        $this->Parcel = $parcel;
        return $this;
    }
}
