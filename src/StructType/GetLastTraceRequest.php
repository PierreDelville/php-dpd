<?php

namespace StructType;

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
     * @var \ArrayType\ArrayOfParcel
     */
    public $Parcels;
    /**
     * Constructor method for GetLastTraceRequest
     * @uses GetLastTraceRequest::setParcels()
     * @param \ArrayType\ArrayOfParcel $parcels
     */
    public function __construct(\ArrayType\ArrayOfParcel $parcels = null)
    {
        $this
            ->setParcels($parcels);
    }
    /**
     * Get Parcels value
     * @return \ArrayType\ArrayOfParcel|null
     */
    public function getParcels()
    {
        return $this->Parcels;
    }
    /**
     * Set Parcels value
     * @param \ArrayType\ArrayOfParcel $parcels
     * @return \StructType\GetLastTraceRequest
     */
    public function setParcels(\ArrayType\ArrayOfParcel $parcels = null)
    {
        $this->Parcels = $parcels;
        return $this;
    }
}
