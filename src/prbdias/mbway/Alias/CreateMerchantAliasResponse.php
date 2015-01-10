<?php

class CreateMerchantAliasResponse
{
    /**
     * @var createMerchantAliasResult $return
     */
    protected $return = null;

    /**
     * @param createMerchantAliasResult $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return createMerchantAliasResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param createMerchantAliasResult $return
     * @return CreateMerchantAliasResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
