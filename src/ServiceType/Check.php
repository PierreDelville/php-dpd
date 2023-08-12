<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
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
     * Method to call the operation originally named
     * CheckIfReverseInverseShipmentExists
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CheckIfReverseInverseShipmentExists $parameters
     * @return \StructType\CheckIfReverseInverseShipmentExistsResponse|bool
     */
    public function CheckIfReverseInverseShipmentExists(\StructType\CheckIfReverseInverseShipmentExists $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckIfReverseInverseShipmentExists($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * CheckIfReverseInverseShipmentExistsBcId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CheckIfReverseInverseShipmentExistsBcId $parameters
     * @return \StructType\CheckIfReverseInverseShipmentExistsBcIdResponse|bool
     */
    public function CheckIfReverseInverseShipmentExistsBcId(\StructType\CheckIfReverseInverseShipmentExistsBcId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckIfReverseInverseShipmentExistsBcId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CheckIfReverseInverseShipmentExistsBcIdResponse|\StructType\CheckIfReverseInverseShipmentExistsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
