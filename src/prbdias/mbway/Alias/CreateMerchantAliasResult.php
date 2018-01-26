<?php

namespace prbdias\mbway\Alias;

use prbdias\mbway\Alias;

class CreateMerchantAliasResult
{
    /**
     * @var Alias
     */
    protected $alias;

    /**
     * @var string
     */
    protected $operationId;

    /**
     * @var string
     */
    protected $statusCode;

    /**
     * @var \DateTime
     */
    protected $timestamp;

    /**
     * @var string
     */
    protected $token;

    /**
     * Check if result from webservice is valid.
     *
     * @return bool
     */
    public function isValid()
    {
        return $this->statusCode === '000';
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
     *
     * @return CreateMerchantAliasResult
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * @param string $operationId
     *
     * @return CreateMerchantAliasResult
     */
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;

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
            return;
        } else {
            $date = new \DateTime();

            return $date->setTimestamp(strtotime($this->timestamp));
        }
    }

    /**
     * @param \DateTime $timestamp
     *
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
     *
     * @return CreateMerchantAliasResult
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
