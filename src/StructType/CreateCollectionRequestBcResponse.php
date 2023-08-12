<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestBcResponse StructType
 * @subpackage Structs
 */
class CreateCollectionRequestBcResponse extends AbstractStructBase
{
    /**
     * The CreateCollectionRequestBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfShipmentBc
     */
    public $CreateCollectionRequestBcResult;
    /**
     * Constructor method for CreateCollectionRequestBcResponse
     * @uses CreateCollectionRequestBcResponse::setCreateCollectionRequestBcResult()
     * @param \ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult
     */
    public function __construct(\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null)
    {
        $this
            ->setCreateCollectionRequestBcResult($createCollectionRequestBcResult);
    }
    /**
     * Get CreateCollectionRequestBcResult value
     * @return \ArrayType\ArrayOfShipmentBc|null
     */
    public function getCreateCollectionRequestBcResult()
    {
        return $this->CreateCollectionRequestBcResult;
    }
    /**
     * Set CreateCollectionRequestBcResult value
     * @param \ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult
     * @return \StructType\CreateCollectionRequestBcResponse
     */
    public function setCreateCollectionRequestBcResult(\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null)
    {
        $this->CreateCollectionRequestBcResult = $createCollectionRequestBcResult;
        return $this;
    }
}
