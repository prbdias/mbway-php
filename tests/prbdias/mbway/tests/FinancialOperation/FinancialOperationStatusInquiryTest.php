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

use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiry;

class FinancialOperationStatusInquiryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return FinancialOperationStatusInquiry
     */
    public function testConstructor()
    {
        $financialOperationStatusInquiry = new FinancialOperationStatusInquiry();

        // Configure the stub.
        $this->assertNull($financialOperationStatusInquiry->getArg0());

        return $financialOperationStatusInquiry;
    }

    /**
     * @depends testConstructor
     *
     * @param FinancialOperationStatusInquiry $financialOperationStatusInquiry
     */
    public function testGettersSetters(FinancialOperationStatusInquiry $financialOperationStatusInquiry)
    {
        $stubFinancialOperationStatusInquiryRequest = $this->getMockBuilder('prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryRequest')->getMock();

        $financialOperationStatusInquiry->setArg0($stubFinancialOperationStatusInquiryRequest);
        $this->assertSame($stubFinancialOperationStatusInquiryRequest, $financialOperationStatusInquiry->getArg0());
    }
}
