<?php

namespace prbdias\mbway;

class OperationInformation
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
     * @return OperationInformation
     */
    public function setMerchantOprId($merchantOprId)
    {
        $this->merchantOprId = $merchantOprId;

        return $this;
    }
}
