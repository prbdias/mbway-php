<?php
namespace prbdias\mbway\Alias;

class CreateMerchantAliasResponse
{
    /**
     * @var CreateMerchantAliasResult $return
     */
    protected $return;

    /**
     * @return CreateMerchantAliasResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param CreateMerchantAliasResult $return
     * @return CreateMerchantAliasResponse
     */
    public function setReturn(CreateMerchantAliasResult $return)
    {
        $this->return = $return;
        return $this;
    }
}
