<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\BcDataExt
     */
    public $shipment;
    /**
     * Constructor method for LabelBcResponse
     * @uses LabelBcResponse::setShipment()
     * @param \Dpd\StructType\BcDataExt $shipment
     */
    public function __construct(\Dpd\StructType\BcDataExt $shipment = null)
    {
        $this
            ->setShipment($shipment);
    }
    /**
     * Get shipment value
     * @return \Dpd\StructType\BcDataExt|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @param \Dpd\StructType\BcDataExt $shipment
     * @return \Dpd\StructType\LabelBcResponse
     */
    public function setShipment(\Dpd\StructType\BcDataExt $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
}
