<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


require __DIR__.'/../vendor/autoload.php';
use prbdias\mbway\Config;
use prbdias\mbway\Alias;
use prbdias\mbway\FinancialOperation;
use prbdias\mbway\FinancialOperation\RequestFinancialOperation;
use prbdias\mbway\FinancialOperation\RequestFinancialOperationRequest;
use prbdias\mbway\MBWayClient;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;
use prbdias\mbway\Alias\CreateMerchantAlias;
use prbdias\mbway\Alias\CreateMerchantAliasRequest;
use prbdias\mbway\Alias\CreateMerchantAliasResponse;
use prbdias\mbway\Alias\CreateMerchantAliasResult;


$ssl_cert = '/Users/ricardo/develop/caress/mbway-php/certs/M0502722.pem';
$ssl_pass = "";

$merchantAlias = "https://endorfina.pt/mbway2/?op=CreateMerchantAliasAsyncResultService";
$financialOps = "https://endorfina.pt/mbway2/?op=CreateFinancialOperationAsyncResultService";

$MERCHID='27382';

$config = new Config($ssl_cert, $ssl_pass, $merchantAlias, $financialOps, $MERCHID, '255.255.255.255');


$oprid  = uniqid();
$amount = 129;
$currency = "9782";

$request = new RequestFinancialOperationRequest();

$alias = new Alias();
$alias->setAliasName("351#962694507")
    ->setAliasTypeCde(Alias::CELLPHONE);

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

$request->setAditionalData("TESTE")
    ->setAlias($alias)
    ->setMerchant($merchant)
    ->setMessageProperties($messageProperties);

$test = new RequestFinancialOperation();
$operation = new FinancialOperation();
$operation->setAmount($amount)
    ->setCurrencyCode($currency)
    ->setMerchantOprId($oprid)
    ->setOperationTypeCode(FinancialOperation::PURCHASE);

$request->setFinancialOperation($operation);

$test->setArg0($request);
$service = new MBWayClient($config);
$service->setSandbox(true);

try {
    $response = $service->requestFinancialOperation($test);
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
