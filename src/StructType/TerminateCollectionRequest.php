<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\TerminateCollectionRequest
     */
    public $request;
    /**
     * The parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Parcel
     */
    public $parcel;
    /**
     * Constructor method for TerminateCollectionRequest
     * @uses TerminateCollectionRequest::setRequest()
     * @uses TerminateCollectionRequest::setParcel()
     * @param \Dpd\StructType\TerminateCollectionRequest $request
     * @param \Dpd\StructType\Parcel $parcel
     */
    public function __construct(\Dpd\StructType\TerminateCollectionRequest $request = null, \Dpd\StructType\Parcel $parcel = null)
    {
        $this
            ->setRequest($request)
            ->setParcel($parcel);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\TerminateCollectionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\TerminateCollectionRequest $request
     * @return \Dpd\StructType\TerminateCollectionRequest
     */
    public function setRequest(\Dpd\StructType\TerminateCollectionRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Get parcel value
     * @return \Dpd\StructType\Parcel|null
     */
    public function getParcel()
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @param \Dpd\StructType\Parcel $parcel
     * @return \Dpd\StructType\TerminateCollectionRequest
     */
    public function setParcel(\Dpd\StructType\Parcel $parcel = null)
    {
        $this->parcel = $parcel;
        return $this;
    }
}
