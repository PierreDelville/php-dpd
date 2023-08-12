<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ReceiveRetourLabelRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourLabel
     * @uses GetRetourLabel::setRequest()
     * @param \Dpd\StructType\ReceiveRetourLabelRequest $request
     */
    public function __construct(\Dpd\StructType\ReceiveRetourLabelRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ReceiveRetourLabelRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ReceiveRetourLabelRequest $request
     * @return \Dpd\StructType\GetRetourLabel
     */
    public function setRequest(\Dpd\StructType\ReceiveRetourLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
