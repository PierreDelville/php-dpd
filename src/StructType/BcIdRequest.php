<?php

namespace StructType;

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
     * @var \StructType\BcData
     */
    public $Barcode;
    /**
     * Constructor method for BcIdRequest
     * @uses BcIdRequest::setBarcode()
     * @param \StructType\BcData $barcode
     */
    public function __construct(\StructType\BcData $barcode = null)
    {
        $this
            ->setBarcode($barcode);
    }
    /**
     * Get Barcode value
     * @return \StructType\BcData|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param \StructType\BcData $barcode
     * @return \StructType\BcIdRequest
     */
    public function setBarcode(\StructType\BcData $barcode = null)
    {
        $this->Barcode = $barcode;
        return $this;
    }
}
