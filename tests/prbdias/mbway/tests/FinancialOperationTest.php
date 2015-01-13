<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace prbdias\mbway\tests;


use prbdias\mbway\FinancialOperation;

/**
 * Class FinancialOperationTest
 * @package prbdias\mbway\tests
 */
class FinancialOperationTest extends \PHPUnit_Framework_TestCase {
    /**
     * @return FinancialOperation
     */
    public function testConstructor()
    {
        $financialOperation = new FinancialOperation(1, 'EUR', 'operationtypecode', 'merchantoprid');

        $this->assertSame($financialOperation->getAmount(), 1);
        $this->assertSame($financialOperation->getCurrencyCode(), 'EUR');
        $this->assertSame($financialOperation->getOperationTypeCode(), 'operationtypecode');
        $this->assertSame($financialOperation->getMerchantOprId(), 'merchantoprid');

        return $financialOperation;
    }

    /**
     * @depends testConstructor
     *
     * @param FinancialOperation $financialOperation
     */
    public function testGettersSetters(FinancialOperation $financialOperation)
    {
        $financialOperation->setAmount(2);
        $financialOperation->setCurrencyCode('USD');
        $financialOperation->setOperationTypeCode('operationtypecode2');
        $financialOperation->setMerchantOprId('merchantoprid2');

        $this->assertSame($financialOperation->getAmount(), 2);
        $this->assertSame($financialOperation->getCurrencyCode(), 'USD');
        $this->assertSame($financialOperation->getOperationTypeCode(), 'operationtypecode2');
        $this->assertSame($financialOperation->getMerchantOprId(), 'merchantoprid2');
    }
}
