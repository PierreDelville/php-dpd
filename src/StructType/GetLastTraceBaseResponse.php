<?php

namespace StructType;

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
     * @var \StructType\ClsTrace
     */
    public $Trace;
    /**
     * Constructor method for GetLastTraceBaseResponse
     * @uses GetLastTraceBaseResponse::setTrace()
     * @param \StructType\ClsTrace $trace
     */
    public function __construct(\StructType\ClsTrace $trace = null)
    {
        $this
            ->setTrace($trace);
    }
    /**
     * Get Trace value
     * @return \StructType\ClsTrace|null
     */
    public function getTrace()
    {
        return $this->Trace;
    }
    /**
     * Set Trace value
     * @param \StructType\ClsTrace $trace
     * @return \StructType\GetLastTraceBaseResponse
     */
    public function setTrace(\StructType\ClsTrace $trace = null)
    {
        $this->Trace = $trace;
        return $this;
    }
}
