<?php

namespace prbdias\mbway\FinancialOperation;

class RequestFinancialOperationResponse
{
    /**
     * @var RequestFinancialOperationResult
     */
    protected $return;

    /**
     * @return RequestFinancialOperationResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param RequestFinancialOperationResult $return
     *
     * @return RequestFinancialOperationResponse
     */
    public function setReturn(RequestFinancialOperationResult $return)
    {
        $this->return = $return;

        return $this;
    }
}
