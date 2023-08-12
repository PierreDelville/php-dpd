<?php

namespace StructType;

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
     * @uses \EnumType\CheckReverseInverseShipmentReturn::valueIsValid()
     * @uses \EnumType\CheckReverseInverseShipmentReturn::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkIfReverseInverseShipmentExistsBcIdResult
     * @return \StructType\CheckIfReverseInverseShipmentExistsBcIdResponse
     */
    public function setCheckIfReverseInverseShipmentExistsBcIdResult($checkIfReverseInverseShipmentExistsBcIdResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CheckReverseInverseShipmentReturn::valueIsValid($checkIfReverseInverseShipmentExistsBcIdResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CheckReverseInverseShipmentReturn', is_array($checkIfReverseInverseShipmentExistsBcIdResult) ? implode(', ', $checkIfReverseInverseShipmentExistsBcIdResult) : var_export($checkIfReverseInverseShipmentExistsBcIdResult, true), implode(', ', \EnumType\CheckReverseInverseShipmentReturn::getValidValues())), __LINE__);
        }
        $this->CheckIfReverseInverseShipmentExistsBcIdResult = $checkIfReverseInverseShipmentExistsBcIdResult;
        return $this;
    }
}
