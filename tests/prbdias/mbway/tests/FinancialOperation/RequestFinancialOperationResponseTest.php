<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace prbdias\mbway\tests\FinancialOperation;

use prbdias\mbway\FinancialOperation\RequestFinancialOperationResponse;

class RequestFinancialOperationResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RequestFinancialOperationResponse
     */
    public function testConstructor()
    {
        $financialOperationResponse = new RequestFinancialOperationResponse();

        // Configure the stub.
        $this->assertNull($financialOperationResponse->getReturn());

        return $financialOperationResponse;
    }

    /**
     * @depends testConstructor
     *
     * @param RequestFinancialOperationResponse $financialOperationResponse
     */
    public function testGettersSetters(RequestFinancialOperationResponse $financialOperationResponse)
    {
        $stubAliasResult = $this->getMockBuilder('prbdias\mbway\FinancialOperation\RequestFinancialOperationResult')->getMock();

        $financialOperationResponse->setReturn($stubAliasResult);
        $this->assertSame($stubAliasResult, $financialOperationResponse->getReturn());
    }
}
