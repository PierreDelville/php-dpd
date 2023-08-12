<?php

namespace Dpd\ServiceType;

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
     * Method to call the operation originally named TerminateCollectionRequest
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\TerminateCollectionRequest $parameters
     * @return \Dpd\StructType\TerminateCollectionRequestResponse|bool
     */
    public function TerminateCollectionRequest(\Dpd\StructType\TerminateCollectionRequest $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\TerminateCollectionRequestBc $parameters
     * @return \Dpd\StructType\TerminateCollectionRequestBcResponse|bool
     */
    public function TerminateCollectionRequestBc(\Dpd\StructType\TerminateCollectionRequestBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\TerminateNumberRange $parameters
     * @return \Dpd\StructType\TerminateNumberRangeResponse|bool
     */
    public function TerminateNumberRange(\Dpd\StructType\TerminateNumberRange $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\TerminateNumberRangeBc $parameters
     * @return \Dpd\StructType\TerminateNumberRangeBcResponse|bool
     */
    public function TerminateNumberRangeBc(\Dpd\StructType\TerminateNumberRangeBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\TerminateShipment $parameters
     * @return \Dpd\StructType\TerminateShipmentResponse|bool
     */
    public function TerminateShipment(\Dpd\StructType\TerminateShipment $parameters)
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
     * @return \Dpd\StructType\TerminateCollectionRequestBcResponse|\Dpd\StructType\TerminateCollectionRequestResponse|\Dpd\StructType\TerminateNumberRangeBcResponse|\Dpd\StructType\TerminateNumberRangeResponse|\Dpd\StructType\TerminateShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
