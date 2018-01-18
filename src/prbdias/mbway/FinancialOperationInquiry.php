<?php
namespace prbdias\mbway;

class FinancialOperationInquiry
{
    /**
     * @var string $merchantOprId
     */
    protected $merchantOprId;

    /**
     * @return string
     */
    public function getMerchantOprId()
    {
        return $this->merchantOprId;
    }

    /**
     * @param  string $merchantOprId
     * @return FinancialOperationInquiry
     */
    public function setMerchantOprId($merchantOprId)
    {
        $this->merchantOprId = $merchantOprId;

        return $this;
    }
}
