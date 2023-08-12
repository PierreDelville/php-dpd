<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfServiceNotice
     */
    public $servicenotices;
    /**
     * Constructor method for ServiceNoticeResponse
     * @uses ServiceNoticeResponse::setServicenotices()
     * @param \Dpd\ArrayType\ArrayOfServiceNotice $servicenotices
     */
    public function __construct(\Dpd\ArrayType\ArrayOfServiceNotice $servicenotices = null)
    {
        $this
            ->setServicenotices($servicenotices);
    }
    /**
     * Get servicenotices value
     * @return \Dpd\ArrayType\ArrayOfServiceNotice|null
     */
    public function getServicenotices()
    {
        return $this->servicenotices;
    }
    /**
     * Set servicenotices value
     * @param \Dpd\ArrayType\ArrayOfServiceNotice $servicenotices
     * @return \Dpd\StructType\ServiceNoticeResponse
     */
    public function setServicenotices(\Dpd\ArrayType\ArrayOfServiceNotice $servicenotices = null)
    {
        $this->servicenotices = $servicenotices;
        return $this;
    }
}
