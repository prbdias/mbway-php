<?php

namespace prbdias\mbway\FinancialOperation;

use prbdias\mbway\Alias;
use prbdias\mbway\FinancialOperation;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;

class RequestFinancialOperationRequest
{
    /**
     * @var string
     */
    private $messageType;

    /**
     * @var string
     */
    protected $aditionalData;

    /**
     * @var Alias
     */
    protected $alias;

    /**
     * @var FinancialOperation
     */
    protected $financialOperation;

    /**
     * @var FinancialOperation
     */
    protected $referencedFinancialOperation;

    /**
     * @var Merchant
     */
    protected $merchant;

    /**
     * @var MessageProperties
     */
    protected $messageProperties;

    public function __construct()
    {
        $this->messageType = 'N0003';
    }

    /**
     * @return string
     */
    public function getAditionalData()
    {
        return $this->aditionalData;
    }

    /**
     * @param string $aditionalData
     *
     * @return RequestFinancialOperationRequest
     */
    public function setAditionalData($aditionalData)
    {
        $this->aditionalData = $aditionalData;

        return $this;
    }

    /**
     * @return Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Alias $alias
     *
     * @return RequestFinancialOperationRequest
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return FinancialOperation
     */
    public function getFinancialOperation()
    {
        return $this->financialOperation;
    }

    /**
     * @param FinancialOperation $financialOperation
     *
     * @return RequestFinancialOperationRequest
     */
    public function setFinancialOperation(FinancialOperation $financialOperation)
    {
        $this->financialOperation = $financialOperation;

        return $this;
    }

    /**
     * @return FinancialOperation
     */
    public function getReferencedFinancialOperation()
    {
        return $this->referencedFinancialOperation;
    }

    /**
     * @param FinancialOperation $referencedFinancialOperation
     *
     * @return RequestFinancialOperationRequest
     */
    public function setReferencedFinancialOperation(FinancialOperation $referencedFinancialOperation)
    {
        $this->referencedFinancialOperation = $referencedFinancialOperation;

        return $this;
    }

    /**
     * @return Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param Merchant $merchant
     *
     * @return RequestFinancialOperationRequest
     */
    public function setMerchant(Merchant $merchant)
    {
        $this->merchant = $merchant;

        return $this;
    }

    /**
     * @return MessageProperties
     */
    public function getMessageProperties()
    {
        return $this->messageProperties;
    }

    /**
     * @param MessageProperties $messageProperties
     *
     * @return RequestFinancialOperationRequest
     */
    public function setMessageProperties(MessageProperties $messageProperties)
    {
        $this->messageProperties = $messageProperties;

        return $this;
    }
}
