<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestBc StructType
 * @subpackage Structs
 */
class CreateCollectionRequestBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CollectionRequestRequest
     */
    public $request;
    /**
     * Constructor method for CreateCollectionRequestBc
     * @uses CreateCollectionRequestBc::setRequest()
     * @param \StructType\CollectionRequestRequest $request
     */
    public function __construct(\StructType\CollectionRequestRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\CollectionRequestRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\CollectionRequestRequest $request
     * @return \StructType\CreateCollectionRequestBc
     */
    public function setRequest(\StructType\CollectionRequestRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
