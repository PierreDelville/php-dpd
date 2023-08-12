<?php

namespace StructType;

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
     * @var \StructType\ReceiveLabelRequest
     */
    public $request;
    /**
     * Constructor method for GetLabel
     * @uses GetLabel::setRequest()
     * @param \StructType\ReceiveLabelRequest $request
     */
    public function __construct(\StructType\ReceiveLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ReceiveLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ReceiveLabelRequest $request
     * @return \StructType\GetLabel
     */
    public function setRequest(\StructType\ReceiveLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
