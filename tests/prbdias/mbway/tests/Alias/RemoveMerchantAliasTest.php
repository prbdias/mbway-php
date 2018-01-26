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

use prbdias\mbway\Alias\RemoveMerchantAlias;

class RemoveMerchantAliasTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RemoveMerchantAlias
     */
    public function testConstructor()
    {
        $merchantAlias = new RemoveMerchantAlias();

        // Configure the stub.
        $this->assertNull($merchantAlias->getArg0());

        return $merchantAlias;
    }

    /**
     * @depends testConstructor
     *
     * @param RemoveMerchantAlias $merchantAlias
     */
    public function testGettersSetters(RemoveMerchantAlias $merchantAlias)
    {
        $stubAliasRequest = $this->getMockBuilder('prbdias\mbway\Alias\RemoveMerchantAliasRequest')->getMock();

        $merchantAlias->setArg0($stubAliasRequest);
        $this->assertSame($stubAliasRequest, $merchantAlias->getArg0());
    }
}
