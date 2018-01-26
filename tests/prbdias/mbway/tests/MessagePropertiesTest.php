<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace prbdias\mbway\tests;

use prbdias\mbway\MessageProperties;

/**
 * Class MessagePropertiesTest.
 */
class MessagePropertiesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return MessageProperties
     */
    public function testConstructor()
    {
        $messageProperties = new MessageProperties();
        $this->assertNull($messageProperties->getChannel());
        $this->assertNull($messageProperties->getApiVersion());
        $this->assertNull($messageProperties->getChannelTypeCode());
        $this->assertNull($messageProperties->getNetworkCode());
        $this->assertNull($messageProperties->getServiceType());
        $this->assertNull($messageProperties->getTimestamp());

        return $messageProperties;
    }

    /**
     * @depends testConstructor
     *
     * @param MessageProperties $messageProperties
     */
    public function testGettersSetters(MessageProperties $messageProperties)
    {
        $messageProperties->setChannel('channel2');
        $messageProperties->setApiVersion('apiversion2');
        $messageProperties->setChannelTypeCode('channeltypecode2');
        $messageProperties->setNetworkCode('networkcode2');
        $messageProperties->setServiceType('servicetype2');
        $datetime = date_create('2014-03-15');
        $messageProperties->setTimestamp($datetime);

        $this->assertSame($messageProperties->getChannel(), 'channel2');
        $this->assertSame($messageProperties->getApiVersion(), 'apiversion2');
        $this->assertSame($messageProperties->getChannelTypeCode(), 'channeltypecode2');
        $this->assertSame($messageProperties->getNetworkCode(), 'networkcode2');
        $this->assertSame($messageProperties->getServiceType(), 'servicetype2');
        $this->assertEquals($messageProperties->getTimestamp(), $datetime);
    }
}
