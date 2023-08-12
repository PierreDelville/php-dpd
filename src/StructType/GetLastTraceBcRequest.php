<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceBcRequest StructType
 * @subpackage Structs
 */
class GetLastTraceBcRequest extends GetLastTraceBaseRequest
{
    /**
     * The Parcels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfString
     */
    public $Parcels;
    /**
     * Constructor method for GetLastTraceBcRequest
     * @uses GetLastTraceBcRequest::setParcels()
     * @param \ArrayType\ArrayOfString $parcels
     */
    public function __construct(\ArrayType\ArrayOfString $parcels = null)
    {
        $this
            ->setParcels($parcels);
    }
    /**
     * Get Parcels value
     * @return \ArrayType\ArrayOfString|null
     */
    public function getParcels()
    {
        return $this->Parcels;
    }
    /**
     * Set Parcels value
     * @param \ArrayType\ArrayOfString $parcels
     * @return \StructType\GetLastTraceBcRequest
     */
    public function setParcels(\ArrayType\ArrayOfString $parcels = null)
    {
        $this->Parcels = $parcels;
        return $this;
    }
}
