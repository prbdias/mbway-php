<?php

namespace prbdias\mbway;

use SoapServer;

class MBWayAsyncService
{
    private $host;

    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * @param callable $callback
     */
    public function createFinancialOperationAsyncResultService(callable $callback)
    {
        $server = new SoapServer(null, [
            'location' => $this->host,
            'uri'      => 'http://webservices.sibsmerchant.com/FinancialOperationAsyncResult/financialOperationResultRequest',
            'encoding' => SOAP_ENCODED,
        ]);
        $server->setClass('prbdias\mbway\AsyncService\FinancialOperationAsyncResult', $callback);
        $server->handle();
    }

    /**
     * @param callable $callback
     */
    public function createMerchantAliasAsyncResultService(callable $callback)
    {
        $server = new SoapServer(null, [
            'location' => $this->host,
            'uri'      => 'http://webservices.sibsmerchant.com/MerchantAliasAsyncResult/merchantAliasResultRequest',
            'encoding' => SOAP_ENCODED,
        ]);
        $server->setClass('prbdias\mbway\AsyncService\MerchantAliasAsyncResult', $callback);
        $server->handle();
    }
}
