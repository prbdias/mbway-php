<?php
namespace prbdias\mbway;

class FinancialOperation
{
    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var string $operationTypeCode
     */
    protected $operationTypeCode = null;

    /**
     * @var string $merchantOprId
     */
    protected $merchantOprId = null;

    /**
     * @param int $amount
     * @param string $currencyCode
     * @param string $operationTypeCode
     * @param string $merchantOprId
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
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return FinancialOperation
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationTypeCode()
    {
        return $this->operationTypeCode;
    }

    /**
     * @param string $operationTypeCode
     * @return FinancialOperation
     */
    public function setOperationTypeCode($operationTypeCode)
    {
        $this->operationTypeCode = $operationTypeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantOprId()
    {
        return $this->merchantOprId;
    }

    /**
     * @param string $merchantOprId
     * @return FinancialOperation
     */
    public function setMerchantOprId($merchantOprId)
    {
        $this->merchantOprId = $merchantOprId;
        return $this;
    }
}
