<?php
namespace prbdias\mbway\FinancialOperation;

use prbdias\mbway\Alias;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;
use prbdias\mbway\FinancialOperation;

class RequestFinancialOperationRequest
{
    /**
     * @var string $messageType
     */
    protected $messageType;

    /**
     * @var string $aditionalData
     */
    protected $aditionalData;

    /**
     * @var Alias $alias
     */
    protected $alias;

    /**
     * @var FinancialOperation $financialOperation
     */
    protected $financialOperation;

    /**
     * @var FinancialOperation $referencedFinancialOperation
     */
    protected $referencedFinancialOperation;

    /**
     * @var Merchant $merchant
     */
    protected $merchant;

    /**
     * @var MessageProperties $messageProperties
     */
    protected $messageProperties;

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     * @return RequestFinancialOperationRequest
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
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
     * @return RequestFinancialOperationRequest
     */
    public function setMessageProperties(MessageProperties $messageProperties)
    {
        $this->messageProperties = $messageProperties;
        return $this;
    }
}
