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
use Dpd\ServiceType\Create;
use Dpd\StructType\Address;
use Dpd\StructType\AddressInfo;
use Dpd\StructType\ExtraInsurance;
use Dpd\StructType\Contact;
use Dpd\StructType\StdServices;
use Dpd\StructType\LabelType;
use Dpd\StructType\StdShipmentLabelRequest;
use Dpd\StructType\UserCredentials;
use Dpd\StructType\CreateShipmentWithLabelsBc;

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
    AbstractSoapClientBase::WSDL_URL => 'https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?WSDL',
    // Production URL
    //AbstractSoapClientBase::WSDL_URL => 'https://e-station.cargonet.software/dpd-eprintwebservice/eprintwebservice.asmx?WSDL',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);

/**
 * Address : sender
 * expéditeur
 */
$senderAddress = new Address();
$senderAddress
    ->setName('Weblinko')
    ->setStreet("Adresse principal de l'expéditeur")
    ->setZipCode('75001')
    ->setCity('Paris')
    ->setCountryPrefix('FR')
    ->setPhoneNumber('0102030405');

// Complement
$senderAddressInfo = new AddressInfo();
$senderAddressInfo
    ->setContact('Dupont Martin')
    ->setName2("Complément d'adresse de l'expéditeur")
    ->setName3("Complément d'adresse de l'expéditeur")
    ->setName4("Complément d'adresse de l'expéditeur")
    ->setDigicode1('0000')
    ->setDigicode2('0000')
    ->setIntercomid('0000')
    ->setVinfo1('Commentaire de livraison 1')
    ->setVinfo2('Commentaire de livraison 2');

/**
 * Address : receiver
 * destinataire
 */
$receiverAddress = new Address();
$receiverAddress
    ->setName('Nom + Prénom ou Entreprise')
    ->setStreet('Adresse principal du destinataire')
    ->setZipCode('75001')
    ->setCity('Paris')
    ->setCountryPrefix('FR')
    ->setPhoneNumber('0600000000');

// Complement
$receiverAddressInfo = new AddressInfo();
$receiverAddressInfo
    ->setContact('Nom + Prénom')
    ->setName2("Complément d'adresse du destinataire")
    ->setName3("Complément d'adresse du destinataire")
    ->setName4("Complément d'adresse du destinataire")
    ->setDigicode1('0000')
    ->setDigicode2('0000')
    ->setIntercomid('0000')
    ->setVinfo1('Commentaire de livraison du destinataire 1')
    ->setVinfo2('Commentaire de livraison du destinataire 2');

/**
 * Si besoin d'une assurance
 */
$extraInsurance = new ExtraInsurance();
$extraInsurance
    ->setType('byShipments') // byShipments | byWeight
    ->setValue(250); // Total/Valeur assurance

/**
 * Contact
 * Utilisé pour les notifications de suivi aux destinataires.
 */
$contact = new Contact();
$contact
    ->setType('AutomaticMail') // AutomaticMail | AutomaticSMS | Predict | No
    ->setSms('0600000000')
    ->setEmail('dupond.martin@exemple.fr');


/**
 * Services
 */
$stdServices = new StdServices();
$stdServices
    ->setContact($contact)
    ->setExtraInsurance($extraInsurance);


/**
 * Label Type
 * PNG / PDF / PDF_A6 / EPL / ZPL / ZPL_A6 / ZPL300 / ZPL300_A6
 */
$labelType = new LabelType();
$labelType->setType('ZPL');


/**
 * Request
 */
$request = new StdShipmentLabelRequest();
$request
    ->setCustomer_countrycode($customer_countrycode)
    ->setCustomer_centernumber($customer_centernumber)
    ->setCustomer_number($customer_number)
    ->setShipperaddress($senderAddress) // Expediteur
    ->setReceiveraddress($receiverAddress) // Destinataire
    ->setReceiverinfo($receiverAddressInfo) // Destinataire complement
    ->setShippingdate(date('Y-m-d'))
    ->setReferencenumber('0000001')
    ->setWeight('4.10') // Poids Kg
    ->setLabelType($labelType)
    ->setServices($stdServices);


/**
 * Credentials
 */
$userCredentials = new UserCredentials();
$userCredentials
    ->setUserid(DPD_WS_ACCOUNT_NUMBER)
    ->setPassword(DPD_WS_PASSWORD);

/**
 * Create
 */
$create = new Create($options);
$create->setSoapHeaderUserCredentials($userCredentials);

try {
    /******************************************
     * Send the request
     */
    $parameters = new CreateShipmentWithLabelsBc($request);
    $result = $create->CreateShipmentWithLabelsBc($parameters);

    if ($result !== false) {
        $createShipmentWithLabelsBcResult = $result->getCreateShipmentWithLabelsBcResult();

        /**
         * Shipments result
         */
        $shipments = $createShipmentWithLabelsBcResult->getShipments();
        $shipmentBc = $shipments->getShipmentBc();
//        $shipmentBarcodes = '';
//        foreach ($shipmentBc as $shipments) {
//            $shipment = $shipments->getShipment();
//            $shipmentBarcodes += $shipment->getBarcodeId() + "\n";
//        }
        $shipment = $shipmentBc[0]->getShipment();

        // Parcel Number
        $barcodeId = $shipment->getBarcodeId();


        /**
         * Labels result
         */
        $labels = $createShipmentWithLabelsBcResult->getLabels();
//        $zpl_datas = '';
//        foreach ($labels as $label) {
//            $zpl_datas += $label->getLabel();
//        }
        $zpl_datas = $labels[0]->getLabel();

        // Write Label Data
        if (!empty($zpl_datas)) {
            $my_file_path_and_name = 'private/dpd/label/0000001.zpl';
            file_put_contents($my_file_path_and_name, $zpl_datas);
        }

        // OK

    } else {
        /**
         * No valid
         * Debug des informations fournies par les méthodes utilitaires
         */
        echo 'XML Request: ' . $create->getLastRequest() . "\r\n";
        echo 'XML Response: ' . $create->getLastResponse() . "\r\n";

        throw new Exception("L'affranchissement DPD n'a pas été effectué");
    }


} catch (Exception $e) {
    /**
     * Has Error
     * Debug des informations fournies par les méthodes utilitaires
     */
    echo 'XML Request: ' . $create->getSoapClient()->__getLastRequest() . "\r\n";
    echo 'XML Response: ' . $create->getSoapClient()->__getLastResponse() . "\r\n";

    /**
     * Erreur
     */
    echo 'Message : ' . $e->getMessage() . "\r\n";
    echo 'Code : ' . $e->getCode() . "\r\n";

    throw new Exception("Une erreur s'est produite lors de l'affranchissement DPD");
}


