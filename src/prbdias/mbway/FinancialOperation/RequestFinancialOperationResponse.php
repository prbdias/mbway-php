<?php

class RequestFinancialOperationResponse
{
    /**
     * @var RequestFinancialOperationResult $return
     */
    protected $return = null;

    /**
     * @param RequestFinancialOperationResult $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return RequestFinancialOperationResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param RequestFinancialOperationResult $return
     * @return RequestFinancialOperationResponse
     */
    public function setReturn($return)
    {
        $this->return = $return;
        return $this;
    }
}
