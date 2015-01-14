<?php
namespace prbdias\mbway\Alias;

use prbdias\mbway\MessageProperties;

class RemoveMerchantAliasRequest
{
    /**
     * @var string $messageType
     */
    protected $messageType;

    /**
     * @var Alias $alias
     */
    protected $alias;

    /**
     * @var Merchant $merchant
     */
    protected $merchant;

    /**
     * @var MessageProperties $messageProperties
     */
    protected $messageProperties;

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     * @return RemoveMerchantAliasRequest
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
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
     * @return RemoveMerchantAliasRequest
     */
    public function setMessageProperties($messageProperties)
    {
        $this->messageProperties = $messageProperties;
        return $this;
    }
}
