<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelBcResponse StructType
 * @subpackage Structs
 */
class LabelBcResponse extends LabelBaseResponse
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\BcDataExt
     */
    public $shipment;
    /**
     * Constructor method for LabelBcResponse
     * @uses LabelBcResponse::setShipment()
     * @param \StructType\BcDataExt $shipment
     */
    public function __construct(\StructType\BcDataExt $shipment = null)
    {
        $this
            ->setShipment($shipment);
    }
    /**
     * Get shipment value
     * @return \StructType\BcDataExt|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @param \StructType\BcDataExt $shipment
     * @return \StructType\LabelBcResponse
     */
    public function setShipment(\StructType\BcDataExt $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
}
