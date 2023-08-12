<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfGetOptionResponse
     */
    public $Options;
    /**
     * Constructor method for GetOptionsResponse
     * @uses GetOptionsResponse::setOptions()
     * @param \ArrayType\ArrayOfGetOptionResponse $options
     */
    public function __construct(\ArrayType\ArrayOfGetOptionResponse $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \ArrayType\ArrayOfGetOptionResponse|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \ArrayType\ArrayOfGetOptionResponse $options
     * @return \StructType\GetOptionsResponse
     */
    public function setOptions(\ArrayType\ArrayOfGetOptionResponse $options = null)
    {
        $this->Options = $options;
        return $this;
    }
}
