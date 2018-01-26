<?php

namespace prbdias\mbway\FinancialOperation;

use prbdias\mbway\FinancialOperationInquiryRes;
use prbdias\mbway\OperationInformation;

class FinancialOperationStatusInquiryResult
{
    /**
     * @var OperationInformation
     */
    protected $operationInformation;

    /**
     * @var FinancialOperationInquiryRes[]
     */
    protected $referencedFinancialOperation;

    /**
     * @var string
     * @var string $statusCode
     */
    protected $statusCode;

    /**
     * @var dateTime
     * @var \DateTime $timestamp
     */
    protected $timestamp;

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->statusCode === '000' || $this->statusCode === '020';
    }

    /**
     * @return OperationInformation
     */
    public function getOperationInformation()
    {
        return $this->operationInformation;
    }

    /**
     * @param OperationInformation $operationInformation
     *
     * @return RequestFinancialOperationResult
     */
    public function setOperationInformation(OperationInformation $operationInformation)
    {
        $this->operationInformation = $operationInformation;

        return $this;
    }

    /**
     * @return FinancialOperationInquiryRes[]
     */
    public function getReferencedFinancialOperation()
    {
        return $this->referencedFinancialOperation;
    }

    /**
     * @param FinancialOperationInquiryRes[] $referencedFinancialOperation
     *
     * @return RequestFinancialOperationResult
     */
    public function setReferencedFinancialOperation($referencedFinancialOperation)
    {
        $this->referencedFinancialOperation = $referencedFinancialOperation;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     *
     * @return RequestFinancialOperationResult
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        if ($this->timestamp == null) {
            return;
        } else {
            return new \DateTime($this->timestamp);
        }
    }

    /**
     * @param \DateTime $timestamp
     *
     * @return RequestFinancialOperationResult
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);

        return $this;
    }
}
