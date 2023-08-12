<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\IsPickableRequest
     */
    public $request;
    /**
     * Constructor method for IsPickableOnDate
     * @uses IsPickableOnDate::setRequest()
     * @param \Dpd\StructType\IsPickableRequest $request
     */
    public function __construct(\Dpd\StructType\IsPickableRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\IsPickableRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\IsPickableRequest $request
     * @return \Dpd\StructType\IsPickableOnDate
     */
    public function setRequest(\Dpd\StructType\IsPickableRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
