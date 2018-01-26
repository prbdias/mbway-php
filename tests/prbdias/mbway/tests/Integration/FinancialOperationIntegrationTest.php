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

use prbdias\mbway\Alias;
use prbdias\mbway\FinancialOperation;
use prbdias\mbway\FinancialOperation\RequestFinancialOperation;
use prbdias\mbway\FinancialOperation\RequestFinancialOperationRequest;
use prbdias\mbway\MBWayClient;
use prbdias\mbway\Merchant;
use prbdias\mbway\MessageProperties;

class FinancialOperationIntegrationTest extends IntegrationTestCase
{
    /**
     * @group integration
     * @dataProvider requestProvider
     *
     * @param RequestFinancialOperationRequest $request
     */
    public function testPurchase(RequestFinancialOperationRequest $request)
    {
        $oprid = uniqid();
        $amount = 70;
        $currency = MBWAY_CURRENCY_CODE;

        $test = new RequestFinancialOperation();
        $operation = new FinancialOperation();
        $operation->setAmount($amount)
            ->setCurrencyCode($currency)
            ->setMerchantOprId($oprid)
            ->setOperationTypeCode(FinancialOperation::PURCHASE);

        $request->setFinancialOperation($operation);

        $test->setArg0($request);
        $service = new MBWayClient($this->getConfig());
        $service->setSandbox(true);
        $response = $service->requestFinancialOperation($test);
        $return = $response->getReturn();

        $this->assertSame($amount, $return->getAmount());
        $this->assertSame($oprid, $return->getMerchantOperationID());
        $this->assertSame($currency, $return->getCurrencyCode());
        $this->assertTrue($return->isValid());
        $this->assertNotEmpty($return->getToken());
        $this->assertNotEmpty($return->getTimestamp());

        echo "PURCHASE MERCHANT OPERATION ID: {$oprid}".PHP_EOL;
    }

    /**
     * @group integration
     * @dataProvider requestProvider
     *
     * @param RequestFinancialOperationRequest $request
     */
    public function testPurchaseAuthorization(RequestFinancialOperationRequest $request)
    {
        $oprid = uniqid();
        $amount = 70;
        $currency = MBWAY_CURRENCY_CODE;

        $test = new RequestFinancialOperation();
        $operation = new FinancialOperation();
        $operation->setAmount($amount)
            ->setCurrencyCode($currency)
            ->setMerchantOprId($oprid)
            ->setOperationTypeCode(FinancialOperation::PURCHASE_AUTHORIZATION);

        $request->setFinancialOperation($operation);

        $test->setArg0($request);
        $service = new MBWayClient($this->getConfig());
        $service->setSandbox(true);
        $response = $service->requestFinancialOperation($test);
        $return = $response->getReturn();

        $this->assertSame($amount, $return->getAmount());
        $this->assertSame($oprid, $return->getMerchantOperationID());
        $this->assertSame($currency, $return->getCurrencyCode());
        $this->assertTrue($return->isValid());
        $this->assertNotEmpty($return->getToken());
        $this->assertNotEmpty($return->getTimestamp());

        echo "AUTHORIZATION MERCHANT OPERATION ID: {$oprid}".PHP_EOL;
    }

    /**
     * @group integration
     * @dataProvider requestProvider
     *
     * @param RequestFinancialOperationRequest $request
     */
    public function testAuthorizationCancellation(RequestFinancialOperationRequest $request)
    {
        if (MBWAY_MERCHANT_OPERATION_TO_CANCEL === '') {
            return $this->assertTrue(true);
        }

        $oprid = uniqid();
        $amount = 70;
        $currency = '9782';

        $test = new RequestFinancialOperation();

        $operation = new FinancialOperation();
        $operation->setAmount($amount)
            ->setCurrencyCode($currency)
            ->setMerchantOprId(MBWAY_MERCHANT_OPERATION_TO_CANCEL)
            ->setOperationTypeCode(FinancialOperation::PURCHASE_AUTHORIZATION);

        $operationCancellation = new FinancialOperation();
        $operationCancellation->setAmount($amount)
            ->setCurrencyCode($currency)
            ->setMerchantOprId($oprid)
            ->setOperationTypeCode(FinancialOperation::AUTHORIZATION_CANCEL);

        $request->setFinancialOperation($operationCancellation);
        $request->setReferencedFinancialOperation($operation);

        $test->setArg0($request);
        $service = new MBWayClient($this->getConfig());
        $service->setSandbox(true);
        $response = $service->requestFinancialOperation($test);
        $return = $response->getReturn();

        $this->assertSame($amount, $return->getAmount());
        $this->assertSame($oprid, $return->getMerchantOperationID());
        $this->assertSame($currency, $return->getCurrencyCode());
        $this->assertTrue($return->isValid());
        $this->assertNotEmpty($return->getTimestamp());
    }

    /**
     * @group integration
     * @dataProvider requestProvider
     *
     * @param RequestFinancialOperationRequest $request
     */
    public function testPurchaseAfterAuthorization(RequestFinancialOperationRequest $request)
    {
        if (MBWAY_MERCHANT_OPERATION_TO_PURCHASE_AFTER_AUTHORIZE === '') {
            return $this->assertTrue(true);
        }

        $oprid = uniqid();
        $amountAuthorized = 70;
        $amountToPurchase = 20;
        $currency = MBWAY_CURRENCY_CODE;

        $test = new RequestFinancialOperation();

        $operation = new FinancialOperation();
        $operation->setAmount($amountAuthorized)
            ->setCurrencyCode($currency)
            ->setMerchantOprId(MBWAY_MERCHANT_OPERATION_TO_PURCHASE_AFTER_AUTHORIZE)
            ->setOperationTypeCode(FinancialOperation::PURCHASE_AUTHORIZATION);

        $operationPurchaseAfterAuthorize = new FinancialOperation();
        $operationPurchaseAfterAuthorize->setAmount($amountToPurchase)
            ->setCurrencyCode($currency)
            ->setMerchantOprId($oprid)
            ->setOperationTypeCode(FinancialOperation::PURCHASE_AFTER_AUTHORIZATION);

        $request->setFinancialOperation($operationPurchaseAfterAuthorize);
        $request->setReferencedFinancialOperation($operation);

        $test->setArg0($request);
        $service = new MBWayClient($this->getConfig());
        $service->setSandbox(true);
        $response = $service->requestFinancialOperation($test);
        $return = $response->getReturn();

        $this->assertSame($amountToPurchase, $return->getAmount());
        $this->assertSame($oprid, $return->getMerchantOperationID());
        $this->assertSame($currency, $return->getCurrencyCode());
        $this->assertTrue($return->isValid());
        $this->assertNotEmpty($return->getTimestamp());
    }

    /**
     * @group integration
     *
     * @return array
     */
    public function requestProvider()
    {
        $request = new RequestFinancialOperationRequest();
        $alias = new Alias();
        $alias->setAliasName(MBWAY_ALIAS_TESTS)
            ->setAliasTypeCde(Alias::CELLPHONE);

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

        $request->setAditionalData('TESTE')
            ->setAlias($alias)
            ->setMerchant($merchant)
            ->setMessageProperties($messageProperties);

        return [
            [$request],
        ];
    }
}
