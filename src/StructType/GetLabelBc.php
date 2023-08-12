<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ReceiveLabelBcRequest
     */
    public $request;
    /**
     * Constructor method for GetLabelBc
     * @uses GetLabelBc::setRequest()
     * @param \Dpd\StructType\ReceiveLabelBcRequest $request
     */
    public function __construct(\Dpd\StructType\ReceiveLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ReceiveLabelBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ReceiveLabelBcRequest $request
     * @return \Dpd\StructType\GetLabelBc
     */
    public function setRequest(\Dpd\StructType\ReceiveLabelBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
