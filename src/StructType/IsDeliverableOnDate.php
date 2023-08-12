<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsDeliverableOnDate StructType
 * @subpackage Structs
 */
class IsDeliverableOnDate extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\IsDeliverableRequest
     */
    public $request;
    /**
     * Constructor method for IsDeliverableOnDate
     * @uses IsDeliverableOnDate::setRequest()
     * @param \StructType\IsDeliverableRequest $request
     */
    public function __construct(\StructType\IsDeliverableRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\IsDeliverableRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\IsDeliverableRequest $request
     * @return \StructType\IsDeliverableOnDate
     */
    public function setRequest(\StructType\IsDeliverableRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
