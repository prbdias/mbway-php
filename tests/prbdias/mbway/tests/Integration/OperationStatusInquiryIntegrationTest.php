<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace prbdias\mbway\tests\Integration;

use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiry;
use prbdias\mbway\FinancialOperation\FinancialOperationStatusInquiryRequest;
use prbdias\mbway\FinancialOperationInquiryReq;
use prbdias\mbway\MBWayClient;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;
use prbdias\mbway\OperationInformation;

class OperationStatusInquiryIntegrationTest extends IntegrationTestCase
{
    /**
     * @group integration
     * @dataProvider requestStatusInquiryProvider
     *
     * @param FinancialOperationStatusInquiryRequest $request
     */
    public function testOperationStatusInquiry(FinancialOperationStatusInquiryRequest $request)
    {
        if (MBWAY_MERCHANT_OPERATION_INQUIRY === '') {
            return $this->assertTrue(true);
        }

        $oprid = uniqid();

        $operationInformation = new OperationInformation();
        $operationInformation->setMerchantOprId($oprid);

        $financialOperationInquiry1 = new FinancialOperationInquiryReq();
        $financialOperationInquiry1->setMerchantOprId(MBWAY_MERCHANT_OPERATION_INQUIRY);

        $financialOperationInquiry = [];
        $financialOperationInquiry[] = $financialOperationInquiry1;

        $request->setOperationInformation($operationInformation)
            ->setFinancialOperationInquiry($financialOperationInquiry);

        $test = new FinancialOperationStatusInquiry();

        $test->setArg0($request);
        $service = new MBWayClient($this->getConfig());
        $service->setSandbox(true);
        $response = $service->financialOperationStatusInquiry($test);
        $return = $response->getReturn();

        $this->assertSame($oprid, $return->getOperationInformation()->getMerchantOprId());
        $this->assertTrue($return->isValid());
        $this->assertArrayHasKey(0, $return->getReferencedFinancialOperation());
        $this->assertNotEmpty($return->getTimestamp());

        echo 'STATUS OF OPERATIONS: '.print_r($return->getReferencedFinancialOperation(), true).PHP_EOL;
    }

    /**
     * @group integration
     *
     * @return array
     */
    public function requestStatusInquiryProvider()
    {
        $request = new FinancialOperationStatusInquiryRequest();

        $merchant = new Merchant();
        $merchant->setIPAddress($this->getConfig()->getMerchantIP())
            ->setPosId($this->getConfig()->getMerchantPosId());

        $messageProperties = new MessageProperties();
        $messageProperties->setApiVersion('1')
            ->setChannel('01')
            ->setChannelTypeCode('VPOS')
            ->setNetworkCode('MULTIB')
            ->setServiceType('01')
            ->setTimestamp(date_create('2017-10-04'));

        $request->setMerchant($merchant)
            ->setMessageProperties($messageProperties);

        return [
            [$request],
        ];
    }
}
