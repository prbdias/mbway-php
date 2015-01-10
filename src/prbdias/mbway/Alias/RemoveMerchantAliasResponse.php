<?php

class RemoveMerchantAliasResponse
{
    /**
     * @var removeMerchantAliasResult $return
     */
    protected $return = null;

    /**
     * @param removeMerchantAliasResult $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return removeMerchantAliasResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param removeMerchantAliasResult $return
     * @return RemoveMerchantAliasResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
