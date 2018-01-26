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

use prbdias\mbway\FinancialOperation\RequestFinancialOperation;

class RequestFinancialOperationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RequestFinancialOperation
     */
    public function testConstructor()
    {
        $financialOperation = new RequestFinancialOperation();

        // Configure the stub.
        $this->assertNull($financialOperation->getArg0());

        return $financialOperation;
    }

    /**
     * @depends testConstructor
     *
     * @param RequestFinancialOperation $financialOperation
     */
    public function testGettersSetters(RequestFinancialOperation $financialOperation)
    {
        $stubFinancialOperationRequest = $this->getMockBuilder('prbdias\mbway\FinancialOperation\RequestFinancialOperationRequest')->getMock();

        $financialOperation->setArg0($stubFinancialOperationRequest);
        $this->assertSame($stubFinancialOperationRequest, $financialOperation->getArg0());
    }
}
