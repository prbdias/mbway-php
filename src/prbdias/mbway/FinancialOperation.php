<?php
namespace prbdias\mbway;

class FinancialOperation
{
    /**
     * @var int $amount
     */
    protected $amount;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode;

    /**
     * @var string $operationTypeCode
     */
    protected $operationTypeCode;

    /**
     * @var string $merchantOprId
     */
    protected $merchantOprId;

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
