<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


require __DIR__.'/../vendor/autoload.php';
use prbdias\mbway\Config;
use prbdias\mbway\Alias;
use prbdias\mbway\MBWayClient;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;
use prbdias\mbway\Alias\CreateMerchantAlias;
use prbdias\mbway\Alias\CreateMerchantAliasRequest;
use prbdias\mbway\Alias\CreateMerchantAliasResponse;
use prbdias\mbway\Alias\CreateMerchantAliasResult;


$ssl_cert = '/Users/ricardo/develop/caress/mbway-php/certs/M0502722.pem';
$ssl_pass = "";

$merchantAlias = "https://endorfina.pt/CreateMerchantAliasAsyncResultService";
$financialOps = "https://endorfina.pt/CreateFinancialOperationAsyncResultService";

$MERCHID='27382';

$config = new Config($ssl_cert, $ssl_pass, $merchantAlias, $financialOps, $MERCHID, '255.255.255.255');


/// Criaçao de ALias


$test = new CreateMerchantAlias();
$testArgument = new CreateMerchantAliasRequest();

$testAlias = new Alias();
$testAlias->setAliasName("351#962694507");
$testAlias->setAliasTypeCde(Alias::CELLPHONE);
$testArgument->setAlias($testAlias);

$testMerchant = new Merchant();
$testMerchant->setIPAddress($config->getMerchantIP())->setPosId($config->getMerchantPosId());

$testArgument->setMerchant($testMerchant);

$testMsgProps = new MessageProperties();
$testMsgProps->setChannel("01");
$testMsgProps->setChannelTypeCode("VPOS");
$testMsgProps->setNetworkCode("MULTIB");
$merchantTimestamp = date_create(date("Y-m-d H:i:s"));
$testMsgProps->setTimestamp($merchantTimestamp);
$testMsgProps->setServiceType("01");
$testMsgProps->setApiVersion("1");
$testArgument->setMessageProperties($testMsgProps);

$testNewAlias = new Alias();
$testNewAlias->setAliasName("ricardo.augusto@altodebito.pt");
$testNewAlias->setAliasTypeCde(Alias::EMAIL);
$testArgument->setNewAlias($testNewAlias);
$test->setArg0($testArgument);

$service = new MBWayClient($config);
$service->setSandbox(true);
try {
    $response = $service->createMerchantAlias($test);
    $return = $response->getReturn();
    print_r($response);
    print_r($return);


    echo "REQUEST:\n" . $service->getAliasClient()->__getLastRequest() . "\n";
    echo "REQUEST Headers:\n" . $service->getAliasClient()->__getLastRequestHeaders() . "\n";


} catch (Exception $e) {
    print_r($e);

    print_r($service);

    echo "REQUEST:\n" . $service->getAliasClient()->__getLastRequest() . "\n";
    echo "REQUEST Headers:\n" . $service->getAliasClient()->__getLastRequestHeaders() . "\n";


}