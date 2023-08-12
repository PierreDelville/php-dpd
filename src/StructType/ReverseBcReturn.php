<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseBcReturn StructType
 * @subpackage Structs
 */
class ReverseBcReturn extends ReverseReturnBase
{
    /**
     * The original_parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\BcData
     */
    public $original_parcel;
    /**
     * Constructor method for ReverseBcReturn
     * @uses ReverseBcReturn::setOriginal_parcel()
     * @param \Dpd\StructType\BcData $original_parcel
     */
    public function __construct(\Dpd\StructType\BcData $original_parcel = null)
    {
        $this
            ->setOriginal_parcel($original_parcel);
    }
    /**
     * Get original_parcel value
     * @return \Dpd\StructType\BcData|null
     */
    public function getOriginal_parcel()
    {
        return $this->original_parcel;
    }
    /**
     * Set original_parcel value
     * @param \Dpd\StructType\BcData $original_parcel
     * @return \Dpd\StructType\ReverseBcReturn
     */
    public function setOriginal_parcel(\Dpd\StructType\BcData $original_parcel = null)
    {
        $this->original_parcel = $original_parcel;
        return $this;
    }
}
