<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for runAction StructType
 * @subpackage Structs
 */
class RunAction extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\RunActionRequest
     */
    public $request;
    /**
     * Constructor method for runAction
     * @uses RunAction::setRequest()
     * @param \Dpd\StructType\RunActionRequest $request
     */
    public function __construct(\Dpd\StructType\RunActionRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\RunActionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\RunActionRequest $request
     * @return \Dpd\StructType\RunAction
     */
    public function setRequest(\Dpd\StructType\RunActionRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
