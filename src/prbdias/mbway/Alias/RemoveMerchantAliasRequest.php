<?php

namespace prbdias\mbway\Alias;

use prbdias\mbway\MessageProperties;

class RemoveMerchantAliasRequest
{
    /**
     * @var string
     */
    private $messageType;

    /**
     * @var Alias
     */
    protected $alias;

    /**
     * @var Merchant
     */
    protected $merchant;

    /**
     * @var MessageProperties
     */
    protected $messageProperties;

    public function __construct()
    {
        $this->messageType = 'N0002';
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
     * @return RemoveMerchantAliasRequest
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param Merchant $merchant
     *
     * @return RemoveMerchantAliasRequest
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;

        return $this;
    }

    /**
     * @return MessageProperties
     */
    public function getMessageProperties()
    {
        return $this->messageProperties;
    }

    /**
     * @param MessageProperties $messageProperties
     *
     * @return RemoveMerchantAliasRequest
     */
    public function setMessageProperties($messageProperties)
    {
        $this->messageProperties = $messageProperties;

        return $this;
    }
}
