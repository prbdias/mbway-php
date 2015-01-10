<?php

class CreateMerchantAliasResult
{
    /**
     * @var Alias $alias
     */
    protected $alias = null;

    /**
     * @var operationId $operationId
     */
    protected $operationId = null;

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
     * @param Alias $alias
     * @param operationId $operationId
     * @param statusCode $statusCode
     * @param \DateTime $timestamp
     * @param string $token
     */
    public function __construct($alias, $operationId, $statusCode, \DateTime $timestamp, $token)
    {
        $this->alias = $alias;
        $this->operationId = $operationId;
        $this->statusCode = $statusCode;
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
        $this->token = $token;
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
     * @return CreateMerchantAliasResult
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return operationId
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * @param operationId $operationId
     * @return CreateMerchantAliasResult
     */
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;
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
     * @return CreateMerchantAliasResult
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
     * @return CreateMerchantAliasResult
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
     * @return CreateMerchantAliasResult
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
