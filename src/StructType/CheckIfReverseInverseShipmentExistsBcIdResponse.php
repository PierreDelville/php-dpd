<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsBcIdResponse StructType
 * @subpackage Structs
 */
class CheckIfReverseInverseShipmentExistsBcIdResponse extends AbstractStructBase
{
    /**
     * The CheckIfReverseInverseShipmentExistsBcIdResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CheckIfReverseInverseShipmentExistsBcIdResult;
    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsBcIdResponse
     * @uses CheckIfReverseInverseShipmentExistsBcIdResponse::setCheckIfReverseInverseShipmentExistsBcIdResult()
     * @param string $checkIfReverseInverseShipmentExistsBcIdResult
     */
    public function __construct($checkIfReverseInverseShipmentExistsBcIdResult = null)
    {
        $this
            ->setCheckIfReverseInverseShipmentExistsBcIdResult($checkIfReverseInverseShipmentExistsBcIdResult);
    }
    /**
     * Get CheckIfReverseInverseShipmentExistsBcIdResult value
     * @return string
     */
    public function getCheckIfReverseInverseShipmentExistsBcIdResult()
    {
        return $this->CheckIfReverseInverseShipmentExistsBcIdResult;
    }
    /**
     * Set CheckIfReverseInverseShipmentExistsBcIdResult value
     * @uses \Dpd\EnumType\CheckReverseInverseShipmentReturn::valueIsValid()
     * @uses \Dpd\EnumType\CheckReverseInverseShipmentReturn::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkIfReverseInverseShipmentExistsBcIdResult
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdResponse
     */
    public function setCheckIfReverseInverseShipmentExistsBcIdResult($checkIfReverseInverseShipmentExistsBcIdResult = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\CheckReverseInverseShipmentReturn::valueIsValid($checkIfReverseInverseShipmentExistsBcIdResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\CheckReverseInverseShipmentReturn', is_array($checkIfReverseInverseShipmentExistsBcIdResult) ? implode(', ', $checkIfReverseInverseShipmentExistsBcIdResult) : var_export($checkIfReverseInverseShipmentExistsBcIdResult, true), implode(', ', \Dpd\EnumType\CheckReverseInverseShipmentReturn::getValidValues())), __LINE__);
        }
        $this->CheckIfReverseInverseShipmentExistsBcIdResult = $checkIfReverseInverseShipmentExistsBcIdResult;
        return $this;
    }
}
