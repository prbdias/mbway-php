<?php

class RemoveMerchantAlias
{
    /**
     * @var removeMerchantAliasRequest $arg0
     */
    protected $arg0 = null;

    /**
     * @param removeMerchantAliasRequest $arg0
     */
    public function __construct($arg0)
    {
        $this->arg0 = $arg0;
    }

    /**
     * @return removeMerchantAliasRequest
     */
    public function getArg0()
    {
        return $this->arg0;
    }

    /**
     * @param removeMerchantAliasRequest $arg0
     * @return RemoveMerchantAlias
     */
    public function setArg0($arg0)
    {
        $this->arg0 = $arg0;
        return $this;
    }
}
