<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\Parcel
     */
    public $original_parcel;
    /**
     * Constructor method for ReverseReturn
     * @uses ReverseReturn::setOriginal_parcel()
     * @param \Dpd\StructType\Parcel $original_parcel
     */
    public function __construct(\Dpd\StructType\Parcel $original_parcel = null)
    {
        $this
            ->setOriginal_parcel($original_parcel);
    }
    /**
     * Get original_parcel value
     * @return \Dpd\StructType\Parcel|null
     */
    public function getOriginal_parcel()
    {
        return $this->original_parcel;
    }
    /**
     * Set original_parcel value
     * @param \Dpd\StructType\Parcel $original_parcel
     * @return \Dpd\StructType\ReverseReturn
     */
    public function setOriginal_parcel(\Dpd\StructType\Parcel $original_parcel = null)
    {
        $this->original_parcel = $original_parcel;
        return $this;
    }
}
