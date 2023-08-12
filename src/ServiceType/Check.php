<?php

namespace Dpd\ServiceType;

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
     * Method to call the operation originally named
     * CheckIfReverseInverseShipmentExists
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CheckIfReverseInverseShipmentExists $parameters
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsResponse|bool
     */
    public function CheckIfReverseInverseShipmentExists(\Dpd\StructType\CheckIfReverseInverseShipmentExists $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcId $parameters
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdResponse|bool
     */
    public function CheckIfReverseInverseShipmentExistsBcId(\Dpd\StructType\CheckIfReverseInverseShipmentExistsBcId $parameters)
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
     * @return \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcIdResponse|\Dpd\StructType\CheckIfReverseInverseShipmentExistsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
