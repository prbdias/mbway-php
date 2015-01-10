<?php

class RequestFinancialOperationRequest
{
    /**
     * @var messageType $messageType
     */
    protected $messageType = null;

    /**
     * @var aditionalData $aditionalData
     */
    protected $aditionalData = null;

    /**
     * @var Alias $alias
     */
    protected $alias = null;

    /**
     * @var FinancialOperation $financialOperation
     */
    protected $financialOperation = null;

    /**
     * @var FinancialOperation $referencedFinancialOperation
     */
    protected $referencedFinancialOperation = null;

    /**
     * @var Merchant $merchant
     */
    protected $merchant = null;

    /**
     * @var messageProperties $messageProperties
     */
    protected $messageProperties = null;

    /**
     * @param messageType $messageType
     * @param aditionalData $aditionalData
     * @param Alias $alias
     * @param FinancialOperation $financialOperation
     * @param FinancialOperation $referencedFinancialOperation
     * @param Merchant $merchant
     * @param messageProperties $messageProperties
     */
    public function __construct($messageType, $aditionalData, $alias, $financialOperation, $referencedFinancialOperation, $merchant, $messageProperties)
    {
        $this->messageType = $messageType;
        $this->aditionalData = $aditionalData;
        $this->alias = $alias;
        $this->financialOperation = $financialOperation;
        $this->referencedFinancialOperation = $referencedFinancialOperation;
        $this->merchant = $merchant;
        $this->messageProperties = $messageProperties;
    }

    /**
     * @return messageType
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param messageType $messageType
     * @return RequestFinancialOperationRequest
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * @return aditionalData
     */
    public function getAditionalData()
    {
        return $this->aditionalData;
    }

    /**
     * @param aditionalData $aditionalData
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
     * @return RequestFinancialOperationRequest
     */
    public function setAlias($alias)
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
     * @return RequestFinancialOperationRequest
     */
    public function setFinancialOperation($financialOperation)
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
     * @return RequestFinancialOperationRequest
     */
    public function setReferencedFinancialOperation($referencedFinancialOperation)
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
     * @return RequestFinancialOperationRequest
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
        return $this;
    }

    /**
     * @return messageProperties
     */
    public function getMessageProperties()
    {
        return $this->messageProperties;
    }

    /**
     * @param messageProperties $messageProperties
     * @return RequestFinancialOperationRequest
     */
    public function setMessageProperties($messageProperties)
    {
        $this->messageProperties = $messageProperties;
        return $this;
    }
}
