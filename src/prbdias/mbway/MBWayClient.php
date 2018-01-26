<?php

namespace prbdias\mbway;

use prbdias\mbway\Alias\CreateMerchantAlias;
use prbdias\mbway\Alias\CreateMerchantAliasResponse;
use prbdias\mbway\Alias\RemoveMerchantAlias;
use prbdias\mbway\Alias\RemoveMerchantAliasResponse;
use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiry;
use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryResponse;
use prbdias\mbway\FinancialOperation\RequestFinancialOperation;
use prbdias\mbway\FinancialOperation\RequestFinancialOperationResponse;
use SoapClient;
use SoapHeader;
use SoapVar;

/**
 * Class MBWayClient.
 */
class MBWayClient
{
    /**
     * @var SoapClient
     */
    private $financialOperationClient;

    /**
     * @var SoapClient
     */
    private $aliasClient;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var bool
     */
    private $sandbox;

    /**
     * @var array
     */
    private static $WSDL = [
        'DIR'                 => 'wsdl/',
        'MERCHANT_ALIAS'      => 'MerchantAliasWSService.wsdl',
        'FINANCIAL_OPERATION' => 'MerchantFinancialWSService.wsdl',
    ];

    /**
     * @var array
     */
    private static $ENDPOINTS = [
        'PRODUCTION'    => 'https://mbway.pt/',
        'SANDBOX'       => 'https://qly.mbway.pt/',
    ];

    /**
     * @var array
     */
    private static $locations = [
        'createMerchantAlias'             => 'Merchant/createMerchantAliasWS',
        'removeMerchantAlias'             => 'Merchant/removeMerchantAliasWS',
        'requestFinancialOperation'       => 'Merchant/requestFinancialOperationWS',
        'financialOperationStatusInquiry' => 'Merchant/financialOperationStatusInquiryWS',
    ];

    /**
     * @var array
     */
    private static $classmap = [
        'alias'                        => 'prbdias\\mbway\\Alias',
        'financialOperation'           => 'prbdias\\mbway\\FinancialOperation',
        'financialOperationInquiry'    => 'prbdias\\mbway\\FinancialOperationInquiry',
        'financialOperationInquiryRes' => 'prbdias\\mbway\\FinancialOperationInquiryRes',
        'merchant'                     => 'prbdias\\mbway\\Merchant',
        'messageProperties'            => 'prbdias\\mbway\\MessageProperties',
        'operationInformation'         => 'prbdias\\mbway\\OperationInformation',

    ];

    /**
     * @var array
     */
    private static $classmapMerchantAlias = [
        'createMerchantAlias'         => 'prbdias\\mbway\\Alias\\CreateMerchantAlias',
        'createMerchantAliasRequest'  => 'prbdias\\mbway\\Alias\\CreateMerchantAliasRequest',
        'createMerchantAliasResponse' => 'prbdias\\mbway\\Alias\\CreateMerchantAliasResponse',
        'createMerchantAliasResult'   => 'prbdias\\mbway\\Alias\\CreateMerchantAliasResult',
        'removeMerchantAlias'         => 'prbdias\\mbway\\Alias\\RemoveMerchantAlias',
        'removeMerchantAliasRequest'  => 'prbdias\\mbway\\Alias\\RemoveMerchantAliasRequest',
        'removeMerchantAliasResponse' => 'prbdias\\mbway\\Alias\\RemoveMerchantAliasResponse',
        'removeMerchantAliasResult'   => 'prbdias\\mbway\\Alias\\RemoveMerchantAliasResult',
    ];

    /**
     * @var array
     */
    private static $classmapFinancialOperation = [
        'requestFinancialOperation'         => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperation',
        'requestFinancialOperationRequest'  => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperationRequest',
        'requestFinancialOperationResponse' => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperationResponse',
        'requestFinancialOperationResult'   => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperationResult',

        'financialOperationStatusInquiry'         => 'prbdias\\mbway\\FinancialOperation\\FinancialOperationStatusInquiry',
        'financialOperationStatusInquiryRequest'  => 'prbdias\\mbway\\FinancialOperation\\FinancialOperationStatusInquiryRequest',
        'financialOperationStatusInquiryResponse' => 'prbdias\\mbway\\FinancialOperation\\FinancialOperationStatusInquiryResponse',
        'financialOperationStatusInquiryResult'   => 'prbdias\\mbway\\FinancialOperation\\FinancialOperationStatusInquiryResult',
    ];

