<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelBc StructType
 * @subpackage Structs
 */
class GetRetourLabelBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReceiveRetourLabelBcRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourLabelBc
     * @uses GetRetourLabelBc::setRequest()
     * @param \StructType\ReceiveRetourLabelBcRequest $request
     */
    public function __construct(\StructType\ReceiveRetourLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ReceiveRetourLabelBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ReceiveRetourLabelBcRequest $request
     * @return \StructType\GetRetourLabelBc
     */
    public function setRequest(\StructType\ReceiveRetourLabelBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
