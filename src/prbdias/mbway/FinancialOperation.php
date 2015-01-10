<?php

class FinancialOperation
{
    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @var currencyCode $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var operationTypeCode $operationTypeCode
     */
    protected $operationTypeCode = null;

    /**
     * @var merchantOprId $merchantOprId
     */
    protected $merchantOprId = null;

    /**
     * @param int $amount
     * @param currencyCode $currencyCode
     * @param operationTypeCode $operationTypeCode
     * @param merchantOprId $merchantOprId
     */
    public function __construct($amount, $currencyCode, $operationTypeCode, $merchantOprId)
    {
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->operationTypeCode = $operationTypeCode;
        $this->merchantOprId = $merchantOprId;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return FinancialOperation
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return currencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param currencyCode $currencyCode
     * @return FinancialOperation
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return operationTypeCode
     */
    public function getOperationTypeCode()
    {
        return $this->operationTypeCode;
    }

    /**
     * @param operationTypeCode $operationTypeCode
     * @return FinancialOperation
     */
    public function setOperationTypeCode($operationTypeCode)
    {
        $this->operationTypeCode = $operationTypeCode;
        return $this;
    }

    /**
     * @return merchantOprId
     */
    public function getMerchantOprId()
    {
        return $this->merchantOprId;
    }

    /**
     * @param merchantOprId $merchantOprId
     * @return FinancialOperation
     */
    public function setMerchantOprId($merchantOprId)
    {
        $this->merchantOprId = $merchantOprId;
        return $this;
    }
}
