<?php
namespace prbdias\mbway;

use SoapClient;
use prbdias\mbway\Alias\CreateMerchantAlias;
use prbdias\mbway\Alias\CreateMerchantAliasResponse;
use prbdias\mbway\Alias\RemoveMerchantAlias;
use prbdias\mbway\Alias\RemoveMerchantAliasResponse;
use prbdias\mbway\FinancialOperation\RequestFinancialOperation;
use prbdias\mbway\FinancialOperation\RequestFinancialOperationResponse;
use SoapHeader;
use SoapVar;

/**
 * Class MBWayClient
 * @package prbdias\mbway
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
     * @var boolean
     */
    private $sandbox;

    /**
     * @var array
     */
    private static $WSDL = array(
        'DIR' => 'wsdl/',
        'MERCHANT_ALIAS' => 'MerchantAliasWSService.wsdl',
        'FINANCIAL_OPERATION' => 'MerchantFinancialWSService.wsdl',
    );

    /**
     * @var array
     */
    private static $ENDPOINTS = array(
        'PRODUCTION'    => 'https://mbway.pt/',
        'SANDBOX'       => 'https://qly.mbway.pt/'
    );

    /**
     * @var array
     */
    private static $locations = array(
        'createMerchantAlias' => 'Merchant/createMerchantAliasWS',
        'removeMerchantAlias' => 'Merchant/removeMerchantAliasWS',
        'requestFinancialOperation' => 'Merchant/requestFinancialOperationWS',
    );

    /**
     * @var array
     */
    private static $classmap = array(
        'alias' => 'prbdias\\mbway\\Alias',
        'financialOperation' => 'prbdias\\mbway\\FinancialOperation',
        'merchant' => 'prbdias\\mbway\\Merchant',
        'messageProperties' => 'prbdias\\mbway\\MessageProperties',
    );

    /**
     * @var array
     */
    private static $classmapMerchantAlias = array(
        'createMerchantAlias' => 'prbdias\\mbway\\Alias\\CreateMerchantAlias',
        'createMerchantAliasRequest' => 'prbdias\\mbway\\Alias\\CreateMerchantAliasRequest',
        'createMerchantAliasResponse' => 'prbdias\\mbway\\Alias\\CreateMerchantAliasResponse',
        'createMerchantAliasResult' => 'prbdias\\mbway\\Alias\\CreateMerchantAliasResult',
        'removeMerchantAlias' => 'prbdias\\mbway\\Alias\\RemoveMerchantAlias',
        'removeMerchantAliasRequest' => 'prbdias\\mbway\\Alias\\RemoveMerchantAliasRequest',
        'removeMerchantAliasResponse' => 'prbdias\\mbway\\Alias\\RemoveMerchantAliasResponse',
        'removeMerchantAliasResult' => 'prbdias\\mbway\\Alias\\RemoveMerchantAliasResult',
    );

    /**
     * @var array
     */
    private static $classmapFinancialOperation = array(
        'requestFinancialOperation' => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperation',
        'requestFinancialOperationRequest' => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperationRequest',
        'requestFinancialOperationResponse' => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperationResponse',
        'requestFinancialOperationResult' => 'prbdias\\mbway\\FinancialOperation\\RequestFinancialOperationResult',
    );


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

        $options = array_merge(array(
            'soap_version'  => SOAP_1_1,
            'features'      => SOAP_SINGLE_ELEMENT_ARRAYS,
            'compression'   => SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
            'keep_alive'    => true,
            'trace'         => true,
            'exceptions'    => true,
            'cache_wsdl'    => WSDL_CACHE_NONE,
            'ssl_method'    => SOAP_SSL_METHOD_TLS,
            'local_cert'    => $config->getSSLCert(),
            'passphrase'    => $config->getSSLPass(),
        ), $options);

        $aliasOptions = $options;
        $aliasOptions["classmap"] += self::$classmapMerchantAlias;
        $this->aliasClient = new SoapClient(self::$WSDL['DIR'].self::$WSDL['MERCHANT_ALIAS'], $aliasOptions);

        $financialOperationOptions = $options;
        $financialOperationOptions["classmap"] += self::$classmapFinancialOperation;
        $this->financialOperationClient = new SoapClient(self::$WSDL['DIR'].self::$WSDL['FINANCIAL_OPERATION'], $financialOperationOptions);
    }

    /**
     * @return boolean
     */
    public function isSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Enable or disable communication to quality server
     * @param boolean $sandbox
     */
    public function setSandbox($sandbox = true)
    {
        $this->sandbox = $sandbox;
    }

    /**
     * @param  CreateMerchantAlias         $parameters
     * @return CreateMerchantAliasResponse
     */
    public function createMerchantAlias(CreateMerchantAlias $parameters)
    {
        $this->addAddressingFeature($this->aliasClient, 'http://alias.services.merchant.channelmanagermsp.sibs/MerchantAliasWS/createMerchantAliasRequest', $this->config->getMerchantAliasAsyncService());
        return $this->aliasClient->__soapCall('createMerchantAlias', array($parameters), [
            'location' => $this->getLocation('createMerchantAlias')
        ]);
    }

    /**
     * @param  RemoveMerchantAlias         $parameters
     * @return RemoveMerchantAliasResponse
     */
    public function removeMerchantAlias(RemoveMerchantAlias $parameters)
    {
        return $this->aliasClient->__soapCall('removeMerchantAlias', array($parameters), [
            'location' => $this->getLocation('removeMerchantAlias')
        ]);
    }

    /**
     * @param  RequestFinancialOperation         $parameters
     * @return RequestFinancialOperationResponse
     */
    public function requestFinancialOperation(RequestFinancialOperation $parameters)
    {
        $this->addAddressingFeature($this->financialOperationClient, 'http://financial.services.merchant.channelmanagermsp.sibs/MerchantFinancialOperationWS/requestFinancialOperationRequest', $this->config->getFinancialOperationAsyncService());

        return $this->financialOperationClient->__soapCall('requestFinancialOperation', array($parameters), [
            'location' => $this->getLocation('requestFinancialOperation')
        ]);
    }

    /**
     * Get location with support for sandbox mode
     * @param string $action
     * @return string
     */
    private function getLocation($action)
    {
        return ($this->isSandbox() ? self::$ENDPOINTS['SANDBOX'] : self::$ENDPOINTS['PRODUCTION']) . self::$locations[$action];
    }

    /**
     * @param SoapClient $client
     * @param string $action
     * @param string $replyTo
     */
    private function addAddressingFeature(SoapClient &$client, $action, $replyTo)
    {
        //Namespace of the WS.
        $namespace = 'http://www.w3.org/2005/08/addressing';
        //Create Soap Header.
        $header[] = new SOAPHeader($namespace, 'Action', $action);
        $address = new SoapVar($replyTo, XSD_STRING, null, null, 'Address', $namespace);
        $replyTo = new SoapVar(array($address), SOAP_ENC_OBJECT, null, null, null, $namespace);
        $header[] = new SOAPHeader($namespace, 'ReplyTo', $replyTo, false);
        $client->__setSoapHeaders($header);
    }
}
