<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
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
     * Method to call the operation originally named CreateShipment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateShipment $parameters
     * @return \StructType\CreateShipmentResponse|bool
     */
    public function CreateShipment(\StructType\CreateShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateShipmentBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateShipmentBc $parameters
     * @return \StructType\CreateShipmentBcResponse|bool
     */
    public function CreateShipmentBc(\StructType\CreateShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateShipmentWithLabels
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateShipmentWithLabels $parameters
     * @return \StructType\CreateShipmentWithLabelsResponse|bool
     */
    public function CreateShipmentWithLabels(\StructType\CreateShipmentWithLabels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipmentWithLabels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateShipmentWithLabelsBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateShipmentWithLabelsBc $parameters
     * @return \StructType\CreateShipmentWithLabelsBcResponse|bool
     */
    public function CreateShipmentWithLabelsBc(\StructType\CreateShipmentWithLabelsBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipmentWithLabelsBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateMultiShipment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateMultiShipment $parameters
     * @return \StructType\CreateMultiShipmentResponse|bool
     */
    public function CreateMultiShipment(\StructType\CreateMultiShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateMultiShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateMultiShipmentBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateMultiShipmentBc $parameters
     * @return \StructType\CreateMultiShipmentBcResponse|bool
     */
    public function CreateMultiShipmentBc(\StructType\CreateMultiShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateMultiShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateReverseInverseShipment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateReverseInverseShipment $parameters
     * @return \StructType\CreateReverseInverseShipmentResponse|bool
     */
    public function CreateReverseInverseShipment(\StructType\CreateReverseInverseShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateReverseInverseShipmentBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateReverseInverseShipmentBc $parameters
     * @return \StructType\CreateReverseInverseShipmentBcResponse|bool
     */
    public function CreateReverseInverseShipmentBc(\StructType\CreateReverseInverseShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * CreateReverseInverseShipmentWithLabels
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateReverseInverseShipmentWithLabels $parameters
     * @return \StructType\CreateReverseInverseShipmentWithLabelsResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabels(\StructType\CreateReverseInverseShipmentWithLabels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipmentWithLabels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * CreateReverseInverseShipmentWithLabelsBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateReverseInverseShipmentWithLabelsBc $parameters
     * @return \StructType\CreateReverseInverseShipmentWithLabelsBcResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabelsBc(\StructType\CreateReverseInverseShipmentWithLabelsBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipmentWithLabelsBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateCollectionRequest
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateCollectionRequest $parameters
     * @return \StructType\CreateCollectionRequestResponse|bool
     */
    public function CreateCollectionRequest(\StructType\CreateCollectionRequest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateCollectionRequest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateCollectionRequestBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateCollectionRequestBc $parameters
     * @return \StructType\CreateCollectionRequestBcResponse|bool
     */
    public function CreateCollectionRequestBc(\StructType\CreateCollectionRequestBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateCollectionRequestBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreatePickupAtCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreatePickupAtCustomer $parameters
     * @return \StructType\CreatePickupAtCustomerResponse|bool
     */
    public function CreatePickupAtCustomer(\StructType\CreatePickupAtCustomer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreatePickupAtCustomer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreatePickupAtCustomerBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreatePickupAtCustomerBc $parameters
     * @return \StructType\CreatePickupAtCustomerBcResponse|bool
     */
    public function CreatePickupAtCustomerBc(\StructType\CreatePickupAtCustomerBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreatePickupAtCustomerBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CreateCollectionRequestBcResponse|\StructType\CreateCollectionRequestResponse|\StructType\CreateMultiShipmentBcResponse|\StructType\CreateMultiShipmentResponse|\StructType\CreatePickupAtCustomerBcResponse|\StructType\CreatePickupAtCustomerResponse|\StructType\CreateReverseInverseShipmentBcResponse|\StructType\CreateReverseInverseShipmentResponse|\StructType\CreateReverseInverseShipmentWithLabelsBcResponse|\StructType\CreateReverseInverseShipmentWithLabelsResponse|\StructType\CreateShipmentBcResponse|\StructType\CreateShipmentResponse|\StructType\CreateShipmentWithLabelsBcResponse|\StructType\CreateShipmentWithLabelsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
