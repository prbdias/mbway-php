<?php

class CreateMerchantAliasRequest
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
     * @var Alias $newAlias
     */
    protected $newAlias = null;

    /**
     * @param messageType $messageType
     * @param Alias $alias
     * @param Merchant $merchant
     * @param messageProperties $messageProperties
     * @param Alias $newAlias
     */
    public function __construct($messageType, $alias, $merchant, $messageProperties, $newAlias)
    {
        $this->messageType = $messageType;
        $this->alias = $alias;
        $this->merchant = $merchant;
        $this->messageProperties = $messageProperties;
        $this->newAlias = $newAlias;
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
     * @return CreateMerchantAliasRequest
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
     * @return CreateMerchantAliasRequest
     */
    public function setMessageProperties($messageProperties)
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
    public function setNewAlias($newAlias)
    {
        $this->newAlias = $newAlias;
        return $this;
    }
}
