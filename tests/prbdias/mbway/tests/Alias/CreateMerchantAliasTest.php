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

use prbdias\mbway\Alias\CreateMerchantAlias;

class CreateMerchantAliasTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return CreateMerchantAlias
     */
    public function testConstructor()
    {
        $merchantAlias = new CreateMerchantAlias();

        // Configure the stub.
        $this->assertNull($merchantAlias->getArg0());

        return $merchantAlias;
    }

    /**
     * @depends testConstructor
     *
     * @param CreateMerchantAlias $merchantAlias
     */
    public function testGettersSetters(CreateMerchantAlias $merchantAlias)
    {
        $stubAliasRequest = $this->getMockBuilder('prbdias\mbway\Alias\CreateMerchantAliasRequest')->getMock();

        $merchantAlias->setArg0($stubAliasRequest);
        $this->assertSame($stubAliasRequest, $merchantAlias->getArg0());
    }
}
