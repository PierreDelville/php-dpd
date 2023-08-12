<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Parcel
     */
    public $Parcel;
    /**
     * Constructor method for ParcelBcIdRequest
     * @uses ParcelBcIdRequest::setParcel()
     * @param \Dpd\StructType\Parcel $parcel
     */
    public function __construct(\Dpd\StructType\Parcel $parcel = null)
    {
        $this
            ->setParcel($parcel);
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
     * @return \Dpd\StructType\ParcelBcIdRequest
     */
    public function setParcel(\Dpd\StructType\Parcel $parcel = null)
    {
        $this->Parcel = $parcel;
        return $this;
    }
}
