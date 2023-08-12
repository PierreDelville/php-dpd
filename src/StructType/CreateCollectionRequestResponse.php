<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestResponse StructType
 * @subpackage Structs
 */
class CreateCollectionRequestResponse extends AbstractStructBase
{
    /**
     * The CreateCollectionRequestResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipment
     */
    public $CreateCollectionRequestResult;
    /**
     * Constructor method for CreateCollectionRequestResponse
     * @uses CreateCollectionRequestResponse::setCreateCollectionRequestResult()
     * @param \ArrayType\ArrayOfShipment $createCollectionRequestResult
     */
    public function __construct(\ArrayType\ArrayOfShipment $createCollectionRequestResult = null)
    {
        $this
            ->setCreateCollectionRequestResult($createCollectionRequestResult);
    }
    /**
     * Get CreateCollectionRequestResult value
     * @return \ArrayType\ArrayOfShipment|null
     */
    public function getCreateCollectionRequestResult()
    {
        return $this->CreateCollectionRequestResult;
    }
    /**
     * Set CreateCollectionRequestResult value
     * @param \ArrayType\ArrayOfShipment $createCollectionRequestResult
     * @return \StructType\CreateCollectionRequestResponse
     */
    public function setCreateCollectionRequestResult(\ArrayType\ArrayOfShipment $createCollectionRequestResult = null)
    {
        $this->CreateCollectionRequestResult = $createCollectionRequestResult;
        return $this;
    }
}
