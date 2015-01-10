<?php

class RemoveMerchantAliasResult
{
    /**
     * @var Alias $alias
     */
    protected $alias = null;

    /**
     * @var statusCode $statusCode
     */
    protected $statusCode = null;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @param Alias $alias
     * @param statusCode $statusCode
     * @param \DateTime $timestamp
     */
    public function __construct($alias, $statusCode, \DateTime $timestamp)
    {
        $this->alias = $alias;
        $this->statusCode = $statusCode;
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
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
     * @return RemoveMerchantAliasResult
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
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
     * @return RemoveMerchantAliasResult
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
     * @return RemoveMerchantAliasResult
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
        return $this;
    }
}
