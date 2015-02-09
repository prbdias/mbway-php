<?php
namespace prbdias\mbway;
use SoapServer;

class MBWayAsyncService
{
    private $host;
    function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * @param callable $callback
     */
    function createFinancialOperationAsyncResultService(callable $callback){
        $server = new SoapServer(null, array(
            'location' => $this->host,
            'uri' => 'http://webservices.sibsmerchant.com/FinancialOperationAsyncResult/financialOperationResultRequest',
            'encoding' => SOAP_ENCODED,
        ));
        $server->setClass('prbdias\mbway\AsyncService\FinancialOperationAsyncResult', $callback);
        $server->handle();
    }

    /**
     * @param callable $callback
     */
    function createMerchantAliasAsyncResultService(callable $callback){
        $server = new SoapServer(null, array(
            'location' => $this->host,
            'uri' => 'http://webservices.sibsmerchant.com/MerchantAliasAsyncResult/merchantAliasResultRequest',
            'encoding' => SOAP_ENCODED,
        ));
        $server->setClass('prbdias\mbway\AsyncService\MerchantAliasAsyncResult', $callback);
        $server->handle();
    }
}
