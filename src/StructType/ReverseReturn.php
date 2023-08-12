<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseReturn StructType
 * @subpackage Structs
 */
class ReverseReturn extends ReverseReturnBase
{
    /**
     * The original_parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Parcel
     */
    public $original_parcel;
    /**
     * Constructor method for ReverseReturn
     * @uses ReverseReturn::setOriginal_parcel()
     * @param \StructType\Parcel $original_parcel
     */
    public function __construct(\StructType\Parcel $original_parcel = null)
    {
        $this
            ->setOriginal_parcel($original_parcel);
    }
    /**
     * Get original_parcel value
     * @return \StructType\Parcel|null
     */
    public function getOriginal_parcel()
    {
        return $this->original_parcel;
    }
    /**
     * Set original_parcel value
     * @param \StructType\Parcel $original_parcel
     * @return \StructType\ReverseReturn
     */
    public function setOriginal_parcel(\StructType\Parcel $original_parcel = null)
    {
        $this->original_parcel = $original_parcel;
        return $this;
    }
}
