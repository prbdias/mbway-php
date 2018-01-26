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

use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryResult;

class FinancialOperationStatusInquiryResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return FinancialOperationStatusInquiryResult
     */
    public function testConstructor()
    {
        $financialOperationResult = new FinancialOperationStatusInquiryResult();

        // Configure the stub.
        $this->assertNull($financialOperationResult->getOperationInformation());
        $this->assertNull($financialOperationResult->getReferencedFinancialOperation());
        $this->assertNull($financialOperationResult->getStatusCode());
        $this->assertNull($financialOperationResult->getTimestamp());

        return $financialOperationResult;
    }

    /**
     * @depends testConstructor
     *
     * @param FinancialOperationStatusInquiryResult $financialOperationStatusInquiryResult
     */
    public function testGettersSetters(FinancialOperationStatusInquiryResult $financialOperationStatusInquiryResult)
    {
        $datetime = date_create('2014-03-15');
        $stubOperationInformation = $this->getMockBuilder('prbdias\mbway\OperationInformation')->getMock();
        $stubReferencedFinancialOperation[] = $this->getMockBuilder('prbdias\mbway\FinancialOperationInquiryRes')->getMock();

        $financialOperationStatusInquiryResult->setOperationInformation($stubOperationInformation)
            ->setReferencedFinancialOperation($stubReferencedFinancialOperation)
            ->setStatusCode('statuscode')
            ->setTimeStamp($datetime);

        $this->assertSame($stubOperationInformation, $financialOperationStatusInquiryResult->getOperationInformation());
        $this->assertSame($stubReferencedFinancialOperation, $financialOperationStatusInquiryResult->getReferencedFinancialOperation());
        $this->assertSame('statuscode', $financialOperationStatusInquiryResult->getStatusCode());
        $this->assertEquals($datetime, $financialOperationStatusInquiryResult->getTimestamp());
    }
}
