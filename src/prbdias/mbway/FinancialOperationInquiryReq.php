<?php

namespace prbdias\mbway;

class FinancialOperationInquiryReq
{
    /**
     * @var string
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
     * @param string $merchantOprId
     *
     * @return FinancialOperationInquiryRes
     */
    public function setMerchantOprId($merchantOprId)
    {
        $this->merchantOprId = $merchantOprId;

        return $this;
    }
}
