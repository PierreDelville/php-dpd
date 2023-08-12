<?php

namespace Dpd\ServiceType;

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
     * Method to call the operation originally named CreateShipment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateShipment $parameters
     * @return \Dpd\StructType\CreateShipmentResponse|bool
     */
    public function CreateShipment(\Dpd\StructType\CreateShipment $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateShipmentBc $parameters
     * @return \Dpd\StructType\CreateShipmentBcResponse|bool
     */
    public function CreateShipmentBc(\Dpd\StructType\CreateShipmentBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateShipmentWithLabels $parameters
     * @return \Dpd\StructType\CreateShipmentWithLabelsResponse|bool
     */
    public function CreateShipmentWithLabels(\Dpd\StructType\CreateShipmentWithLabels $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateShipmentWithLabelsBc $parameters
     * @return \Dpd\StructType\CreateShipmentWithLabelsBcResponse|bool
     */
    public function CreateShipmentWithLabelsBc(\Dpd\StructType\CreateShipmentWithLabelsBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateMultiShipment $parameters
     * @return \Dpd\StructType\CreateMultiShipmentResponse|bool
     */
    public function CreateMultiShipment(\Dpd\StructType\CreateMultiShipment $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateMultiShipmentBc $parameters
     * @return \Dpd\StructType\CreateMultiShipmentBcResponse|bool
     */
    public function CreateMultiShipmentBc(\Dpd\StructType\CreateMultiShipmentBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateReverseInverseShipment $parameters
     * @return \Dpd\StructType\CreateReverseInverseShipmentResponse|bool
     */
    public function CreateReverseInverseShipment(\Dpd\StructType\CreateReverseInverseShipment $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateReverseInverseShipmentBc $parameters
     * @return \Dpd\StructType\CreateReverseInverseShipmentBcResponse|bool
     */
    public function CreateReverseInverseShipmentBc(\Dpd\StructType\CreateReverseInverseShipmentBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateReverseInverseShipmentWithLabels $parameters
     * @return \Dpd\StructType\CreateReverseInverseShipmentWithLabelsResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabels(\Dpd\StructType\CreateReverseInverseShipmentWithLabels $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateReverseInverseShipmentWithLabelsBc $parameters
     * @return \Dpd\StructType\CreateReverseInverseShipmentWithLabelsBcResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabelsBc(\Dpd\StructType\CreateReverseInverseShipmentWithLabelsBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateCollectionRequest $parameters
     * @return \Dpd\StructType\CreateCollectionRequestResponse|bool
     */
    public function CreateCollectionRequest(\Dpd\StructType\CreateCollectionRequest $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreateCollectionRequestBc $parameters
     * @return \Dpd\StructType\CreateCollectionRequestBcResponse|bool
     */
    public function CreateCollectionRequestBc(\Dpd\StructType\CreateCollectionRequestBc $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreatePickupAtCustomer $parameters
     * @return \Dpd\StructType\CreatePickupAtCustomerResponse|bool
     */
    public function CreatePickupAtCustomer(\Dpd\StructType\CreatePickupAtCustomer $parameters)
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
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\CreatePickupAtCustomerBc $parameters
     * @return \Dpd\StructType\CreatePickupAtCustomerBcResponse|bool
     */
    public function CreatePickupAtCustomerBc(\Dpd\StructType\CreatePickupAtCustomerBc $parameters)
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
     * @return \Dpd\StructType\CreateCollectionRequestBcResponse|\Dpd\StructType\CreateCollectionRequestResponse|\Dpd\StructType\CreateMultiShipmentBcResponse|\Dpd\StructType\CreateMultiShipmentResponse|\Dpd\StructType\CreatePickupAtCustomerBcResponse|\Dpd\StructType\CreatePickupAtCustomerResponse|\Dpd\StructType\CreateReverseInverseShipmentBcResponse|\Dpd\StructType\CreateReverseInverseShipmentResponse|\Dpd\StructType\CreateReverseInverseShipmentWithLabelsBcResponse|\Dpd\StructType\CreateReverseInverseShipmentWithLabelsResponse|\Dpd\StructType\CreateShipmentBcResponse|\Dpd\StructType\CreateShipmentResponse|\Dpd\StructType\CreateShipmentWithLabelsBcResponse|\Dpd\StructType\CreateShipmentWithLabelsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
