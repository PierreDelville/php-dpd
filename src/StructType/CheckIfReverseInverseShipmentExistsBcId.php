<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsBcId StructType
 * @subpackage Structs
 */
class CheckIfReverseInverseShipmentExistsBcId extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CheckIfReverseInverseShipmentExistsBcIdRequest
     */
    public $request;
    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsBcId
     * @uses CheckIfReverseInverseShipmentExistsBcId::setRequest()
     * @param \StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request
     */
    public function __construct(\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\CheckIfReverseInverseShipmentExistsBcIdRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request
     * @return \StructType\CheckIfReverseInverseShipmentExistsBcId
     */
    public function setRequest(\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
