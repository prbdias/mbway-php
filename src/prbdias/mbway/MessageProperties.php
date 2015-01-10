<?php

class MessageProperties
{
    /**
     * @var channel $channel
     */
    protected $channel = null;

    /**
     * @var apiVersion $apiVersion
     */
    protected $apiVersion = null;

    /**
     * @var channelTypeCode $channelTypeCode
     */
    protected $channelTypeCode = null;

    /**
     * @var networkCode $networkCode
     */
    protected $networkCode = null;

    /**
     * @var serviceType $serviceType
     */
    protected $serviceType = null;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @param channel $channel
     * @param apiVersion $apiVersion
     * @param channelTypeCode $channelTypeCode
     * @param networkCode $networkCode
     * @param serviceType $serviceType
     * @param \DateTime $timestamp
     */
    public function __construct($channel, $apiVersion, $channelTypeCode, $networkCode, $serviceType, \DateTime $timestamp)
    {
        $this->channel = $channel;
        $this->apiVersion = $apiVersion;
        $this->channelTypeCode = $channelTypeCode;
        $this->networkCode = $networkCode;
        $this->serviceType = $serviceType;
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
    }

    /**
     * @return channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param channel $channel
     * @return MessageProperties
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return apiVersion
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @param apiVersion $apiVersion
     * @return MessageProperties
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * @return channelTypeCode
     */
    public function getChannelTypeCode()
    {
        return $this->channelTypeCode;
    }

    /**
     * @param channelTypeCode $channelTypeCode
     * @return MessageProperties
     */
    public function setChannelTypeCode($channelTypeCode)
    {
        $this->channelTypeCode = $channelTypeCode;
        return $this;
    }

    /**
     * @return networkCode
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * @param networkCode $networkCode
     * @return MessageProperties
     */
    public function setNetworkCode($networkCode)
    {
        $this->networkCode = $networkCode;
        return $this;
    }

    /**
     * @return serviceType
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param serviceType $serviceType
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
