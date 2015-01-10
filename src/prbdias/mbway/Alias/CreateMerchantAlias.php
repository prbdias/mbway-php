<?php

class CreateMerchantAlias
{
    /**
     * @var createMerchantAliasRequest $arg0
     */
    protected $arg0 = null;

    /**
     * @param createMerchantAliasRequest $arg0
     */
    public function __construct($arg0)
    {
        $this->arg0 = $arg0;
    }

    /**
     * @return createMerchantAliasRequest
     */
    public function getArg0()
    {
        return $this->arg0;
    }

    /**
     * @param createMerchantAliasRequest $arg0
     * @return CreateMerchantAlias
     */
    public function setArg0($arg0)
    {
        $this->arg0 = $arg0;
        return $this;
    }
}
