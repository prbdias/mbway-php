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

class FinancialOperationIntegrationTest extends IntegrationTestCase {

    /**
     * @group integration
     */
    public function testCallFinancialOperation()
    {
        return true;
        $test = new RequestFinancialOperation();
        $request = new RequestFinancialOperationRequest();
        $operation = new FinancialOperation();
        $operation->setAmount(20)
            ->setCurrencyCode("9782")
            ->setMerchantOprId("22546")
            ->setOperationTypeCode(FinancialOperation::$PURCHASE);

        $alias = new Alias();
        $alias->setAliasName("351#964661733")
            ->setAliasTypeCde("001");

        $merchant = new Merchant();
        $merchant->setIPAddress(MBWAY_CONFIG_MERCHANT_IP)
            ->setPosId(MBWAY_CONFIG_MERCHANT_POSID);

        $messageProperties = new MessageProperties();
        $messageProperties->setApiVersion("1")
            ->setChannel("01")
            ->setChannelTypeCode("VPOS")
            ->setNetworkCode("MULTIB")
            ->setServiceType("01")
            ->setTimestamp(date_create("2014-10-04"));

        $request->setAditionalData("TESTE")
            ->setFinancialOperation($operation)
            ->setAlias($alias)
            ->setMerchant($merchant)
            ->setMessageProperties($messageProperties)
            ->setMessageType("N0003");


        $test->setArg0($request);
        $service = new MBWayClient($this->getConfig());
        $response = $service->requestFinancialOperation($test);
        $return = $response->getReturn();
        $this->assertSame(20, $return->getAmount());
        var_dump($return);
    }
}
