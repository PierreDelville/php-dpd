<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelBcIdRequest StructType
 * @subpackage Structs
 */
class ParcelBcIdRequest extends BcIdBaseRequest
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Parcel
     */
    public $Parcel;
    /**
     * Constructor method for ParcelBcIdRequest
     * @uses ParcelBcIdRequest::setParcel()
     * @param \StructType\Parcel $parcel
     */
    public function __construct(\StructType\Parcel $parcel = null)
    {
        $this
            ->setParcel($parcel);
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
     * @return \StructType\ParcelBcIdRequest
     */
    public function setParcel(\StructType\Parcel $parcel = null)
    {
        $this->Parcel = $parcel;
        return $this;
    }
}
