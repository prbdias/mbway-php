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

use prbdias\mbway\Alias\RemoveMerchantAliasResponse;

class RemoveMerchantAliasResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RemoveMerchantAliasResponse
     */
    public function testConstructor()
    {
        $merchantAliasResponse = new RemoveMerchantAliasResponse();

        // Configure the stub.
        $this->assertNull($merchantAliasResponse->getReturn());

        return $merchantAliasResponse;
    }

    /**
     * @depends testConstructor
     *
     * @param RemoveMerchantAliasResponse $merchantAliasResponse
     */
    public function testGettersSetters(RemoveMerchantAliasResponse $merchantAliasResponse)
    {
        $stubAliasResult = $this->getMockBuilder('prbdias\mbway\Alias\RemoveMerchantAliasResult')->getMock();

        $merchantAliasResponse->setReturn($stubAliasResult);
        $this->assertSame($stubAliasResult, $merchantAliasResponse->getReturn());
    }
}
