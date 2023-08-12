<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\CollectionRequestRequest
     */
    public $request;
    /**
     * Constructor method for CreateCollectionRequestBc
     * @uses CreateCollectionRequestBc::setRequest()
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
     * @return \Dpd\StructType\CreateCollectionRequestBc
     */
    public function setRequest(\Dpd\StructType\CollectionRequestRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
