<?php

namespace StructType;

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
     * @var \StructType\RunActionRequest
     */
    public $request;
    /**
     * Constructor method for runAction
     * @uses RunAction::setRequest()
     * @param \StructType\RunActionRequest $request
     */
    public function __construct(\StructType\RunActionRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\RunActionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\RunActionRequest $request
     * @return \StructType\RunAction
     */
    public function setRequest(\StructType\RunActionRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
