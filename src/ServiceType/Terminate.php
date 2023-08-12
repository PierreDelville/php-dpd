<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Terminate ServiceType
 * @subpackage Services
 */
class Terminate extends AbstractSoapClientBase
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
     * Method to call the operation originally named TerminateCollectionRequest
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TerminateCollectionRequest $parameters
     * @return \StructType\TerminateCollectionRequestResponse|bool
     */
    public function TerminateCollectionRequest(\StructType\TerminateCollectionRequest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->TerminateCollectionRequest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named TerminateCollectionRequestBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TerminateCollectionRequestBc $parameters
     * @return \StructType\TerminateCollectionRequestBcResponse|bool
     */
    public function TerminateCollectionRequestBc(\StructType\TerminateCollectionRequestBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->TerminateCollectionRequestBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named TerminateNumberRange
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TerminateNumberRange $parameters
     * @return \StructType\TerminateNumberRangeResponse|bool
     */
    public function TerminateNumberRange(\StructType\TerminateNumberRange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->TerminateNumberRange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named TerminateNumberRangeBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TerminateNumberRangeBc $parameters
     * @return \StructType\TerminateNumberRangeBcResponse|bool
     */
    public function TerminateNumberRangeBc(\StructType\TerminateNumberRangeBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->TerminateNumberRangeBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named TerminateShipment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TerminateShipment $parameters
     * @return \StructType\TerminateShipmentResponse|bool
     */
    public function TerminateShipment(\StructType\TerminateShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->TerminateShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\TerminateCollectionRequestBcResponse|\StructType\TerminateCollectionRequestResponse|\StructType\TerminateNumberRangeBcResponse|\StructType\TerminateNumberRangeResponse|\StructType\TerminateShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
