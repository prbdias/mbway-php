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

use prbdias\mbway\FinancialOperation\RequestFinancialOperationRequest;

class RequestFinancialOperationRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return RequestFinancialOperationRequest
     */
    public function testConstructor()
    {
        $financialOperationRequest = new RequestFinancialOperationRequest();

        // Configure the stub.
        $this->assertNull($financialOperationRequest->getAlias());
        $this->assertNull($financialOperationRequest->getMerchant());
        $this->assertNull($financialOperationRequest->getMessageProperties());
        $this->assertNull($financialOperationRequest->getAditionalData());
        $this->assertNull($financialOperationRequest->getFinancialOperation());
        $this->assertNull($financialOperationRequest->getReferencedFinancialOperation());

        return $financialOperationRequest;
    }

    /**
     * @depends testConstructor
     *
     * @param RequestFinancialOperationRequest $financialOperationRequest
     */
    public function testGettersSetters(RequestFinancialOperationRequest $financialOperationRequest)
    {
        $stubAlias = $this->getMockBuilder('prbdias\mbway\Alias')->getMock();
        $stubMerchant = $this->getMockBuilder('prbdias\mbway\Merchant')->getMock();
        $stubMessageProperties = $this->getMockBuilder('prbdias\mbway\MessageProperties')->getMock();
        $stubFinancialOperation = $this->getMockBuilder('prbdias\mbway\FinancialOperation')->getMock();
        $stubReferencedFinancialOperation = $this->getMockBuilder('prbdias\mbway\FinancialOperation')->getMock();

        $financialOperationRequest->setAlias($stubAlias)
            ->setMerchant($stubMerchant)
            ->setMessageProperties($stubMessageProperties)
            ->setAditionalData('aditionaldata')
            ->setFinancialOperation($stubFinancialOperation)
            ->setReferencedFinancialOperation($stubReferencedFinancialOperation);

        $this->assertSame($stubAlias, $financialOperationRequest->getAlias());
        $this->assertSame($stubMerchant, $financialOperationRequest->getMerchant());
        $this->assertSame($stubMessageProperties, $financialOperationRequest->getMessageProperties());
        $this->assertSame($stubFinancialOperation, $financialOperationRequest->getFinancialOperation());
        $this->assertSame($stubReferencedFinancialOperation, $financialOperationRequest->getReferencedFinancialOperation());
    }
}
