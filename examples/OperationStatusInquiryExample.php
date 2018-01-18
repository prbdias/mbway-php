<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


require __DIR__.'/../vendor/autoload.php';

use prbdias\mbway\Config;
use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiry;
use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryRequest;
use prbdias\mbway\MBWayClient;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;
use prbdias\mbway\FinancialOperationInquiry;
use prbdias\mbway\OperationInformation;
use prbdias\mbway\FinancialOperationInquiryReq;


$ssl_cert = '/Users/ricardo/develop/caress/mbway-php/certs/M0502722.pem';
$ssl_pass = "";

$merchantAlias = "https://endorfina.pt/mbway2/?op=CreateMerchantAliasAsyncResultService";
$financialOps = "https://endorfina.pt/mbway2/?op=CreateFinancialOperationAsyncResultService";

$MERCHID='27382';

$config = new Config($ssl_cert, $ssl_pass, $merchantAlias, $financialOps, $MERCHID, '255.255.255.255');


$oprid  = uniqid();
$amount = 129;
$currency = "9782";

$request = new FinancialOperationStatusInquiryRequest();

$operationInformation=new OperationInformation();
$operationInformation->setMerchantOprId(rand());

$financialOperationInquiry1 = new FinancialOperationInquiryReq();
$financialOperationInquiry1->setMerchantOprId('1213');

$financialOperationInquiry2 = new FinancialOperationInquiryReq();
$financialOperationInquiry2->setMerchantOprId('12134');


$financialOperationInquiry=array();
$financialOperationInquiry[]=$financialOperationInquiry1;
$financialOperationInquiry[]=$financialOperationInquiry2;


$merchant = new Merchant();
$merchant->setIPAddress($config->getMerchantIP())
    ->setPosId($config->getMerchantPosId());

$messageProperties = new MessageProperties();
$messageProperties->setApiVersion("1")
    ->setChannel("03")
    ->setChannelTypeCode("VPOS")
    ->setNetworkCode("MULTIB")
    ->setServiceType("01")
    ->setApiVersion("1")
    ->setTimestamp(date_create(date("Y-m-d H:i:s")));

$request->setOperationInformation($operationInformation)
    ->setFinancialOperationInquiry($financialOperationInquiry)
    ->setMerchant($merchant)
    ->setMessageProperties($messageProperties);


$test = new FinancialOperationStatusInquiry();

$test->setArg0($request);
$service = new MBWayClient($config);
$service->setSandbox(true);

try {
    $response = $service->financialOperationStatusInquiry($test);
    $return = $response->getReturn();
    print_r($return);

    echo "REQUEST:\n" . $service->getFinantialClient()->__getLastRequest() . "\n";
    echo "REQUEST Headers:\n" . $service->getFinantialClient()->__getLastRequestHeaders() . "\n";


} catch (Exception $e) {
    print_r($e);

    print_r($service);

    echo "REQUEST:\n" . $service->getFinantialClient()->__getLastRequest() . "\n";
    echo "REQUEST Headers:\n" . $service->getFinantialClient()->__getLastRequestHeaders() . "\n";


}
