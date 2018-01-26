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

use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryResponse;

class FinancialOperationStatusInquiryResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return FinancialOperationStatusInquiryResponse
     */
    public function testConstructor()
    {
        $operationStatusInquiryResponse = new FinancialOperationStatusInquiryResponse();

        // Configure the stub.
        $this->assertNull($operationStatusInquiryResponse->getReturn());

        return $operationStatusInquiryResponse;
    }

    /**
     * @depends testConstructor
     *
     * @param FinancialOperationStatusInquiryResponse $operationStatusInquiryResponse
     */
    public function testGettersSetters(FinancialOperationStatusInquiryResponse $operationStatusInquiryResponse)
    {
        $stubResult = $this->getMockBuilder('prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryResult')->getMock();

        $operationStatusInquiryResponse->setReturn($stubResult);
        $this->assertSame($stubResult, $operationStatusInquiryResponse->getReturn());
    }
}
