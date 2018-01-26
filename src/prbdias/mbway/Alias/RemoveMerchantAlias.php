<?php

namespace prbdias\mbway\Alias;

class RemoveMerchantAlias
{
    /**
     * @var RemoveMerchantAliasRequest
     */
    protected $arg0;

    /**
     * @return RemoveMerchantAliasRequest
     */
    public function getArg0()
    {
        return $this->arg0;
    }

    /**
     * @param RemoveMerchantAliasRequest $arg0
     *
     * @return RemoveMerchantAlias
     */
    public function setArg0(RemoveMerchantAliasRequest $arg0)
    {
        $this->arg0 = $arg0;

        return $this;
    }
}
