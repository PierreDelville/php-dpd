<?php

namespace Dpd\StructType;

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
     * @var \Dpd\StructType\BcDataExt
     */
    public $shipment;
    /**
     * The shipmentRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\BcDataExt
     */
    public $shipmentRetour;
    /**
     * Constructor method for ShipmentDataBc
     * @uses ShipmentDataBc::setShipment()
     * @uses ShipmentDataBc::setShipmentRetour()
     * @param \Dpd\StructType\BcDataExt $shipment
     * @param \Dpd\StructType\BcDataExt $shipmentRetour
     */
    public function __construct(\Dpd\StructType\BcDataExt $shipment = null, \Dpd\StructType\BcDataExt $shipmentRetour = null)
    {
        $this
            ->setShipment($shipment)
            ->setShipmentRetour($shipmentRetour);
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
     * @return \Dpd\StructType\ShipmentDataBc
     */
    public function setShipment(\Dpd\StructType\BcDataExt $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }
    /**
     * Get shipmentRetour value
     * @return \Dpd\StructType\BcDataExt|null
     */
    public function getShipmentRetour()
    {
        return $this->shipmentRetour;
    }
    /**
     * Set shipmentRetour value
     * @param \Dpd\StructType\BcDataExt $shipmentRetour
     * @return \Dpd\StructType\ShipmentDataBc
     */
    public function setShipmentRetour(\Dpd\StructType\BcDataExt $shipmentRetour = null)
    {
        $this->shipmentRetour = $shipmentRetour;
        return $this;
    }
}
