<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendCNOTData StructType
 * @subpackage Structs
 */
class SendCNOTData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CNOTData
     */
    public $request;
    /**
     * Constructor method for SendCNOTData
     * @uses SendCNOTData::setRequest()
     * @param \StructType\CNOTData $request
     */
    public function __construct(\StructType\CNOTData $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\CNOTData|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\CNOTData $request
     * @return \StructType\SendCNOTData
     */
    public function setRequest(\StructType\CNOTData $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
