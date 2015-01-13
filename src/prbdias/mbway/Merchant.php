<?php
namespace prbdias\mbway;

class Merchant
{
    /**
     * @var string $iPAddress
     */
    protected $iPAddress = null;

    /**
     * @var string $posId
     */
    protected $posId = null;

    /**
     * @param string $iPAddress
     * @param string $posId
     */
    public function __construct($iPAddress, $posId)
    {
        $this->iPAddress = $iPAddress;
        $this->posId = $posId;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->iPAddress;
    }

    /**
     * @param string $iPAddress
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
     * @return Merchant
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;
        return $this;
    }
}
