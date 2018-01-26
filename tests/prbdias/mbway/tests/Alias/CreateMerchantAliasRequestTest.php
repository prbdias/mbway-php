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

use prbdias\mbway\Alias\CreateMerchantAliasRequest;

class CreateMerchantAliasRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return CreateMerchantAliasRequest
     */
    public function testConstructor()
    {
        $merchantAliasRequest = new CreateMerchantAliasRequest();

        // Configure the stub.
        $this->assertNull($merchantAliasRequest->getAlias());
        $this->assertNull($merchantAliasRequest->getMerchant());
        $this->assertNull($merchantAliasRequest->getMessageProperties());
        $this->assertNull($merchantAliasRequest->getNewAlias());

        return $merchantAliasRequest;
    }

    /**
     * @depends testConstructor
     *
     * @param CreateMerchantAliasRequest $merchantAliasRequest
     */
    public function testGettersSetters(CreateMerchantAliasRequest $merchantAliasRequest)
    {
        $stubAlias = $this->getMockBuilder('prbdias\mbway\Alias')->getMock();
        $stubNewAlias = $this->getMockBuilder('prbdias\mbway\Alias')->getMock();
        $stubMerchant = $this->getMockBuilder('prbdias\mbway\Merchant')->getMock();
        $stubMessageProperties = $this->getMockBuilder('prbdias\mbway\MessageProperties')->getMock();

        $merchantAliasRequest->setAlias($stubAlias)
        ->setMerchant($stubMerchant)
        ->setMessageProperties($stubMessageProperties)
        ->setNewAlias($stubNewAlias);

        $this->assertSame($stubAlias, $merchantAliasRequest->getAlias());
        $this->assertSame($stubMerchant, $merchantAliasRequest->getMerchant());
        $this->assertSame($stubMessageProperties, $merchantAliasRequest->getMessageProperties());
        $this->assertSame($stubNewAlias, $merchantAliasRequest->getNewAlias());
    }
}
