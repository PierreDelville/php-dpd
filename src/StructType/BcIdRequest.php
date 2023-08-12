<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BcIdRequest StructType
 * @subpackage Structs
 */
class BcIdRequest extends BcIdBaseRequest
{
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\BcData
     */
    public $Barcode;
    /**
     * Constructor method for BcIdRequest
     * @uses BcIdRequest::setBarcode()
     * @param \Dpd\StructType\BcData $barcode
     */
    public function __construct(\Dpd\StructType\BcData $barcode = null)
    {
        $this
            ->setBarcode($barcode);
    }
    /**
     * Get Barcode value
     * @return \Dpd\StructType\BcData|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param \Dpd\StructType\BcData $barcode
     * @return \Dpd\StructType\BcIdRequest
     */
    public function setBarcode(\Dpd\StructType\BcData $barcode = null)
    {
        $this->Barcode = $barcode;
        return $this;
    }
}
