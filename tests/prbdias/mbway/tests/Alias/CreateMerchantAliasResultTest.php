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

use prbdias\mbway\Alias\CreateMerchantAliasResult;

class CreateMerchantAliasResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return CreateMerchantAliasResult
     */
    public function testConstructor()
    {
        $merchantAliasResult = new CreateMerchantAliasResult();

        // Configure the stub.
        $this->assertNull($merchantAliasResult->getAlias());
        $this->assertNull($merchantAliasResult->getOperationId());
        $this->assertNull($merchantAliasResult->getStatusCode());
        $this->assertNull($merchantAliasResult->getTimestamp());
        $this->assertNull($merchantAliasResult->getToken());

        return $merchantAliasResult;
    }

    /**
     * @depends testConstructor
     *
     * @param CreateMerchantAliasResult $merchantAliasResult
     */
    public function testGettersSetters(CreateMerchantAliasResult $merchantAliasResult)
    {
        $stubAlias = $this->getMockBuilder('prbdias\mbway\Alias')->getMock();

        $datetime = date_create('2014-03-15');
        $merchantAliasResult->setAlias($stubAlias)
            ->setOperationId('operationid')
            ->setStatusCode('statuscode')
            ->setTimestamp($datetime)
            ->setToken('token');

        $this->assertSame($stubAlias, $merchantAliasResult->getAlias());
        $this->assertSame('operationid', $merchantAliasResult->getOperationId());
        $this->assertSame('statuscode', $merchantAliasResult->getStatusCode());
        $this->assertEquals($datetime, $merchantAliasResult->getTimestamp());
        $this->assertSame('token', $merchantAliasResult->getToken());
    }
}
