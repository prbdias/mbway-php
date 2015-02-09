<?php
namespace prbdias\mbway;

/**
 * Class FinancialOperation
 * @package prbdias\mbway
 */
class FinancialOperation
{
    /**
     * FinancialOperation Type Codes
     */
    public static $PURCHASE = "022";
    public static $RETURN = "023";
    public static $PURCHASE_AUTHORIZATION = "024";
    public static $PURCHASE_AFTER_AUTHORIZATION = "025";
    public static $AUTHORIZATION_CANCEL = "026";
    public static $ANNULMENT = "048";

    /**
     * @var int $amount
     */
    protected $amount;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode;

    /**
     * 022 – Compra
     * 023 – Devolução
     * 024 – Autorização de compra
     * 025 – Compra após autorização
     * 026 – Cancelamento de autorização
     * 048 – Anulação
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
     * @param  int                $amount
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
     * @param  string             $currencyCode
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
     * @param  string             $operationTypeCode
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
     * @param  string             $merchantOprId
     * @return FinancialOperation
     */
    public function setMerchantOprId($merchantOprId)
    {
        $this->merchantOprId = $merchantOprId;

        return $this;
    }
}
