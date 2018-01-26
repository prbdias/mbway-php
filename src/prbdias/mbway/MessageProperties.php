<?php

namespace prbdias\mbway;

class MessageProperties
{
    /**
     * @var string
     */
    protected $channel;

    /**
     * @var string
     */
    protected $apiVersion;

    /**
     * @var string
     */
    protected $channelTypeCode;

    /**
     * @var string
     */
    protected $networkCode;

    /**
     * @var string
     */
    protected $serviceType;

    /**
     * @var \DateTime
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
     *
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
     *
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
     *
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
     *
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
     *
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
            return;
        } else {
            return new \DateTime($this->timestamp);
        }
    }

    /**
     * @param \DateTime $timestamp
     *
     * @return MessageProperties
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);

        return $this;
    }
}
