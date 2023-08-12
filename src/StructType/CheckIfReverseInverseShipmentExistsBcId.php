<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest
     */
    public $request;
    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsBcId
     * @uses CheckIfReverseInverseShipmentExistsBcId::setRequest()
     * @param \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request
     */
    public function __construct(\Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcId
     */
    public function setRequest(\Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
