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

use prbdias\mbway\Alias\CreateMerchantAliasResponse;

class CreateMerchantAliasResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return CreateMerchantAliasResponse
     */
    public function testConstructor()
    {
        $merchantAliasResponse = new CreateMerchantAliasResponse();

        // Configure the stub.
        $this->assertNull($merchantAliasResponse->getReturn());

        return $merchantAliasResponse;
    }

    /**
     * @depends testConstructor
     *
     * @param CreateMerchantAliasResponse $merchantAliasResponse
     */
    public function testGettersSetters(CreateMerchantAliasResponse $merchantAliasResponse)
    {
        $stubAliasResult = $this->getMockBuilder('prbdias\mbway\Alias\CreateMerchantAliasResult')->getMock();

        $merchantAliasResponse->setReturn($stubAliasResult);
        $this->assertSame($stubAliasResult, $merchantAliasResponse->getReturn());
    }
}
