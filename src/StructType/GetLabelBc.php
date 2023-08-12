<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelBc StructType
 * @subpackage Structs
 */
class GetLabelBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReceiveLabelBcRequest
     */
    public $request;
    /**
     * Constructor method for GetLabelBc
     * @uses GetLabelBc::setRequest()
     * @param \StructType\ReceiveLabelBcRequest $request
     */
    public function __construct(\StructType\ReceiveLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\ReceiveLabelBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\ReceiveLabelBcRequest $request
     * @return \StructType\GetLabelBc
     */
    public function setRequest(\StructType\ReceiveLabelBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
