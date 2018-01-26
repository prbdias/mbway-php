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

use prbdias\mbway\FinancialOperation\RequestFinancialOperationResult;

class RequestFinancialOperationResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RequestFinancialOperationResult
     */
    public function testConstructor()
    {
        $financialOperationResult = new RequestFinancialOperationResult();

        // Configure the stub.
        $this->assertNull($financialOperationResult->getStatusCode());
        $this->assertNull($financialOperationResult->getTimestamp());
        $this->assertNull($financialOperationResult->getToken());
        $this->assertNull($financialOperationResult->getAmount());
        $this->assertNull($financialOperationResult->getCurrencyCode());
        $this->assertNull($financialOperationResult->getMerchantOperationID());

        return $financialOperationResult;
    }

    /**
     * @depends testConstructor
     *
     * @param RequestFinancialOperationResult $financialOperationResult
     */
    public function testGettersSetters(RequestFinancialOperationResult $financialOperationResult)
    {
        $datetime = date_create('2014-03-15');
        $financialOperationResult->setAmount(2)
            ->setCurrencyCode('USD')
            ->setMerchantOperationID('operationid')
            ->setStatusCode('statuscode')
            ->setTimestamp($datetime)
            ->setToken('token');

        $this->assertSame(2, $financialOperationResult->getAmount());
        $this->assertSame('USD', $financialOperationResult->getCurrencyCode());
        $this->assertSame('statuscode', $financialOperationResult->getStatusCode());
        $this->assertEquals($datetime, $financialOperationResult->getTimestamp());
        $this->assertSame('token', $financialOperationResult->getToken());
        $this->assertSame('operationid', $financialOperationResult->getMerchantOperationID());
    }
}
