<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\ReceiveRetourLabelBcRequest
     */
    public $request;
    /**
     * Constructor method for GetRetourLabelBc
     * @uses GetRetourLabelBc::setRequest()
     * @param \Dpd\StructType\ReceiveRetourLabelBcRequest $request
     */
    public function __construct(\Dpd\StructType\ReceiveRetourLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\ReceiveRetourLabelBcRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\ReceiveRetourLabelBcRequest $request
     * @return \Dpd\StructType\GetRetourLabelBc
     */
    public function setRequest(\Dpd\StructType\ReceiveRetourLabelBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
