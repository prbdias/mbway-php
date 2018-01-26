<?php

namespace prbdias\mbway\FinancialOperation;

use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;
use prbdias\mbway\OperationInformation;

class FinancialOperationStatusInquiryRequest
{
    /**
     * @var string
     */
    private $messageType;

    /**
     * @var OperationInformation
     */
    protected $operationInformation;
    /**
     * @var FinancialOperationInquiryReq[]
     */
    protected $financialOperationInquiry;

    /**
     * @var Merchant
     */
    protected $merchant;

    /**
     * @var MessageProperties
     */
    protected $messageProperties;

    public function __construct()
    {
        $this->messageType = 'N0004';
        $this->financialOperationInquiry = [];
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
     * @return FinancialOperationStatusInquiryRequest
     */
    public function setOperationInformation(OperationInformation $operationInformation)
    {
        $this->operationInformation = $operationInformation;

        return $this;
    }

    /**
     * @return array
     */
    public function getFinancialOperationInquiry()
    {
        return $this->financialOperationInquiry;
    }

    /**
     * @param array $financialOperationInquiry
     *
     * @return FinancialOperationStatusInquiryRequest
     */
    public function setFinancialOperationInquiry($financialOperationInquiry)
    {
        $this->financialOperationInquiry = $financialOperationInquiry;

        return $this;
    }

    /**
     * @return Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param Merchant $merchant
     *
     * @return FinancialOperationStatusInquiryRequest
     */
    public function setMerchant(Merchant $merchant)
    {
        $this->merchant = $merchant;

        return $this;
    }

    /**
     * @return MessageProperties
     */
    public function getMessageProperties()
    {
        return $this->messageProperties;
    }

    /**
     * @param MessageProperties $messageProperties
     *
     * @return FinancialOperationStatusInquiryRequest
     */
    public function setMessageProperties(MessageProperties $messageProperties)
    {
        $this->messageProperties = $messageProperties;

        return $this;
    }
}
