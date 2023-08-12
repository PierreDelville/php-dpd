<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDataBc StructType
 * @subpackage Structs
 */
class ShipmentDataBc extends ShipmentDataBase
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
     * The shipmentRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\BcDataExt
     */
    public $shipmentRetour;
    /**
     * Constructor method for ShipmentDataBc
     * @uses ShipmentDataBc::setShipment()
     * @uses ShipmentDataBc::setShipmentRetour()
     * @param \StructType\BcDataExt $shipment
     * @param \StructType\BcDataExt $shipmentRetour
     */
    public function __construct(\StructType\BcDataExt $shipment = null, \StructType\BcDataExt $shipmentRetour = null)
    {
        $this
            ->setShipment($shipment)
            ->setShipmentRetour($shipmentRetour);
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
     * @return \StructType\ShipmentDataBc
     */
    public function setShipment(\StructType\BcDataExt $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Get shipmentRetour value
     * @return \StructType\BcDataExt|null
     */
    public function getShipmentRetour()
    {
        return $this->shipmentRetour;
    }
    /**
     * Set shipmentRetour value
     * @param \StructType\BcDataExt $shipmentRetour
     * @return \StructType\ShipmentDataBc
     */
    public function setShipmentRetour(\StructType\BcDataExt $shipmentRetour = null)
    {
        $this->shipmentRetour = $shipmentRetour;
        return $this;
    }
}
