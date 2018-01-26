<?php

namespace prbdias\mbway\FinancialOperation;

class RequestFinancialOperation
{
    /**
     * @var RequestFinancialOperationRequest
     */
    protected $arg0;

    /**
     * @return RequestFinancialOperationRequest
     */
    public function getArg0()
    {
        return $this->arg0;
    }

    /**
     * @param RequestFinancialOperationRequest $arg0
     *
     * @return RequestFinancialOperation
     */
    public function setArg0(RequestFinancialOperationRequest $arg0)
    {
        $this->arg0 = $arg0;

        return $this;
    }
}
