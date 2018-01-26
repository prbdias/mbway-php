<?php

namespace prbdias\mbway;

class Merchant
{
    /**
     * @var string
     */
    protected $iPAddress;

    /**
     * @var string
     */
    protected $posId;

    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->iPAddress;
    }

    /**
     * @param string $iPAddress
     *
     * @return Merchant
     */
    public function setIPAddress($iPAddress)
    {
        $this->iPAddress = $iPAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPosId()
    {
        return $this->posId;
    }

    /**
     * @param string $posId
     *
     * @return Merchant
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;

        return $this;
    }
}
