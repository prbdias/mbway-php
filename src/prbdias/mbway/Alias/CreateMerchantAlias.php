<?php

namespace prbdias\mbway\Alias;

class CreateMerchantAlias
{
    /**
     * @var CreateMerchantAliasRequest
     */
    protected $arg0;

    /**
     * @return CreateMerchantAliasRequest
     */
    public function getArg0()
    {
        return $this->arg0;
    }

    /**
     * @param CreateMerchantAliasRequest $arg0
     *
     * @return CreateMerchantAlias
     */
    public function setArg0(CreateMerchantAliasRequest $arg0)
    {
        $this->arg0 = $arg0;

        return $this;
    }
}
