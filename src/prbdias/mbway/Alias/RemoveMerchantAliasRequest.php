<?php

class RemoveMerchantAliasRequest
{
    /**
     * @var messageType $messageType
     */
    protected $messageType = null;

    /**
     * @var Alias $alias
     */
    protected $alias = null;

    /**
     * @var Merchant $merchant
     */
    protected $merchant = null;

    /**
     * @var messageProperties $messageProperties
     */
    protected $messageProperties = null;

    /**
     * @param messageType $messageType
     * @param Alias $alias
     * @param Merchant $merchant
     * @param messageProperties $messageProperties
     */
    public function __construct($messageType, $alias, $merchant, $messageProperties)
    {
        $this->messageType = $messageType;
        $this->alias = $alias;
        $this->merchant = $merchant;
        $this->messageProperties = $messageProperties;
    }

    /**
     * @return messageType
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param messageType $messageType
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
     * @return messageProperties
     */
    public function getMessageProperties()
    {
        return $this->messageProperties;
    }

    /**
     * @param messageProperties $messageProperties
     * @return RemoveMerchantAliasRequest
     */
    public function setMessageProperties($messageProperties)
    {
        $this->messageProperties = $messageProperties;
        return $this;
    }
}
