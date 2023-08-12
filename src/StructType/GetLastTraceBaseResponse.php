<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceBaseResponse StructType
 * @subpackage Structs
 */
class GetLastTraceBaseResponse extends AbstractStructBase
{
    /**
     * The Trace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\ClsTrace
     */
    public $Trace;
    /**
     * Constructor method for GetLastTraceBaseResponse
     * @uses GetLastTraceBaseResponse::setTrace()
     * @param \Dpd\StructType\ClsTrace $trace
     */
    public function __construct(\Dpd\StructType\ClsTrace $trace = null)
    {
        $this
            ->setTrace($trace);
    }
    /**
     * Get Trace value
     * @return \Dpd\StructType\ClsTrace|null
     */
    public function getTrace()
    {
        return $this->Trace;
    }
    /**
     * Set Trace value
     * @param \Dpd\StructType\ClsTrace $trace
     * @return \Dpd\StructType\GetLastTraceBaseResponse
     */
    public function setTrace(\Dpd\StructType\ClsTrace $trace = null)
    {
        $this->Trace = $trace;
        return $this;
    }
}
