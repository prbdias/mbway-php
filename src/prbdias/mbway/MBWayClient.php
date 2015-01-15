<?php
namespace prbdias\mbway;

use prbdias\mbway\Alias\CreateMerchantAlias;
use prbdias\mbway\Alias\CreateMerchantAliasResponse;
use prbdias\mbway\Alias\RemoveMerchantAlias;
use prbdias\mbway\Alias\RemoveMerchantAliasResponse;
use prbdias\mbway\FinancialOperation\RequestFinancialOperation;
use prbdias\mbway\FinancialOperation\RequestFinancialOperationResponse;

class MBWayClient extends \SoapClient
{
    public function __construct()
    {
        parent::__construct('./wsdl/MerchantAliasWSService.wsdl');
    }

    /**
     * @param CreateMerchantAlias $parameters
     * @return CreateMerchantAliasResponse
     */
    public function createMerchantAlias(CreateMerchantAlias $parameters)
    {
        return $this->__soapCall('CreateMerchantAlias', array($parameters));
    }

    /**
     * @param RemoveMerchantAlias $parameters
     * @return RemoveMerchantAliasResponse
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
