<?php

namespace Dpd\StructType;

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
     * @var \Dpd\ArrayType\ArrayOfString
     */
    public $Parcels;
    /**
     * Constructor method for GetLastTraceBcRequest
     * @uses GetLastTraceBcRequest::setParcels()
     * @param \Dpd\ArrayType\ArrayOfString $parcels
     */
    public function __construct(\Dpd\ArrayType\ArrayOfString $parcels = null)
    {
        $this
            ->setParcels($parcels);
    }
    /**
     * Get Parcels value
     * @return \Dpd\ArrayType\ArrayOfString|null
     */
    public function getParcels()
    {
        return $this->Parcels;
    }
    /**
     * Set Parcels value
     * @param \Dpd\ArrayType\ArrayOfString $parcels
     * @return \Dpd\StructType\GetLastTraceBcRequest
     */
    public function setParcels(\Dpd\ArrayType\ArrayOfString $parcels = null)
    {
        $this->Parcels = $parcels;
        return $this;
    }
}
