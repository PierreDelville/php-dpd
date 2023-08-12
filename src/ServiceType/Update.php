<?php

namespace Dpd\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Sets the UserCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Dpd\StructType\UserCredentials $userCredentials
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUserCredentials(\Dpd\StructType\UserCredentials $userCredentials, $nameSpace = 'http://www.cargonet.software', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UserCredentials', $userCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named UpdateServiceNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\UpdateServiceNotice $parameters
     * @return \Dpd\StructType\UpdateServiceNoticeResponse|bool
     */
    public function UpdateServiceNotice(\Dpd\StructType\UpdateServiceNotice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateServiceNotice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForShop
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\UpdateRdvShipmentDataForShop $parameters
     * @return \Dpd\StructType\UpdateRdvShipmentDataForShopResponse|bool
     */
    public function UpdateRdvShipmentDataForShop(\Dpd\StructType\UpdateRdvShipmentDataForShop $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForShop($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * UpdateRdvShipmentDataForAgencyPickup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickup $parameters
     * @return \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupResponse|bool
     */
    public function UpdateRdvShipmentDataForAgencyPickup(\Dpd\StructType\UpdateRdvShipmentDataForAgencyPickup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForAgencyPickup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateRdvShipmentData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\UpdateRdvShipmentData $parameters
     * @return \Dpd\StructType\UpdateRdvShipmentDataResponse|bool
     */
    public function UpdateRdvShipmentData(\Dpd\StructType\UpdateRdvShipmentData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForPredict
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\UpdateRdvShipmentDataForPredict $parameters
     * @return \Dpd\StructType\UpdateRdvShipmentDataForPredictResponse|bool
     */
    public function UpdateRdvShipmentDataForPredict(\Dpd\StructType\UpdateRdvShipmentDataForPredict $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForPredict($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForSafePlace
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\UpdateRdvShipmentDataForSafePlace $parameters
     * @return \Dpd\StructType\UpdateRdvShipmentDataForSafePlaceResponse|bool
     */
    public function UpdateRdvShipmentDataForSafePlace(\Dpd\StructType\UpdateRdvShipmentDataForSafePlace $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForSafePlace($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickupResponse|\Dpd\StructType\UpdateRdvShipmentDataForPredictResponse|\Dpd\StructType\UpdateRdvShipmentDataForSafePlaceResponse|\Dpd\StructType\UpdateRdvShipmentDataForShopResponse|\Dpd\StructType\UpdateRdvShipmentDataResponse|\Dpd\StructType\UpdateServiceNoticeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
