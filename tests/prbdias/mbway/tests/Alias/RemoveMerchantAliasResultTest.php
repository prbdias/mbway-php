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

use prbdias\mbway\Alias\RemoveMerchantAliasResult;

class RemoveMerchantAliasResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RemoveMerchantAliasResult
     */
    public function testConstructor()
    {
        $merchantAliasResult = new RemoveMerchantAliasResult();

        // Configure the stub.
        $this->assertNull($merchantAliasResult->getAlias());
        $this->assertNull($merchantAliasResult->getStatusCode());
        $this->assertNull($merchantAliasResult->getTimestamp());

        return $merchantAliasResult;
    }

    /**
     * @depends testConstructor
     *
     * @param RemoveMerchantAliasResult $merchantAliasResult
     */
    public function testGettersSetters(RemoveMerchantAliasResult $merchantAliasResult)
    {
        $stubAlias = $this->getMockBuilder('prbdias\mbway\Alias')->getMock();

        $datetime = date_create('2014-03-15');
        $merchantAliasResult->setAlias($stubAlias)
            ->setStatusCode('statuscode')
            ->setTimestamp($datetime);

        $this->assertSame($stubAlias, $merchantAliasResult->getAlias());
        $this->assertSame('statuscode', $merchantAliasResult->getStatusCode());
        $this->assertEquals($datetime, $merchantAliasResult->getTimestamp());
    }
}
