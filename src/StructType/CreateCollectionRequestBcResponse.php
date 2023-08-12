<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfShipmentBc
     */
    public $CreateCollectionRequestBcResult;
    /**
     * Constructor method for CreateCollectionRequestBcResponse
     * @uses CreateCollectionRequestBcResponse::setCreateCollectionRequestBcResult()
     * @param \Dpd\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult
     */
    public function __construct(\Dpd\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null)
    {
        $this
            ->setCreateCollectionRequestBcResult($createCollectionRequestBcResult);
    }
    /**
     * Get CreateCollectionRequestBcResult value
     * @return \Dpd\ArrayType\ArrayOfShipmentBc|null
     */
    public function getCreateCollectionRequestBcResult()
    {
        return $this->CreateCollectionRequestBcResult;
    }
    /**
     * Set CreateCollectionRequestBcResult value
     * @param \Dpd\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult
     * @return \Dpd\StructType\CreateCollectionRequestBcResponse
     */
    public function setCreateCollectionRequestBcResult(\Dpd\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null)
    {
        $this->CreateCollectionRequestBcResult = $createCollectionRequestBcResult;
        return $this;
    }
}
