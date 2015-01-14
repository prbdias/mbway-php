<?php
namespace prbdias\mbway\Alias;

class RemoveMerchantAliasResponse
{
    /**
     * @var RemoveMerchantAliasResult $return
     */
    protected $return;

    /**
     * @return RemoveMerchantAliasResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param RemoveMerchantAliasResult $return
     * @return RemoveMerchantAliasResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
