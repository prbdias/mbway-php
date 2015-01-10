<?php

class RequestFinancialOperation
{
    /**
     * @var RequestFinancialOperationRequest $arg0
     */
    protected $arg0 = null;

    /**
     * @param RequestFinancialOperationRequest $arg0
     */
    public function __construct($arg0)
    {
        $this->arg0 = $arg0;
    }

    /**
     * @return RequestFinancialOperationRequest
     */
    public function getArg0()
    {
        return $this->arg0;
    }

    /**
     * @param RequestFinancialOperationRequest $arg0
     * @return RequestFinancialOperation
     */
    public function setArg0($arg0)
    {
        $this->arg0 = $arg0;
        return $this;
    }
}
