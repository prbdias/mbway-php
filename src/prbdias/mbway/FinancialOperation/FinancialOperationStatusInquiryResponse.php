<?php

namespace prbdias\mbway\FinancialOperation;

class FinancialOperationStatusInquiryResponse
{
    /**
     * @var FinancialOperationStatusInquiryResult
     */
    protected $return;

    /**
     * @return FinancialOperationStatusInquiryResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param FinancialOperationStatusInquiryResult $return
     *
     * @return FinancialOperationStatusInquiryResponse
     */
    public function setReturn(FinancialOperationStatusInquiryResult $return)
    {
        $this->return = $return;

        return $this;
    }
}
