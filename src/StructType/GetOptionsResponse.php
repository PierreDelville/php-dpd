<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionsResponse StructType
 * @subpackage Structs
 */
class GetOptionsResponse extends AbstractStructBase
{
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfGetOptionResponse
     */
    public $Options;
    /**
     * Constructor method for GetOptionsResponse
     * @uses GetOptionsResponse::setOptions()
     * @param \Dpd\ArrayType\ArrayOfGetOptionResponse $options
     */
    public function __construct(\Dpd\ArrayType\ArrayOfGetOptionResponse $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \Dpd\ArrayType\ArrayOfGetOptionResponse|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Dpd\ArrayType\ArrayOfGetOptionResponse $options
     * @return \Dpd\StructType\GetOptionsResponse
     */
    public function setOptions(\Dpd\ArrayType\ArrayOfGetOptionResponse $options = null)
    {
        $this->Options = $options;
        return $this;
    }
}
