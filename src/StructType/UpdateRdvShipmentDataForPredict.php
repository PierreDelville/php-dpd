<?php

namespace StructType;

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
     * @var \StructType\UpdateRdvShipmentDataPredictRequest
     */
    public $request;
    /**
     * Constructor method for UpdateRdvShipmentDataForPredict
     * @uses UpdateRdvShipmentDataForPredict::setRequest()
     * @param \StructType\UpdateRdvShipmentDataPredictRequest $request
     */
    public function __construct(\StructType\UpdateRdvShipmentDataPredictRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\UpdateRdvShipmentDataPredictRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\UpdateRdvShipmentDataPredictRequest $request
     * @return \StructType\UpdateRdvShipmentDataForPredict
     */
    public function setRequest(\StructType\UpdateRdvShipmentDataPredictRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
