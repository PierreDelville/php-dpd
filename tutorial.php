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
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Dpd\ClassMap::get(),
);
/**
 * Samples for Is ServiceType
 */
$is = new \Dpd\ServiceType\Is($options);
$is->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for isAlive operation/method
 */
if ($is->isAlive(new \Dpd\StructType\IsAlive()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for IsPickableOnDate operation/method
 */
if ($is->IsPickableOnDate(new \Dpd\StructType\IsPickableOnDate()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for IsDeliverableOnDate operation/method
 */
if ($is->IsDeliverableOnDate(new \Dpd\StructType\IsDeliverableOnDate()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Dpd\ServiceType\Set($options);
$set->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for setAlive operation/method
 */
if ($set->setAlive(new \Dpd\StructType\SetAlive()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Dpd\ServiceType\Create($options);
$create->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for CreateShipment operation/method
 */
if ($create->CreateShipment(new \Dpd\StructType\CreateShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentBc operation/method
 */
if ($create->CreateShipmentBc(new \Dpd\StructType\CreateShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentWithLabels operation/method
 */
if ($create->CreateShipmentWithLabels(new \Dpd\StructType\CreateShipmentWithLabels()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentWithLabelsBc operation/method
 */
if ($create->CreateShipmentWithLabelsBc(new \Dpd\StructType\CreateShipmentWithLabelsBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMultiShipment operation/method
 */
if ($create->CreateMultiShipment(new \Dpd\StructType\CreateMultiShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMultiShipmentBc operation/method
 */
if ($create->CreateMultiShipmentBc(new \Dpd\StructType\CreateMultiShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipment operation/method
 */
if ($create->CreateReverseInverseShipment(new \Dpd\StructType\CreateReverseInverseShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentBc operation/method
 */
if ($create->CreateReverseInverseShipmentBc(new \Dpd\StructType\CreateReverseInverseShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentWithLabels operation/method
 */
if ($create->CreateReverseInverseShipmentWithLabels(new \Dpd\StructType\CreateReverseInverseShipmentWithLabels()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentWithLabelsBc operation/method
 */
if ($create->CreateReverseInverseShipmentWithLabelsBc(new \Dpd\StructType\CreateReverseInverseShipmentWithLabelsBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateCollectionRequest operation/method
 */
if ($create->CreateCollectionRequest(new \Dpd\StructType\CreateCollectionRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateCollectionRequestBc operation/method
 */
if ($create->CreateCollectionRequestBc(new \Dpd\StructType\CreateCollectionRequestBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreatePickupAtCustomer operation/method
 */
if ($create->CreatePickupAtCustomer(new \Dpd\StructType\CreatePickupAtCustomer()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreatePickupAtCustomerBc operation/method
 */
if ($create->CreatePickupAtCustomerBc(new \Dpd\StructType\CreatePickupAtCustomerBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Dpd\ServiceType\Get($options);
$get->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for GetServiceNoticeAnswers operation/method
 */
if ($get->GetServiceNoticeAnswers(new \Dpd\StructType\GetServiceNoticeAnswers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetServiceNotices operation/method
 */
if ($get->GetServiceNotices(new \Dpd\StructType\GetServiceNotices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllServiceNotices operation/method
 */
if ($get->GetAllServiceNotices(new \Dpd\StructType\GetAllServiceNotices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBic3 operation/method
 */
if ($get->GetBic3(new \Dpd\StructType\GetBic3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBic3Routing operation/method
 */
if ($get->GetBic3Routing(new \Dpd\StructType\GetBic3Routing()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetGeoRouting operation/method
 */
if ($get->GetGeoRouting(new \Dpd\StructType\GetGeoRouting()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourShipmentData operation/method
 */
if ($get->GetRetourShipmentData(new \Dpd\StructType\GetRetourShipmentData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourShipmentDataBc operation/method
 */
if ($get->GetRetourShipmentDataBc(new \Dpd\StructType\GetRetourShipmentDataBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabel operation/method
 */
if ($get->GetLabel(new \Dpd\StructType\GetLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabelBc operation/method
 */
if ($get->GetLabelBc(new \Dpd\StructType\GetLabelBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabelData operation/method
 */
if ($get->GetLabelData(new \Dpd\StructType\GetLabelData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourLabel operation/method
 */
if ($get->GetRetourLabel(new \Dpd\StructType\GetRetourLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourLabelBc operation/method
 */
if ($get->GetRetourLabelBc(new \Dpd\StructType\GetRetourLabelBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipment operation/method
 */
if ($get->GetShipment(new \Dpd\StructType\GetShipment()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentBc operation/method
 */
if ($get->GetShipmentBc(new \Dpd\StructType\GetShipmentBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentBcMulti operation/method
 */
if ($get->GetShipmentBcMulti(new \Dpd\StructType\GetShipmentBcMulti()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReverseOnDemandMode operation/method
 */
if ($get->GetReverseOnDemandMode(new \Dpd\StructType\GetReverseOnDemandMode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastNumber operation/method
 */
if ($get->GetLastNumber(new \Dpd\StructType\GetLastNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNationalTransitTime operation/method
 */
if ($get->GetNationalTransitTime(new \Dpd\StructType\GetNationalTransitTime()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRdvShipmentData operation/method
 */
if ($get->GetRdvShipmentData(new \Dpd\StructType\GetRdvShipmentData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSafePlaceData operation/method
 */
if ($get->GetSafePlaceData(new \Dpd\StructType\GetSafePlaceData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomerAddress operation/method
 */
if ($get->GetCustomerAddress(new \Dpd\StructType\GetCustomerAddress()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNumberRange operation/method
 */
if ($get->GetNumberRange(new \Dpd\StructType\GetNumberRange()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNumberRangeBc operation/method
 */
if ($get->GetNumberRangeBc(new \Dpd\StructType\GetNumberRangeBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomerProfile operation/method
 */
if ($get->GetCustomerProfile(new \Dpd\StructType\GetCustomerProfile()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProperties operation/method
 */
if ($get->GetProperties(new \Dpd\StructType\GetProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOptionValue operation/method
 */
if ($get->GetOptionValue(new \Dpd\StructType\GetOptionValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOptionValues operation/method
 */
if ($get->GetOptionValues(new \Dpd\StructType\GetOptionValues()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipping operation/method
 */
if ($get->GetShipping(new \Dpd\StructType\GetShipping()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInfo operation/method
 */
if ($get->getInfo(new \Dpd\StructType\GetInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Dpd\ServiceType\Update($options);
$update->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for UpdateServiceNotice operation/method
 */
if ($update->UpdateServiceNotice(new \Dpd\StructType\UpdateServiceNotice()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForShop operation/method
 */
if ($update->UpdateRdvShipmentDataForShop(new \Dpd\StructType\UpdateRdvShipmentDataForShop()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForAgencyPickup operation/method
 */
if ($update->UpdateRdvShipmentDataForAgencyPickup(new \Dpd\StructType\UpdateRdvShipmentDataForAgencyPickup()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentData operation/method
 */
if ($update->UpdateRdvShipmentData(new \Dpd\StructType\UpdateRdvShipmentData()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForPredict operation/method
 */
if ($update->UpdateRdvShipmentDataForPredict(new \Dpd\StructType\UpdateRdvShipmentDataForPredict()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForSafePlace operation/method
 */
if ($update->UpdateRdvShipmentDataForSafePlace(new \Dpd\StructType\UpdateRdvShipmentDataForSafePlace()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Dpd\ServiceType\Cancel($options);
$cancel->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for CancelServiceNotice operation/method
 */
if ($cancel->CancelServiceNotice(new \Dpd\StructType\CancelServiceNotice()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Terminate ServiceType
 */
$terminate = new \Dpd\ServiceType\Terminate($options);
$terminate->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for TerminateCollectionRequest operation/method
 */
if ($terminate->TerminateCollectionRequest(new \Dpd\StructType\TerminateCollectionRequest()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateCollectionRequestBc operation/method
 */
if ($terminate->TerminateCollectionRequestBc(new \Dpd\StructType\TerminateCollectionRequestBc()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateNumberRange operation/method
 */
if ($terminate->TerminateNumberRange(new \Dpd\StructType\TerminateNumberRange()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateNumberRangeBc operation/method
 */
if ($terminate->TerminateNumberRangeBc(new \Dpd\StructType\TerminateNumberRangeBc()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateShipment operation/method
 */
if ($terminate->TerminateShipment(new \Dpd\StructType\TerminateShipment()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Samples for Put ServiceType
 */
$put = new \Dpd\ServiceType\Put($options);
$put->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for PutProperties operation/method
 */
if ($put->PutProperties(new \Dpd\StructType\PutProperties()) !== false) {
    print_r($put->getResult());
} else {
    print_r($put->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Dpd\ServiceType\Send($options);
$send->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for SendCNOTData operation/method
 */
if ($send->SendCNOTData(new \Dpd\StructType\SendCNOTData()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Dpd\ServiceType\Check($options);
$check->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for CheckIfReverseInverseShipmentExists operation/method
 */
if ($check->CheckIfReverseInverseShipmentExists(new \Dpd\StructType\CheckIfReverseInverseShipmentExists()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckIfReverseInverseShipmentExistsBcId operation/method
 */
if ($check->CheckIfReverseInverseShipmentExistsBcId(new \Dpd\StructType\CheckIfReverseInverseShipmentExistsBcId()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Verify ServiceType
 */
$verify = new \Dpd\ServiceType\Verify($options);
$verify->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for VerifyClient operation/method
 */
if ($verify->VerifyClient(new \Dpd\StructType\VerifyClient()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Samples for Run ServiceType
 */
$run = new \Dpd\ServiceType\Run($options);
$run->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for runAction operation/method
 */
if ($run->runAction(new \Dpd\StructType\RunAction()) !== false) {
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

/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webtrace.dpd.fr/trace-service/Webtrace_Service.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Dpd\ClassMap::get(),
);
/**
 * Samples for Is ServiceType
 */
$is = new \Dpd\ServiceType\Is($options);
/**
 * Sample call for isAlive operation/method
 */
if ($is->isAlive(new \Dpd\StructType\IsAlive()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Dpd\ServiceType\Set($options);
$set->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for setAlive operation/method
 */
if ($set->setAlive(new \Dpd\StructType\SetAlive()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Dpd\ServiceType\Get($options);
$get->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for getInfo operation/method
 */
if ($get->getInfo(new \Dpd\StructType\GetInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTraceSingle operation/method
 */
if ($get->GetShipmentTraceSingle(new \Dpd\StructType\GetShipmentTraceSingle()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTrace operation/method
 */
if ($get->GetShipmentTrace(new \Dpd\StructType\GetShipmentTrace()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTraceByReference operation/method
 */
if ($get->GetShipmentTraceByReference(new \Dpd\StructType\GetShipmentTraceByReference()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastTrace operation/method
 */
if ($get->GetLastTrace(new \Dpd\StructType\GetLastTrace()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastTraceBc operation/method
 */
if ($get->GetLastTraceBc(new \Dpd\StructType\GetLastTraceBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Run ServiceType
 */
$run = new \Dpd\ServiceType\Run($options);
$run->setSoapHeaderUserCredentials(new \Dpd\StructType\UserCredentials());
/**
 * Sample call for runAction operation/method
 */
if ($run->runAction(new \Dpd\StructType\RunAction()) !== false) {
    print_r($run->getResult());
} else {
    print_r($run->getLastError());
}
