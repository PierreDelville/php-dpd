<?php

namespace ServiceType;

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
     * @param \StructType\UserCredentials $userCredentials
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUserCredentials(\StructType\UserCredentials $userCredentials, $nameSpace = 'http://www.cargonet.software', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UserCredentials', $userCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named UpdateServiceNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateServiceNotice $parameters
     * @return \StructType\UpdateServiceNoticeResponse|bool
     */
    public function UpdateServiceNotice(\StructType\UpdateServiceNotice $parameters)
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
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateRdvShipmentDataForShop $parameters
     * @return \StructType\UpdateRdvShipmentDataForShopResponse|bool
     */
    public function UpdateRdvShipmentDataForShop(\StructType\UpdateRdvShipmentDataForShop $parameters)
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
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateRdvShipmentDataForAgencyPickup $parameters
     * @return \StructType\UpdateRdvShipmentDataForAgencyPickupResponse|bool
     */
    public function UpdateRdvShipmentDataForAgencyPickup(\StructType\UpdateRdvShipmentDataForAgencyPickup $parameters)
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
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateRdvShipmentData $parameters
     * @return \StructType\UpdateRdvShipmentDataResponse|bool
     */
    public function UpdateRdvShipmentData(\StructType\UpdateRdvShipmentData $parameters)
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
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateRdvShipmentDataForPredict $parameters
     * @return \StructType\UpdateRdvShipmentDataForPredictResponse|bool
     */
    public function UpdateRdvShipmentDataForPredict(\StructType\UpdateRdvShipmentDataForPredict $parameters)
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
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateRdvShipmentDataForSafePlace $parameters
     * @return \StructType\UpdateRdvShipmentDataForSafePlaceResponse|bool
     */
    public function UpdateRdvShipmentDataForSafePlace(\StructType\UpdateRdvShipmentDataForSafePlace $parameters)
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
     * @return \StructType\UpdateRdvShipmentDataForAgencyPickupResponse|\StructType\UpdateRdvShipmentDataForPredictResponse|\StructType\UpdateRdvShipmentDataForSafePlaceResponse|\StructType\UpdateRdvShipmentDataForShopResponse|\StructType\UpdateRdvShipmentDataResponse|\StructType\UpdateServiceNoticeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
