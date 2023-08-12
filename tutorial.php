<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://e-station.cargonet.software/dpd-eprintwebservice/eprintwebservice.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://e-station.cargonet.software/dpd-eprintwebservice/eprintwebservice.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Is ServiceType
 */
$is = new \ServiceType\Is($options);
$is->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for isAlive operation/method
 */
if ($is->isAlive(new \StructType\IsAlive()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for IsPickableOnDate operation/method
 */
if ($is->IsPickableOnDate(new \StructType\IsPickableOnDate()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for IsDeliverableOnDate operation/method
 */
if ($is->IsDeliverableOnDate(new \StructType\IsDeliverableOnDate()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \ServiceType\Set($options);
$set->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for setAlive operation/method
 */
if ($set->setAlive(new \StructType\SetAlive()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \ServiceType\Create($options);
$create->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for CreateShipment operation/method
 */
if ($create->CreateShipment(new \StructType\CreateShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentBc operation/method
 */
if ($create->CreateShipmentBc(new \StructType\CreateShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentWithLabels operation/method
 */
if ($create->CreateShipmentWithLabels(new \StructType\CreateShipmentWithLabels()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentWithLabelsBc operation/method
 */
if ($create->CreateShipmentWithLabelsBc(new \StructType\CreateShipmentWithLabelsBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMultiShipment operation/method
 */
if ($create->CreateMultiShipment(new \StructType\CreateMultiShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMultiShipmentBc operation/method
 */
if ($create->CreateMultiShipmentBc(new \StructType\CreateMultiShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipment operation/method
 */
if ($create->CreateReverseInverseShipment(new \StructType\CreateReverseInverseShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentBc operation/method
 */
if ($create->CreateReverseInverseShipmentBc(new \StructType\CreateReverseInverseShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentWithLabels operation/method
 */
if ($create->CreateReverseInverseShipmentWithLabels(new \StructType\CreateReverseInverseShipmentWithLabels()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentWithLabelsBc operation/method
 */
if ($create->CreateReverseInverseShipmentWithLabelsBc(new \StructType\CreateReverseInverseShipmentWithLabelsBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateCollectionRequest operation/method
 */
if ($create->CreateCollectionRequest(new \StructType\CreateCollectionRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateCollectionRequestBc operation/method
 */
if ($create->CreateCollectionRequestBc(new \StructType\CreateCollectionRequestBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreatePickupAtCustomer operation/method
 */
if ($create->CreatePickupAtCustomer(new \StructType\CreatePickupAtCustomer()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreatePickupAtCustomerBc operation/method
 */
if ($create->CreatePickupAtCustomerBc(new \StructType\CreatePickupAtCustomerBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
$get->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for GetServiceNoticeAnswers operation/method
 */
if ($get->GetServiceNoticeAnswers(new \StructType\GetServiceNoticeAnswers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetServiceNotices operation/method
 */
if ($get->GetServiceNotices(new \StructType\GetServiceNotices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllServiceNotices operation/method
 */
if ($get->GetAllServiceNotices(new \StructType\GetAllServiceNotices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBic3 operation/method
 */
if ($get->GetBic3(new \StructType\GetBic3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBic3Routing operation/method
 */
if ($get->GetBic3Routing(new \StructType\GetBic3Routing()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetGeoRouting operation/method
 */
if ($get->GetGeoRouting(new \StructType\GetGeoRouting()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourShipmentData operation/method
 */
if ($get->GetRetourShipmentData(new \StructType\GetRetourShipmentData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourShipmentDataBc operation/method
 */
if ($get->GetRetourShipmentDataBc(new \StructType\GetRetourShipmentDataBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabel operation/method
 */
if ($get->GetLabel(new \StructType\GetLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabelBc operation/method
 */
if ($get->GetLabelBc(new \StructType\GetLabelBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabelData operation/method
 */
if ($get->GetLabelData(new \StructType\GetLabelData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourLabel operation/method
 */
if ($get->GetRetourLabel(new \StructType\GetRetourLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourLabelBc operation/method
 */
if ($get->GetRetourLabelBc(new \StructType\GetRetourLabelBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipment operation/method
 */
if ($get->GetShipment(new \StructType\GetShipment()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentBc operation/method
 */
if ($get->GetShipmentBc(new \StructType\GetShipmentBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentBcMulti operation/method
 */
if ($get->GetShipmentBcMulti(new \StructType\GetShipmentBcMulti()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReverseOnDemandMode operation/method
 */
if ($get->GetReverseOnDemandMode(new \StructType\GetReverseOnDemandMode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastNumber operation/method
 */
if ($get->GetLastNumber(new \StructType\GetLastNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNationalTransitTime operation/method
 */
if ($get->GetNationalTransitTime(new \StructType\GetNationalTransitTime()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRdvShipmentData operation/method
 */
if ($get->GetRdvShipmentData(new \StructType\GetRdvShipmentData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSafePlaceData operation/method
 */
if ($get->GetSafePlaceData(new \StructType\GetSafePlaceData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomerAddress operation/method
 */
if ($get->GetCustomerAddress(new \StructType\GetCustomerAddress()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNumberRange operation/method
 */
if ($get->GetNumberRange(new \StructType\GetNumberRange()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNumberRangeBc operation/method
 */
if ($get->GetNumberRangeBc(new \StructType\GetNumberRangeBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomerProfile operation/method
 */
if ($get->GetCustomerProfile(new \StructType\GetCustomerProfile()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProperties operation/method
 */
if ($get->GetProperties(new \StructType\GetProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOptionValue operation/method
 */
if ($get->GetOptionValue(new \StructType\GetOptionValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOptionValues operation/method
 */
if ($get->GetOptionValues(new \StructType\GetOptionValues()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipping operation/method
 */
if ($get->GetShipping(new \StructType\GetShipping()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInfo operation/method
 */
if ($get->getInfo(new \StructType\GetInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \ServiceType\Update($options);
$update->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for UpdateServiceNotice operation/method
 */
if ($update->UpdateServiceNotice(new \StructType\UpdateServiceNotice()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForShop operation/method
 */
if ($update->UpdateRdvShipmentDataForShop(new \StructType\UpdateRdvShipmentDataForShop()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForAgencyPickup operation/method
 */
if ($update->UpdateRdvShipmentDataForAgencyPickup(new \StructType\UpdateRdvShipmentDataForAgencyPickup()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentData operation/method
 */
if ($update->UpdateRdvShipmentData(new \StructType\UpdateRdvShipmentData()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForPredict operation/method
 */
if ($update->UpdateRdvShipmentDataForPredict(new \StructType\UpdateRdvShipmentDataForPredict()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForSafePlace operation/method
 */
if ($update->UpdateRdvShipmentDataForSafePlace(new \StructType\UpdateRdvShipmentDataForSafePlace()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \ServiceType\Cancel($options);
$cancel->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for CancelServiceNotice operation/method
 */
if ($cancel->CancelServiceNotice(new \StructType\CancelServiceNotice()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Terminate ServiceType
 */
$terminate = new \ServiceType\Terminate($options);
$terminate->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for TerminateCollectionRequest operation/method
 */
if ($terminate->TerminateCollectionRequest(new \StructType\TerminateCollectionRequest()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateCollectionRequestBc operation/method
 */
if ($terminate->TerminateCollectionRequestBc(new \StructType\TerminateCollectionRequestBc()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateNumberRange operation/method
 */
if ($terminate->TerminateNumberRange(new \StructType\TerminateNumberRange()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateNumberRangeBc operation/method
 */
if ($terminate->TerminateNumberRangeBc(new \StructType\TerminateNumberRangeBc()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateShipment operation/method
 */
if ($terminate->TerminateShipment(new \StructType\TerminateShipment()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Samples for Put ServiceType
 */
$put = new \ServiceType\Put($options);
$put->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for PutProperties operation/method
 */
if ($put->PutProperties(new \StructType\PutProperties()) !== false) {
    print_r($put->getResult());
} else {
    print_r($put->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
$send->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for SendCNOTData operation/method
 */
if ($send->SendCNOTData(new \StructType\SendCNOTData()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \ServiceType\Check($options);
$check->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for CheckIfReverseInverseShipmentExists operation/method
 */
if ($check->CheckIfReverseInverseShipmentExists(new \StructType\CheckIfReverseInverseShipmentExists()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckIfReverseInverseShipmentExistsBcId operation/method
 */
if ($check->CheckIfReverseInverseShipmentExistsBcId(new \StructType\CheckIfReverseInverseShipmentExistsBcId()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Verify ServiceType
 */
$verify = new \ServiceType\Verify($options);
$verify->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for VerifyClient operation/method
 */
if ($verify->VerifyClient(new \StructType\VerifyClient()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Samples for Run ServiceType
 */
$run = new \ServiceType\Run($options);
$run->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for runAction operation/method
 */
if ($run->runAction(new \StructType\RunAction()) !== false) {
    print_r($run->getResult());
} else {
    print_r($run->getLastError());
}


/****************************************
 *** DPD Tracing ************************
 ****************************************/


/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webtrace.dpd.fr/trace-service/Webtrace_Service.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webtrace.dpd.fr/trace-service/Webtrace_Service.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Is ServiceType
 */
$is = new \ServiceType\Is($options);
/**
 * Sample call for isAlive operation/method
 */
if ($is->isAlive(new \StructType\IsAlive()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \ServiceType\Set($options);
$set->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for setAlive operation/method
 */
if ($set->setAlive(new \StructType\SetAlive()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
$get->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for getInfo operation/method
 */
if ($get->getInfo(new \StructType\GetInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTraceSingle operation/method
 */
if ($get->GetShipmentTraceSingle(new \StructType\GetShipmentTraceSingle()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTrace operation/method
 */
if ($get->GetShipmentTrace(new \StructType\GetShipmentTrace()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTraceByReference operation/method
 */
if ($get->GetShipmentTraceByReference(new \StructType\GetShipmentTraceByReference()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastTrace operation/method
 */
if ($get->GetLastTrace(new \StructType\GetLastTrace()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastTraceBc operation/method
 */
if ($get->GetLastTraceBc(new \StructType\GetLastTraceBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Run ServiceType
 */
$run = new \ServiceType\Run($options);
$run->setSoapHeaderUserCredentials(new \StructType\UserCredentials());
/**
 * Sample call for runAction operation/method
 */
if ($run->runAction(new \StructType\RunAction()) !== false) {
    print_r($run->getResult());
} else {
    print_r($run->getLastError());
}
