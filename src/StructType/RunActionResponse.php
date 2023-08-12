<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\RunActionResponse_1
     */
    public $runActionResult;
    /**
     * Constructor method for runActionResponse
     * @uses RunActionResponse::setRunActionResult()
     * @param \Dpd\StructType\RunActionResponse_1 $runActionResult
     */
    public function __construct(\Dpd\StructType\RunActionResponse_1 $runActionResult = null)
    {
        $this
            ->setRunActionResult($runActionResult);
    }
    /**
     * Get runActionResult value
     * @return \Dpd\StructType\RunActionResponse_1|null
     */
    public function getRunActionResult()
    {
        return $this->runActionResult;
    }
    /**
     * Set runActionResult value
     * @param \Dpd\StructType\RunActionResponse_1 $runActionResult
     * @return \Dpd\StructType\RunActionResponse
     */
    public function setRunActionResult(\Dpd\StructType\RunActionResponse_1 $runActionResult = null)
    {
        $this->runActionResult = $runActionResult;
        return $this;
    }
}
