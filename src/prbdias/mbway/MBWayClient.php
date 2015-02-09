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

    public function __construct(Config $config)
    {
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
            'exceptions'    => false,
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
     * @param  CreateMerchantAlias         $parameters
     * @return CreateMerchantAliasResponse
     */
    public function createMerchantAlias(CreateMerchantAlias $parameters)
    {
        $this->addAddressingFeature($this->aliasClient, 'http://alias.services.merchant.channelmanagermsp.sibs/MerchantAliasWS/createMerchantAliasRequest', $this->config->getMerchantAliasAsyncService());
        $save = $this->aliasClient->__soapCall('CreateMerchantAlias', array($parameters));
        echo $this->aliasClient->__getLastRequest();

        return $save;
    }

    /**
     * @param  RemoveMerchantAlias         $parameters
     * @return RemoveMerchantAliasResponse
     */
    public function removeMerchantAlias(RemoveMerchantAlias $parameters)
    {
        return $this->aliasClient->__soapCall('RemoveMerchantAlias', array($parameters));
    }

    /**
     * @param  RequestFinancialOperation         $parameters
     * @return RequestFinancialOperationResponse
     */
    public function requestFinancialOperation(RequestFinancialOperation $parameters)
    {
        $this->addAddressingFeature($this->financialOperationClient, 'http://financial.services.merchant.channelmanagermsp.sibs/MerchantFinancialOperationWS/requestFinancialOperationRequest', $this->config->getFinancialOperationAsyncService());

        return $this->financialOperationClient->__soapCall('RequestFinancialOperation', array($parameters));
    }

    private function addAddressingFeature(SoapClient &$client, $action, $replyTo)
    {
        $namespace = 'http://www.w3.org/2005/08/addressing'; //Namespace of the WS.
        //Create Soap Header.
        $header[] = new SOAPHeader($namespace, 'Action', $action);
        $address = new SoapVar($replyTo, XSD_STRING, null, null, 'Address', $namespace);
        $replyTo = new SoapVar(array($address), SOAP_ENC_OBJECT, null, null, null, $namespace);
        $header[] = new SOAPHeader($namespace, 'ReplyTo', $replyTo, false);
        $client->__setSoapHeaders($header);
    }
}
