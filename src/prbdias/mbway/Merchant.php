<?php

class Merchant
{
    /**
     * @var iPAddress $iPAddress
     */
    protected $iPAddress = null;

    /**
     * @var posId $posId
     */
    protected $posId = null;

    /**
     * @param iPAddress $iPAddress
     * @param posId $posId
     */
    public function __construct($iPAddress, $posId)
    {
        $this->iPAddress = $iPAddress;
        $this->posId = $posId;
    }

    /**
     * @return iPAddress
     */
    public function getIPAddress()
    {
        return $this->iPAddress;
    }

    /**
     * @param iPAddress $iPAddress
     * @return Merchant
     */
    public function setIPAddress($iPAddress)
    {
        $this->iPAddress = $iPAddress;
        return $this;
    }

    /**
     * @return posId
     */
    public function getPosId()
    {
        return $this->posId;
    }

    /**
     * @param posId $posId
     * @return Merchant
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;
        return $this;
    }
}
