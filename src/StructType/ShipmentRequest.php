<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRequest StructType
 * @subpackage Structs
 */
class ShipmentRequest extends GetShipmentRequestBase
{
    /**
     * The parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Parcel
     */
    public $parcel;
    /**
     * Constructor method for ShipmentRequest
     * @uses ShipmentRequest::setParcel()
     * @param \StructType\Parcel $parcel
     */
    public function __construct(\StructType\Parcel $parcel = null)
    {
        $this
            ->setParcel($parcel);
    }
    /**
     * Get parcel value
     * @return \StructType\Parcel|null
     */
    public function getParcel()
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @param \StructType\Parcel $parcel
     * @return \StructType\ShipmentRequest
     */
    public function setParcel(\StructType\Parcel $parcel = null)
    {
        $this->parcel = $parcel;
        return $this;
    }
}
