<?php
namespace prbdias\mbway;
use SoapServer;

class MBWayAsyncService
{
    /**
     * @param callable $callback
     */
    static function createFinancialOperationAsyncResultService(callable $callback){
        $server = new SoapServer(null, array(
            'location' => 'http://34842a79.ngrok.com/',
            'uri' => 'http://webservices.sibsmerchant.com/FinancialOperationAsyncResult/financialOperationResultRequest',
            'encoding' => SOAP_ENCODED,
        ));
        $server->setClass('prbdias\mbway\AsyncService\FinancialOperationAsyncResult', $callback);
        $server->handle();
    }

    /**
     * @param callable $callback
     */
    static function createMerchantAliasAsyncResultService(callable $callback){
        $server = new SoapServer(null, array(
            'location' => 'http://34842a79.ngrok.com/',
            'uri' => 'http://webservices.sibsmerchant.com/MerchantAliasAsyncResult/merchantAliasResultRequest',
            'encoding' => SOAP_ENCODED,
        ));
        $server->setClass('prbdias\mbway\AsyncService\MerchantAliasAsyncResult', $callback);
        $server->handle();
    }
}
