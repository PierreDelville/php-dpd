<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\GetBic3Request
     */
    public $request;
    /**
     * Constructor method for GetBic3
     * @uses GetBic3::setRequest()
     * @param \Dpd\StructType\GetBic3Request $request
     */
    public function __construct(\Dpd\StructType\GetBic3Request $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\GetBic3Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\GetBic3Request $request
     * @return \Dpd\StructType\GetBic3
     */
    public function setRequest(\Dpd\StructType\GetBic3Request $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
