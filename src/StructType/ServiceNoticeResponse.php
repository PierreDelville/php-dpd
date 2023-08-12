<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeResponse StructType
 * @subpackage Structs
 */
class ServiceNoticeResponse extends AbstractStructBase
{
    /**
     * The servicenotices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfServiceNotice
     */
    public $servicenotices;
    /**
     * Constructor method for ServiceNoticeResponse
     * @uses ServiceNoticeResponse::setServicenotices()
     * @param \ArrayType\ArrayOfServiceNotice $servicenotices
     */
    public function __construct(\ArrayType\ArrayOfServiceNotice $servicenotices = null)
    {
        $this
            ->setServicenotices($servicenotices);
    }
    /**
     * Get servicenotices value
     * @return \ArrayType\ArrayOfServiceNotice|null
     */
    public function getServicenotices()
    {
        return $this->servicenotices;
    }
    /**
     * Set servicenotices value
     * @param \ArrayType\ArrayOfServiceNotice $servicenotices
     * @return \StructType\ServiceNoticeResponse
     */
    public function setServicenotices(\ArrayType\ArrayOfServiceNotice $servicenotices = null)
    {
        $this->servicenotices = $servicenotices;
        return $this;
    }
}
