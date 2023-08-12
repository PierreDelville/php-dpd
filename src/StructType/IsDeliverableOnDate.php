<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\IsDeliverableRequest
     */
    public $request;
    /**
     * Constructor method for IsDeliverableOnDate
     * @uses IsDeliverableOnDate::setRequest()
     * @param \Dpd\StructType\IsDeliverableRequest $request
     */
    public function __construct(\Dpd\StructType\IsDeliverableRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\IsDeliverableRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\IsDeliverableRequest $request
     * @return \Dpd\StructType\IsDeliverableOnDate
     */
    public function setRequest(\Dpd\StructType\IsDeliverableRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