    /**
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->sandbox = false;
        $this->config = $config;
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge([
            'local_cert'    => $config->getSSLCert(),
            'passphrase'    => $config->getSSLPass(),
            'soap_version'  => SOAP_1_1,
            'features'      => SOAP_SINGLE_ELEMENT_ARRAYS,
            'compression'   => SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
            'keep_alive'    => true,
            'trace'         => true,
            'exceptions'    => true,
            'cache_wsdl'    => WSDL_CACHE_NONE,
            'ssl_method'    => SOAP_SSL_METHOD_SSLv23,

        ], $options);

        $aliasOptions = $options;
        $aliasOptions['classmap'] += self::$classmapMerchantAlias;
        $this->aliasClient = new SoapClient(__DIR__.'/../../../'.self::$WSDL['DIR'].self::$WSDL['MERCHANT_ALIAS'], $aliasOptions);

        $financialOperationOptions = $options;
        $financialOperationOptions['classmap'] += self::$classmapFinancialOperation;
        $this->financialOperationClient = new SoapClient(__DIR__.'/../../../'.self::$WSDL['DIR'].self::$WSDL['FINANCIAL_OPERATION'], $financialOperationOptions);
    }

    /**
     * @return bool
     */
    public function isSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Enable or disable communication to quality server.
     *
     * @param bool $sandbox
     */
    public function setSandbox($sandbox = true)
    {
        $this->sandbox = $sandbox;
    }

    /**
     * @param CreateMerchantAlias $parameters
     *
     * @return CreateMerchantAliasResponse
     */
    public function createMerchantAlias(CreateMerchantAlias $parameters)
    {
        $this->addAddressingFeature($this->aliasClient, 'http://alias.services.merchant.channelmanagermsp.sibs/MerchantAliasWS/createMerchantAliasRequest', $this->config->getMerchantAliasAsyncService());

        return $this->aliasClient->__soapCall('createMerchantAlias', [$parameters], [
            'location' => $this->getLocation('createMerchantAlias'),
        ]);
    }

    /**
     * @param RemoveMerchantAlias $parameters
     *
     * @return RemoveMerchantAliasResponse
     */
    public function removeMerchantAlias(RemoveMerchantAlias $parameters)
    {
        return $this->aliasClient->__soapCall('removeMerchantAlias', [$parameters], [
            'location' => $this->getLocation('removeMerchantAlias'),
        ]);
    }

    /**
     * @param RequestFinancialOperation $parameters
     *
     * @return RequestFinancialOperationResponse
     */
    public function requestFinancialOperation(RequestFinancialOperation $parameters)
    {
        $this->addAddressingFeature($this->financialOperationClient, 'http://financial.services.merchant.channelmanagermsp.sibs/MerchantFinancialOperationWS/requestFinancialOperationRequest', $this->config->getFinancialOperationAsyncService());

        return $this->financialOperationClient->__soapCall('requestFinancialOperation', [$parameters], [
            'location' => $this->getLocation('requestFinancialOperation'),
        ]);
    }

    /**
     * @param FinancialOperationStatusInquiry $parameters
     *
     * @return FinancialOperationStatusInquiryResponse
     */
    public function financialOperationStatusInquiry(FinancialOperationStatusInquiry $parameters)
    {
        $this->addAddressingFeature($this->financialOperationClient, 'http://financial.services.merchant.channelmanagermsp.sibs/MerchantFinancialOperationInquiryWS/financialOperationStatusInquiryRequest', $this->config->getFinancialOperationAsyncService());

        return $this->financialOperationClient->__soapCall('financialOperationStatusInquiry', [$parameters], [
            'location' => $this->getLocation('financialOperationStatusInquiry'),
        ]);
    }

    public function getFinantialClient()
    {
        return $this->financialOperationClient;
    }

    /**
     * Get location with support for sandbox mode.
     *
     * @param string $action
     *
     * @return string
     */
    private function getLocation($action)
    {
        return ($this->isSandbox() ? self::$ENDPOINTS['SANDBOX'] : self::$ENDPOINTS['PRODUCTION']).self::$locations[$action];
    }

    /**
     * @param SoapClient $client
     * @param string     $action
     * @param string     $replyTo
     */
    private function addAddressingFeature(SoapClient &$client, $action, $replyTo)
    {
        //Namespace of the WS.
        $namespace = 'http://www.w3.org/2005/08/addressing';
        //Create Soap Header.
        $header[] = new SOAPHeader($namespace, 'Action', $action);
        $address = new SoapVar($replyTo, XSD_STRING, null, null, 'Address', $namespace);
        $replyTo = new SoapVar([$address], SOAP_ENC_OBJECT, null, null, null, $namespace);
        $header[] = new SOAPHeader($namespace, 'ReplyTo', $replyTo, false);
        $client->__setSoapHeaders($header);
    }
}
