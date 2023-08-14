<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use Dpd\ClassMap;
use Dpd\ServiceType\Get;
use Dpd\StructType\Customer;
use Dpd\StructType\ShipmentDetailRequest;
use Dpd\StructType\UserCredentials;
use Dpd\StructType\GetShipmentTraceSingle;

/**
 * Your DPD contract number
 */
define('DPD_WS_ACCOUNT_NUMBER', '******');

/**
 * Your DPD password
 */
define('DPD_WS_PASSWORD', '************');

/**
 * Autres infos fournies par DPD
 * Other information provided by DPD
 */
$customer_countrycode = 250; // 250 = France
$customer_centernumber = 00; // Code agence
$customer_number = 00000; // Numéro de compte

/**
 **** Note ****
 * une ou plusieurs adresses IP publiques doivent êtres communiquées à DPD pour autoriser les appels
 * one or more public IP addresses must be communicated to DPD to allow calls
 */

/**
 * Minimal options
 */
$options = array(
    // Test URL
    AbstractSoapClientBase::WSDL_URL => 'https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?WSDL',
    // Production URL
    //AbstractSoapClientBase::WSDL_URL => 'https://webtrace.dpd.fr/trace-service/Webtrace_Service.asmx?WSDL',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);

/**
 * Customer
 */
$customer = new Customer();
$customer
    ->setCountrycode($customer_countrycode)
    ->setCenternumber($customer_centernumber)
    ->setNumber($customer_number);

/**
 * Request
 */
$request = new ShipmentDetailRequest();
$request
    ->setCustomer($customer)
    ->setShipmentNumber('00000000000000')
    ->setLanguage('FR')
    ->setExpandContainerMode('MasterOnly') // MasterOnly | MasterAndSlave
    ->setGetImages(false);


/**
 * Credentials
 */
$userCredentials = new UserCredentials();
$userCredentials
    ->setUserid(DPD_WS_ACCOUNT_NUMBER)
    ->setPassword(DPD_WS_PASSWORD);

/**
 * Get
 */
$get = new Get($options);
$get->setSoapHeaderUserCredentials(
    $userCredentials,
    'http://www.cargonet.software/' // DPD Namespace URL : ne pas modifier | not changing
);

try {
    /******************************************
     * Send the request
     */
    $parameters = new GetShipmentTraceSingle($request);
    $result = $get->GetShipmentTraceSingle($parameters);

    if ($result !== false) {

        $traceSingleResult = $result->getGetShipmentTraceSingleResult();
        $traces = $traceSingleResult->getTraces();

        /**
         * Tableau intégrant les statuts
         * Table integrating the statutes
         */
        foreach ($traces as $trace) {
            $scanDate = $trace->getScanDate();
            $scanTime = $trace->getScanTime();
            /**
             * Numéro du statut (voir DPD_status.xlsx dans le dossier documents)
             * Status number (see DPD status.xlsx in the documents folder)
             */
            $statusNumber = $trace->getStatusNumber();
            $statusDescription = $trace->getStatusDescription();
            // ......

        }

        // OK

    } else {
        /**
         * No valid
         * Debug des informations fournies par les méthodes utilitaires
         */
        echo 'XML Request: ' . $get->getLastRequest() . "\r\n";
        echo 'XML Response: ' . $get->getLastResponse() . "\r\n";

        throw new Exception("Le suivi de colis DPD n'a pas été effectué");
    }


} catch (Exception $e) {
    /**
     * Has Error
     * Debug des informations fournies par les méthodes utilitaires
     */
    echo 'XML Request: ' . $get->getSoapClient()->__getLastRequest() . "\r\n";
    echo 'XML Response: ' . $get->getSoapClient()->__getLastResponse() . "\r\n";

    /**
     * Erreur
     */
    echo 'Message : ' . $e->getMessage() . "\r\n";
    echo 'Code : ' . $e->getCode() . "\r\n";

    throw new Exception("Une erreur s'est produite lors du suivi de colis DPD");
}


