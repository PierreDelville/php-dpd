<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsResponse StructType
 * @subpackage Structs
 */
class CheckIfReverseInverseShipmentExistsResponse extends AbstractStructBase
{
    /**
     * The CheckIfReverseInverseShipmentExistsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CheckIfReverseInverseShipmentExistsResult;
    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsResponse
     * @uses CheckIfReverseInverseShipmentExistsResponse::setCheckIfReverseInverseShipmentExistsResult()
     * @param string $checkIfReverseInverseShipmentExistsResult
     */
    public function __construct($checkIfReverseInverseShipmentExistsResult = null)
    {
        $this
            ->setCheckIfReverseInverseShipmentExistsResult($checkIfReverseInverseShipmentExistsResult);
    }
    /**
     * Get CheckIfReverseInverseShipmentExistsResult value
     * @return string
     */
    public function getCheckIfReverseInverseShipmentExistsResult()
    {
        return $this->CheckIfReverseInverseShipmentExistsResult;
    }
    /**
     * Set CheckIfReverseInverseShipmentExistsResult value
     * @uses \Dpd\EnumType\CheckReverseInverseShipmentReturn::valueIsValid()
     * @uses \Dpd\EnumType\CheckReverseInverseShipmentReturn::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkIfReverseInverseShipmentExistsResult
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsResponse
     */
    public function setCheckIfReverseInverseShipmentExistsResult($checkIfReverseInverseShipmentExistsResult = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\CheckReverseInverseShipmentReturn::valueIsValid($checkIfReverseInverseShipmentExistsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\CheckReverseInverseShipmentReturn', is_array($checkIfReverseInverseShipmentExistsResult) ? implode(', ', $checkIfReverseInverseShipmentExistsResult) : var_export($checkIfReverseInverseShipmentExistsResult, true), implode(', ', \Dpd\EnumType\CheckReverseInverseShipmentReturn::getValidValues())), __LINE__);
        }
        $this->CheckIfReverseInverseShipmentExistsResult = $checkIfReverseInverseShipmentExistsResult;
        return $this;
    }
}
