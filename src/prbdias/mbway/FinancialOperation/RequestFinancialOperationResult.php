<?php

namespace prbdias\mbway\FinancialOperation;

class RequestFinancialOperationResult
{
    /**
     * @var int
     * @var int $amount
     */
    protected $amount;

    /**
     * @var string
     * @var string $currencyCode
     */
    protected $currencyCode;

    /**
     * @var string
     * @var string $merchantOperationID
     */
    protected $merchantOperationID;

    /**
     * @var string
     * @var string $statusCode
     */
    protected $statusCode;

    /**
     * @var dateTime
     * @var \DateTime $timestamp
     */
    protected $timestamp;

    /**
     * @var string
     * @var string $token
     */
    protected $token;

    /**
     * Check if result from webservice is valid.
     *
     * @return bool
     */
    public function isValid()
    {
        return $this->statusCode === '000' || $this->statusCode === '020';
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
     *
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
     *
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
     *
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
     *
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
            return;
        } else {
            return new \DateTime($this->timestamp);
        }
    }

    /**
     * @param \DateTime $timestamp
     *
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
     *
     * @return RequestFinancialOperationResult
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
