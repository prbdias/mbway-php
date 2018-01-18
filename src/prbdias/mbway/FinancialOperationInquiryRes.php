<?php
namespace prbdias\mbway;

class FinancialOperationInquiryRes
{
    /**
     * @var string $merchantOprId
     */
    protected $merchantOprId;

    /**
     * @type dateTime
     * @var \DateTime $merchantOprTimestamp
     */
    protected $merchantOprTimestamp;

    /**
     * @var int $merchantOprSttCde
     */
    protected $merchantOprSttCde;

    /**
     * @type dateTime
     * @var \DateTime $merchantOprSttCdeTimestamp
     */
    protected $merchantOprSttCdeTimestamp;





    /**
     * @return string
     */
    public function getMerchantOprId()
    {
        return $this->merchantOprId;
    }

    /**
     * @param  string $merchantOprId
     * @return FinancialOperationInquiryRes
     */
    public function setMerchantOprId($merchantOprId)
    {
        $this->merchantOprId = $merchantOprId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMerchantOprTimestamp()
    {
        if ($this->merchantOprTimestamp == null) {
            return;
        } else {
            return new \DateTime($this->merchantOprTimestamp);
        }
    }

    /**
     * @param  \DateTime $merchantOprTimestamp
     * @return FinancialOperationInquiryRes
     */
    public function setTimestamp(\DateTime $merchantOprTimestamp)
    {
        $this->merchantOprTimestamp = $merchantOprTimestamp->format(\DateTime::ATOM);

        return $this;
    }

    /**
     * @return int
     */
    public function getMerchantOprSttCde()
    {
        return $this->merchantOprSttCde;
    }

    /**
     * @param  int $merchantOprSttCde
     * @return FinancialOperationInquiryRes
     */
    public function setMerchantOprSttCde($merchantOprSttCde)
    {
        $this->merchantOprSttCde = $merchantOprSttCde;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMerchantOprSttCdeTimestamp()
    {
        if ($this->merchantOprSttCdeTimestamp == null) {
            return;
        } else {
            return new \DateTime($this->merchantOprSttCdeTimestamp);
        }
    }

    /**
     * @param  \DateTime $merchantOprSttCdeTimestamp
     * @return FinancialOperationInquiryRes
     */
    public function setMerchantOprSttCdeTimestamp(\DateTime $merchantOprSttCdeTimestamp)
    {
        $this->merchantOprSttCdeTimestamp = $merchantOprSttCdeTimestamp->format(\DateTime::ATOM);

        return $this;
    }

}
