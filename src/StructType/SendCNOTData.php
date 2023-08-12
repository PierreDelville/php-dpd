<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\CNOTData
     */
    public $request;
    /**
     * Constructor method for SendCNOTData
     * @uses SendCNOTData::setRequest()
     * @param \Dpd\StructType\CNOTData $request
     */
    public function __construct(\Dpd\StructType\CNOTData $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\CNOTData|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\CNOTData $request
     * @return \Dpd\StructType\SendCNOTData
     */
    public function setRequest(\Dpd\StructType\CNOTData $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
