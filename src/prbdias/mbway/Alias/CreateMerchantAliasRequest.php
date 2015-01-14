<?php
namespace prbdias\mbway\Alias;

use prbdias\mbway\Alias;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;

class CreateMerchantAliasRequest
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
     * @var Alias $newAlias
     */
    protected $newAlias;

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     * @return CreateMerchantAliasRequest
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
     * @return CreateMerchantAliasRequest
     */
    public function setAlias(Alias $alias)
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
     * @return CreateMerchantAliasRequest
     */
    public function setMerchant(Merchant $merchant)
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
     * @return CreateMerchantAliasRequest
     */
    public function setMessageProperties(MessageProperties $messageProperties)
    {
        $this->messageProperties = $messageProperties;
        return $this;
    }

    /**
     * @return Alias
     */
    public function getNewAlias()
    {
        return $this->newAlias;
    }

    /**
     * @param Alias $newAlias
     * @return CreateMerchantAliasRequest
     */
    public function setNewAlias(Alias $newAlias)
    {
        $this->newAlias = $newAlias;
        return $this;
    }
}
