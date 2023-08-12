<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceRequest StructType
 * @subpackage Structs
 */
class GetLastTraceRequest extends GetLastTraceBaseRequest
{
    /**
     * The Parcels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\ArrayType\ArrayOfParcel
     */
    public $Parcels;
    /**
     * Constructor method for GetLastTraceRequest
     * @uses GetLastTraceRequest::setParcels()
     * @param \Dpd\ArrayType\ArrayOfParcel $parcels
     */
    public function __construct(\Dpd\ArrayType\ArrayOfParcel $parcels = null)
    {
        $this
            ->setParcels($parcels);
    }
    /**
     * Get Parcels value
     * @return \Dpd\ArrayType\ArrayOfParcel|null
     */
    public function getParcels()
    {
        return $this->Parcels;
    }
    /**
     * Set Parcels value
     * @param \Dpd\ArrayType\ArrayOfParcel $parcels
     * @return \Dpd\StructType\GetLastTraceRequest
     */
    public function setParcels(\Dpd\ArrayType\ArrayOfParcel $parcels = null)
    {
        $this->Parcels = $parcels;
        return $this;
    }
}
