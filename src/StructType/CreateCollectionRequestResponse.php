<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfShipment
     */
    public $CreateCollectionRequestResult;
    /**
     * Constructor method for CreateCollectionRequestResponse
     * @uses CreateCollectionRequestResponse::setCreateCollectionRequestResult()
     * @param \Dpd\ArrayType\ArrayOfShipment $createCollectionRequestResult
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipment $createCollectionRequestResult = null)
    {
        $this
            ->setCreateCollectionRequestResult($createCollectionRequestResult);
    }
    /**
     * Get CreateCollectionRequestResult value
     * @return \Dpd\ArrayType\ArrayOfShipment|null
     */
    public function getCreateCollectionRequestResult()
    {
        return $this->CreateCollectionRequestResult;
    }
    /**
     * Set CreateCollectionRequestResult value
     * @param \Dpd\ArrayType\ArrayOfShipment $createCollectionRequestResult
     * @return \Dpd\StructType\CreateCollectionRequestResponse
     */
    public function setCreateCollectionRequestResult(\Dpd\ArrayType\ArrayOfShipment $createCollectionRequestResult = null)
    {
        $this->CreateCollectionRequestResult = $createCollectionRequestResult;
        return $this;
    }
}
