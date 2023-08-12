<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateCollectionRequest StructType
 * @subpackage Structs
 */
class TerminateCollectionRequest extends TerminateCollectionRequestBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TerminateCollectionRequest
     */
    public $request;
    /**
     * The parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Parcel
     */
    public $parcel;
    /**
     * Constructor method for TerminateCollectionRequest
     * @uses TerminateCollectionRequest::setRequest()
     * @uses TerminateCollectionRequest::setParcel()
     * @param \StructType\TerminateCollectionRequest $request
     * @param \StructType\Parcel $parcel
     */
    public function __construct(\StructType\TerminateCollectionRequest $request = null, \StructType\Parcel $parcel = null)
    {
        $this
            ->setRequest($request)
            ->setParcel($parcel);
    }
    /**
     * Get request value
     * @return \StructType\TerminateCollectionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\TerminateCollectionRequest $request
     * @return \StructType\TerminateCollectionRequest
     */
    public function setRequest(\StructType\TerminateCollectionRequest $request = null)
    {
        $this->request = $request;
        return $this;
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
     * @return \StructType\TerminateCollectionRequest
     */
    public function setParcel(\StructType\Parcel $parcel = null)
    {
        $this->parcel = $parcel;
        return $this;
    }
}
