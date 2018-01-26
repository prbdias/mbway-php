<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace prbdias\mbway\tests\Alias;

use prbdias\mbway\Alias\RemoveMerchantAliasRequest;

class RemoveMerchantAliasRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RemoveMerchantAliasRequest
     */
    public function testConstructor()
    {
        $merchantAliasRequest = new RemoveMerchantAliasRequest();

        // Configure the stub.
        $this->assertNull($merchantAliasRequest->getAlias());
        $this->assertNull($merchantAliasRequest->getMerchant());
        $this->assertNull($merchantAliasRequest->getMessageProperties());

        return $merchantAliasRequest;
    }

    /**
     * @depends testConstructor
     *
     * @param RemoveMerchantAliasRequest $merchantAliasRequest
     */
    public function testGettersSetters(RemoveMerchantAliasRequest $merchantAliasRequest)
    {
        $stubAlias = $this->getMockBuilder('prbdias\mbway\Alias')->getMock();
        $stubMerchant = $this->getMockBuilder('prbdias\mbway\Merchant')->getMock();
        $stubMessageProperties = $this->getMockBuilder('prbdias\mbway\MessageProperties')->getMock();

        $merchantAliasRequest->setAlias($stubAlias)
            ->setMerchant($stubMerchant)
            ->setMessageProperties($stubMessageProperties);

        $this->assertSame($stubAlias, $merchantAliasRequest->getAlias());
        $this->assertSame($stubMerchant, $merchantAliasRequest->getMerchant());
        $this->assertSame($stubMessageProperties, $merchantAliasRequest->getMessageProperties());
    }
}
