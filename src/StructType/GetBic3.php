<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3 StructType
 * @subpackage Structs
 */
class GetBic3 extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetBic3Request
     */
    public $request;
    /**
     * Constructor method for GetBic3
     * @uses GetBic3::setRequest()
     * @param \StructType\GetBic3Request $request
     */
    public function __construct(\StructType\GetBic3Request $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\GetBic3Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\GetBic3Request $request
     * @return \StructType\GetBic3
     */
    public function setRequest(\StructType\GetBic3Request $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
