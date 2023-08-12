<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsPickableOnDate StructType
 * @subpackage Structs
 */
class IsPickableOnDate extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\IsPickableRequest
     */
    public $request;
    /**
     * Constructor method for IsPickableOnDate
     * @uses IsPickableOnDate::setRequest()
     * @param \StructType\IsPickableRequest $request
     */
    public function __construct(\StructType\IsPickableRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\IsPickableRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\IsPickableRequest $request
     * @return \StructType\IsPickableOnDate
     */
    public function setRequest(\StructType\IsPickableRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
