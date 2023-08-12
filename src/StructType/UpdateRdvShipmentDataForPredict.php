<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForPredict StructType
 * @subpackage Structs
 */
class UpdateRdvShipmentDataForPredict extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\UpdateRdvShipmentDataPredictRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForPredict
     * @uses UpdateRdvShipmentDataForPredict::setRequest()
     * @param \Dpd\StructType\UpdateRdvShipmentDataPredictRequest $request
     */
    public function __construct(\Dpd\StructType\UpdateRdvShipmentDataPredictRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Dpd\StructType\UpdateRdvShipmentDataPredictRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Dpd\StructType\UpdateRdvShipmentDataPredictRequest $request
     * @return \Dpd\StructType\UpdateRdvShipmentDataForPredict
     */
    public function setRequest(\Dpd\StructType\UpdateRdvShipmentDataPredictRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
