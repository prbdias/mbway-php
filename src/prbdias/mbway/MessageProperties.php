<?php
namespace prbdias\mbway;

class MessageProperties
{
    /**
     * @var string $channel
     */
    protected $channel;

    /**
     * @var string $apiVersion
     */
    protected $apiVersion;

    /**
     * @var string $channelTypeCode
     */
    protected $channelTypeCode;

    /**
     * @var string $networkCode
     */
    protected $networkCode;

    /**
     * @var string $serviceType
     */
    protected $serviceType;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp;

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     * @return MessageProperties
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @param string $apiVersion
     * @return MessageProperties
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannelTypeCode()
    {
        return $this->channelTypeCode;
    }

    /**
     * @param string $channelTypeCode
     * @return MessageProperties
     */
    public function setChannelTypeCode($channelTypeCode)
    {
        $this->channelTypeCode = $channelTypeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * @param string $networkCode
     * @return MessageProperties
     */
    public function setNetworkCode($networkCode)
    {
        $this->networkCode = $networkCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return MessageProperties
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        if ($this->timestamp == null) {
            return null;
        } else {
            return \DateTime::createFromFormat(\DateTime::ATOM, $this->timestamp);
        }
    }

    /**
     * @param \DateTime $timestamp
     * @return MessageProperties
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
        return $this;
    }
}
