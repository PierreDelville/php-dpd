<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabel StructType
 * @subpackage Structs
 */
class GetLabel extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ReceiveLabelRequest
     */
    public $request;
    /**
     * Constructor method for GetLabel
     * @uses GetLabel::setRequest()
     * @param \Dpd\StructType\ReceiveLabelRequest $request
     */
    public function __construct(\Dpd\StructType\ReceiveLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ReceiveLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ReceiveLabelRequest $request
     * @return \Dpd\StructType\GetLabel
     */
    public function setRequest(\Dpd\StructType\ReceiveLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
