<?php

namespace Dpd\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetServiceNoticeAnswers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetServiceNoticeAnswers $parameters
     * @return \Dpd\StructType\GetServiceNoticeAnswersResponse|bool
     */
    public function GetServiceNoticeAnswers(\Dpd\StructType\GetServiceNoticeAnswers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetServiceNoticeAnswers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetServiceNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetServiceNotices $parameters
     * @return \Dpd\StructType\GetServiceNoticesResponse|bool
     */
    public function GetServiceNotices(\Dpd\StructType\GetServiceNotices $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetServiceNotices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllServiceNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetAllServiceNotices $parameters
     * @return \Dpd\StructType\GetAllServiceNoticesResponse|bool
     */
    public function GetAllServiceNotices(\Dpd\StructType\GetAllServiceNotices $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAllServiceNotices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBic3
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetBic3 $parameters
     * @return \Dpd\StructType\GetBic3Response|bool
     */
    public function GetBic3(\Dpd\StructType\GetBic3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBic3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBic3Routing
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetBic3Routing $parameters
     * @return \Dpd\StructType\GetBic3RoutingResponse|bool
     */
    public function GetBic3Routing(\Dpd\StructType\GetBic3Routing $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBic3Routing($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetGeoRouting
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetGeoRouting $parameters
     * @return \Dpd\StructType\GetGeoRoutingResponse|bool
     */
    public function GetGeoRouting(\Dpd\StructType\GetGeoRouting $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetGeoRouting($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRetourShipmentData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetRetourShipmentData $parameters
     * @return \Dpd\StructType\GetRetourShipmentDataResponse|bool
     */
    public function GetRetourShipmentData(\Dpd\StructType\GetRetourShipmentData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourShipmentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRetourShipmentDataBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetRetourShipmentDataBc $parameters
     * @return \Dpd\StructType\GetRetourShipmentDataBcResponse|bool
     */
    public function GetRetourShipmentDataBc(\Dpd\StructType\GetRetourShipmentDataBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourShipmentDataBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLabel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetLabel $parameters
     * @return \Dpd\StructType\GetLabelResponse|bool
     */
    public function GetLabel(\Dpd\StructType\GetLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLabelBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetLabelBc $parameters
     * @return \Dpd\StructType\GetLabelBcResponse|bool
     */
    public function GetLabelBc(\Dpd\StructType\GetLabelBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLabelBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLabelData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetLabelData $parameters
     * @return \Dpd\StructType\GetLabelDataResponse|bool
     */
    public function GetLabelData(\Dpd\StructType\GetLabelData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLabelData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRetourLabel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetRetourLabel $parameters
     * @return \Dpd\StructType\GetRetourLabelResponse|bool
     */
    public function GetRetourLabel(\Dpd\StructType\GetRetourLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRetourLabelBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetRetourLabelBc $parameters
     * @return \Dpd\StructType\GetRetourLabelBcResponse|bool
     */
    public function GetRetourLabelBc(\Dpd\StructType\GetRetourLabelBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourLabelBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetShipment $parameters
     * @return \Dpd\StructType\GetShipmentResponse|bool
     */
    public function GetShipment(\Dpd\StructType\GetShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipmentBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetShipmentBc $parameters
     * @return \Dpd\StructType\GetShipmentBcResponse|bool
     */
    public function GetShipmentBc(\Dpd\StructType\GetShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipmentBcMulti
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetShipmentBcMulti $parameters
     * @return \Dpd\StructType\GetShipmentBcMultiResponse|bool
     */
    public function GetShipmentBcMulti(\Dpd\StructType\GetShipmentBcMulti $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentBcMulti($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetReverseOnDemandMode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetReverseOnDemandMode $parameters
     * @return \Dpd\StructType\GetReverseOnDemandModeResponse|bool
     */
    public function GetReverseOnDemandMode(\Dpd\StructType\GetReverseOnDemandMode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetReverseOnDemandMode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLastNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetLastNumber $parameters
     * @return \Dpd\StructType\GetLastNumberResponse|bool
     */
    public function GetLastNumber(\Dpd\StructType\GetLastNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLastNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNationalTransitTime
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetNationalTransitTime $parameters
     * @return \Dpd\StructType\GetNationalTransitTimeResponse|bool
     */
    public function GetNationalTransitTime(\Dpd\StructType\GetNationalTransitTime $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNationalTransitTime($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRdvShipmentData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetRdvShipmentData $parameters
     * @return \Dpd\StructType\GetRdvShipmentDataResponse|bool
     */
    public function GetRdvShipmentData(\Dpd\StructType\GetRdvShipmentData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRdvShipmentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSafePlaceData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetSafePlaceData $parameters
     * @return \Dpd\StructType\GetSafePlaceDataResponse|bool
     */
    public function GetSafePlaceData(\Dpd\StructType\GetSafePlaceData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSafePlaceData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCustomerAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetCustomerAddress $parameters
     * @return \Dpd\StructType\GetCustomerAddressResponse|bool
     */
    public function GetCustomerAddress(\Dpd\StructType\GetCustomerAddress $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCustomerAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNumberRange
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetNumberRange $parameters
     * @return \Dpd\StructType\GetNumberRangeResponse|bool
     */
    public function GetNumberRange(\Dpd\StructType\GetNumberRange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNumberRange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNumberRangeBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetNumberRangeBc $parameters
     * @return \Dpd\StructType\GetNumberRangeBcResponse|bool
     */
    public function GetNumberRangeBc(\Dpd\StructType\GetNumberRangeBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNumberRangeBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCustomerProfile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetCustomerProfile $parameters
     * @return \Dpd\StructType\GetCustomerProfileResponse|bool
     */
    public function GetCustomerProfile(\Dpd\StructType\GetCustomerProfile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCustomerProfile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProperties
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetProperties $parameters
     * @return \Dpd\StructType\GetPropertiesResponse|bool
     */
    public function GetProperties(\Dpd\StructType\GetProperties $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOptionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetOptionValue $parameters
     * @return \Dpd\StructType\GetOptionValueResponse|bool
     */
    public function GetOptionValue(\Dpd\StructType\GetOptionValue $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOptionValue($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOptionValues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetOptionValues $parameters
     * @return \Dpd\StructType\GetOptionValuesResponse|bool
     */
    public function GetOptionValues(\Dpd\StructType\GetOptionValues $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOptionValues($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetShipping $parameters
     * @return \Dpd\StructType\GetShippingResponse|bool
     */
    public function GetShipping(\Dpd\StructType\GetShipping $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipping($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Dpd\StructType\UserCredentials
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Dpd\StructType\GetInfo $parameters
     * @return \Dpd\StructType\GetInfoResponse|bool
     */
    public function getInfo(\Dpd\StructType\GetInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Dpd\StructType\GetAllServiceNoticesResponse|\Dpd\StructType\GetBic3Response|\Dpd\StructType\GetBic3RoutingResponse|\Dpd\StructType\GetCustomerAddressResponse|\Dpd\StructType\GetCustomerProfileResponse|\Dpd\StructType\GetGeoRoutingResponse|\Dpd\StructType\GetInfoResponse|\Dpd\StructType\GetLabelBcResponse|\Dpd\StructType\GetLabelDataResponse|\Dpd\StructType\GetLabelResponse|\Dpd\StructType\GetLastNumberResponse|\Dpd\StructType\GetNationalTransitTimeResponse|\Dpd\StructType\GetNumberRangeBcResponse|\Dpd\StructType\GetNumberRangeResponse|\Dpd\StructType\GetOptionValueResponse|\Dpd\StructType\GetOptionValuesResponse|\Dpd\StructType\GetPropertiesResponse|\Dpd\StructType\GetRdvShipmentDataResponse|\Dpd\StructType\GetRetourLabelBcResponse|\Dpd\StructType\GetRetourLabelResponse|\Dpd\StructType\GetRetourShipmentDataBcResponse|\Dpd\StructType\GetRetourShipmentDataResponse|\Dpd\StructType\GetReverseOnDemandModeResponse|\Dpd\StructType\GetSafePlaceDataResponse|\Dpd\StructType\GetServiceNoticeAnswersResponse|\Dpd\StructType\GetServiceNoticesResponse|\Dpd\StructType\GetShipmentBcMultiResponse|\Dpd\StructType\GetShipmentBcResponse|\Dpd\StructType\GetShipmentResponse|\Dpd\StructType\GetShippingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
