<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentDataRequest StructType
 * @subpackage Structs
 */
class GetRdvShipmentDataRequest extends AbstractStructBase
{
    /**
     * The SearchMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchMode;
    /**
     * The SearchString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SearchString;
    /**
     * Constructor method for GetRdvShipmentDataRequest
     * @uses GetRdvShipmentDataRequest::setSearchMode()
     * @uses GetRdvShipmentDataRequest::setSearchString()
     * @param string $searchMode
     * @param string $searchString
     */
    public function __construct($searchMode = null, $searchString = null)
    {
        $this
            ->setSearchMode($searchMode)
            ->setSearchString($searchString);
    }
    /**
     * Get SearchMode value
     * @return string
     */
    public function getSearchMode()
    {
        return $this->SearchMode;
    }
    /**
     * Set SearchMode value
     * @uses \Dpd\EnumType\RdvShipmentDataSearchMode::valueIsValid()
     * @uses \Dpd\EnumType\RdvShipmentDataSearchMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchMode
     * @return \Dpd\StructType\GetRdvShipmentDataRequest
     */
    public function setSearchMode($searchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\RdvShipmentDataSearchMode::valueIsValid($searchMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\RdvShipmentDataSearchMode', is_array($searchMode) ? implode(', ', $searchMode) : var_export($searchMode, true), implode(', ', \Dpd\EnumType\RdvShipmentDataSearchMode::getValidValues())), __LINE__);
        }
        $this->SearchMode = $searchMode;
        return $this;
    }
    /**
     * Get SearchString value
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->SearchString;
    }
    /**
     * Set SearchString value
     * @param string $searchString
     * @return \Dpd\StructType\GetRdvShipmentDataRequest
     */
    public function setSearchString($searchString = null)
    {
        // validation for constraint: string
        if (!is_null($searchString) && !is_string($searchString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchString, true), gettype($searchString)), __LINE__);
        }
        $this->SearchString = $searchString;
        return $this;
    }
}
