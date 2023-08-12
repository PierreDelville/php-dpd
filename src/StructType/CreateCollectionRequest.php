<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequest StructType
 * @subpackage Structs
 */
class CreateCollectionRequest extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\CollectionRequestRequest
     */
    public $request;
    /**
     * Constructor method for CreateCollectionRequest
     * @uses CreateCollectionRequest::setRequest()
     * @param \Dpd\StructType\CollectionRequestRequest $request
     */
    public function __construct(\Dpd\StructType\CollectionRequestRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\CollectionRequestRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\CollectionRequestRequest $request
     * @return \Dpd\StructType\CreateCollectionRequest
     */
    public function setRequest(\Dpd\StructType\CollectionRequestRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
