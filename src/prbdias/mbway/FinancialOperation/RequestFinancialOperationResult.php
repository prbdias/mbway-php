<?php

class RequestFinancialOperationResult
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
     * @var merchantOperationID $merchantOperationID
     */
    protected $merchantOperationID = null;

    /**
     * @var statusCode $statusCode
     */
    protected $statusCode = null;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @param int $amount
     * @param string $currencyCode
     * @param merchantOperationID $merchantOperationID
     * @param statusCode $statusCode
     * @param \DateTime $timestamp
     * @param string $token
     */
    public function __construct($amount, $currencyCode, $merchantOperationID, $statusCode, \DateTime $timestamp, $token)
    {
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
        $this->merchantOperationID = $merchantOperationID;
        $this->statusCode = $statusCode;
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
        $this->token = $token;
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
     * @return merchantOperationID
     */
    public function getMerchantOperationID()
    {
        return $this->merchantOperationID;
    }

    /**
     * @param merchantOperationID $merchantOperationID
     * @return RequestFinancialOperationResult
     */
    public function setMerchantOperationID($merchantOperationID)
    {
        $this->merchantOperationID = $merchantOperationID;
        return $this;
    }

    /**
     * @return statusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param statusCode $statusCode
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
