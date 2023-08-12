<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for runActionResponse StructType
 * @subpackage Structs
 */
class RunActionResponse extends AbstractStructBase
{
    /**
     * The runActionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RunActionResponse_1
     */
    public $runActionResult;
    /**
     * Constructor method for runActionResponse
     * @uses RunActionResponse::setRunActionResult()
     * @param \StructType\RunActionResponse_1 $runActionResult
     */
    public function __construct(\StructType\RunActionResponse_1 $runActionResult = null)
    {
        $this
            ->setRunActionResult($runActionResult);
    }
    /**
     * Get runActionResult value
     * @return \StructType\RunActionResponse_1|null
     */
    public function getRunActionResult()
    {
        return $this->runActionResult;
    }
    /**
     * Set runActionResult value
     * @param \StructType\RunActionResponse_1 $runActionResult
     * @return \StructType\RunActionResponse
     */
    public function setRunActionResult(\StructType\RunActionResponse_1 $runActionResult = null)
    {
        $this->runActionResult = $runActionResult;
        return $this;
    }
}
