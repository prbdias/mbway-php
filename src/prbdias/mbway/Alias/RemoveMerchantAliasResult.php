<?php

namespace prbdias\mbway\Alias;

use prbdias\mbway\Alias;

class RemoveMerchantAliasResult
{
    /**
     * @var Alias
     */
    protected $alias;

    /**
     * @var string
     */
    protected $statusCode;

    /**
     * @var \DateTime
     */
    protected $timestamp;

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
     * @return RemoveMerchantAliasResult
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

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
            return;
        } else {
            return new \DateTime($this->timestamp);
        }
    }

    /**
     * @param \DateTime $timestamp
     *
     * @return RemoveMerchantAliasResult
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);

        return $this;
    }
}
