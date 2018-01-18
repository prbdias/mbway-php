<?php
namespace prbdias\mbway\FinancialOperation;

use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;
use prbdias\mbway\OperationInformation;
use prbdias\mbway\FinancialOperationInquiry;

class FinancialOperationStatusInquiryRequest
{
    /**
     * @var string $messageType
     */
    private $messageType;

    /**
     * @var OperationInformation $operationInformation
     */
    protected $operationInformation;
    /**
     * @var array $financialOperationInquiry
     */
    protected $financialOperationInquiry;

    /**
     * @var Merchant $merchant
     */
    protected $merchant;

    /**
     * @var MessageProperties $messageProperties
     */
    protected $messageProperties;

    public function __construct()
    {
        $this->messageType = 'N0004';
        $this->financialOperationInquiry=array();
    }

    /**
     * @return OperationInformation
     */
    public function getOperationInformation()
    {
        return $this->operationInformation;
    }

    /**
     * @param  OperationInformation $operationInformation
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
     * @param  array $financialOperationInquiry
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
     * @param  Merchant                         $merchant
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
     * @param  MessageProperties                $messageProperties
     * @return FinancialOperationStatusInquiryRequest
     */
    public function setMessageProperties(MessageProperties $messageProperties)
    {
        $this->messageProperties = $messageProperties;

        return $this;
    }
}
