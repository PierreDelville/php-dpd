<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateCollectionRequestBc StructType
 * @subpackage Structs
 */
class TerminateCollectionRequestBc extends TerminateCollectionRequestBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TerminateCollectionRequestBc
     */
    public $request;
    /**
     * The barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $barcode;
    /**
     * Constructor method for TerminateCollectionRequestBc
     * @uses TerminateCollectionRequestBc::setRequest()
     * @uses TerminateCollectionRequestBc::setBarcode()
     * @param \StructType\TerminateCollectionRequestBc $request
     * @param string $barcode
     */
    public function __construct(\StructType\TerminateCollectionRequestBc $request = null, $barcode = null)
    {
        $this
            ->setRequest($request)
            ->setBarcode($barcode);
    }
    /**
     * Get request value
     * @return \StructType\TerminateCollectionRequestBc|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\TerminateCollectionRequestBc $request
     * @return \StructType\TerminateCollectionRequestBc
     */
    public function setRequest(\StructType\TerminateCollectionRequestBc $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Get barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
    /**
     * Set barcode value
     * @param string $barcode
     * @return \StructType\TerminateCollectionRequestBc
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;
        return $this;
    }
}
