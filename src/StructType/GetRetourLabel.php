<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabel StructType
 * @subpackage Structs
 */
class GetRetourLabel extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReceiveRetourLabelRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourLabel
     * @uses GetRetourLabel::setRequest()
     * @param \StructType\ReceiveRetourLabelRequest $request
     */
    public function __construct(\StructType\ReceiveRetourLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ReceiveRetourLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ReceiveRetourLabelRequest $request
     * @return \StructType\GetRetourLabel
     */
    public function setRequest(\StructType\ReceiveRetourLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
