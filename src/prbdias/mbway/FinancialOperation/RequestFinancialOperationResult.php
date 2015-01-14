<?php
namespace prbdias\mbway\FinancialOperation;

class RequestFinancialOperationResult
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
     * @var string $merchantOperationID
     */
    protected $merchantOperationID;

    /**
     * @var string $statusCode
     */
    protected $statusCode;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp;

    /**
     * @var string $token
     */
    protected $token;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return RequestFinancialOperationResult
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
     * @return RequestFinancialOperationResult
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantOperationID()
    {
        return $this->merchantOperationID;
    }

    /**
     * @param string $merchantOperationID
     * @return RequestFinancialOperationResult
     */
    public function setMerchantOperationID($merchantOperationID)
    {
        $this->merchantOperationID = $merchantOperationID;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return RequestFinancialOperationResult
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        if ($this->timestamp == null) {
            return null;
        } else {
            return \DateTime::createFromFormat(\DateTime::ATOM, $this->timestamp);
        }
    }

    /**
     * @param \DateTime $timestamp
     * @return RequestFinancialOperationResult
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return RequestFinancialOperationResult
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
