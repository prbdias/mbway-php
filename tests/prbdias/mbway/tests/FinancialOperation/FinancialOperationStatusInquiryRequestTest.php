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

use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryRequest;

class FinancialOperationStatusInquiryRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return FinancialOperationStatusInquiryRequest
     */
    public function testConstructor()
    {
        $financialOperationStatusInquiryRequest = new FinancialOperationStatusInquiryRequest();

        $this->assertNull($financialOperationStatusInquiryRequest->getOperationInformation());
        $this->assertArrayNotHasKey(0, $financialOperationStatusInquiryRequest->getFinancialOperationInquiry());
        $this->assertNull($financialOperationStatusInquiryRequest->getMerchant());
        $this->assertNull($financialOperationStatusInquiryRequest->getMessageProperties());

        return $financialOperationStatusInquiryRequest;
    }

    /**
     * @depends testConstructor
     *
     * @param FinancialOperationStatusInquiryRequest $financialOperationStatusInquiryRequest
     */
    public function testGettersSetters(FinancialOperationStatusInquiryRequest $financialOperationStatusInquiryRequest)
    {
        // Configure the stubs
        $stubOperationInformation = $this->getMockBuilder('prbdias\mbway\OperationInformation')->getMock();
        $stubMerchant = $this->getMockBuilder('prbdias\mbway\Merchant')->getMock();
        $stubMessageProperties = $this->getMockBuilder('prbdias\mbway\MessageProperties')->getMock();
        $stubFinancialOperationReq[] = $this->getMockBuilder('prbdias\mbway\FinancialOperationInquiryReq')->getMock();

        $financialOperationStatusInquiryRequest->setFinancialOperationInquiry($stubFinancialOperationReq)
            ->setMerchant($stubMerchant)
            ->setMessageProperties($stubMessageProperties)
            ->setOperationInformation($stubOperationInformation);

        $this->assertSame($stubOperationInformation, $financialOperationStatusInquiryRequest->getOperationInformation());
        $this->assertSame($stubMerchant, $financialOperationStatusInquiryRequest->getMerchant());
        $this->assertSame($stubMessageProperties, $financialOperationStatusInquiryRequest->getMessageProperties());
        $this->assertSame($stubFinancialOperationReq, $financialOperationStatusInquiryRequest->getFinancialOperationInquiry());
    }
}
