<?php
namespace prbdias\mbway;

class MBWayClient extends \SoapClient
{
    public function __construct()
    {
        parent::__construct('wsdl\MBWayWebService.wsdl');
    }

    /**
     * @param CreateMerchantAlias $parameters
     * @return createMerchantAliasResponse
     */
    public function createMerchantAlias(CreateMerchantAlias $parameters)
    {
        return $this->__soapCall('CreateMerchantAlias', array($parameters));
    }

    /**
     * @param removeMerchantAlias $parameters
     * @return removeMerchantAliasResponse
     */
    public function removeMerchantAlias(RemoveMerchantAlias $parameters)
    {
        return $this->__soapCall('RemoveMerchantAlias', array($parameters));
    }

    /**
     * @param RequestFinancialOperation $parameters
     * @return RequestFinancialOperationResponse
     */
    public function requestFinancialOperation(RequestFinancialOperation $parameters)
    {
        return $this->__soapCall('RequestFinancialOperation', array($parameters));
    }
}
