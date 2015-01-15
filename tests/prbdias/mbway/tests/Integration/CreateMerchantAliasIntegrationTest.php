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

class CreateMerchantAliasIntegrationTest extends IntegrationTestCase {

    /**
     * @group integration
     */
    public function testCallMerchantAliasCreation()
    {
        /* Creating the WebService main object */
        $test = new CreateMerchantAlias();
        /* Creating the WebService message object */
        $testArgument = new CreateMerchantAliasRequest();
        /* Setting the parameters */
        $testAlias = new Alias();
        $testAlias->setAliasName("customer@test.com");
        $testAlias->setAliasTypeCde("002");
        $testArgument->setAlias($testAlias);
        $testMerchant = new Merchant();
        $testMerchant->setIPAddress("255.255.255.255");
        $testMerchant->setPosId("200");
        $testArgument->setMerchant($testMerchant);
        $testMsgProps = new MessageProperties();
        $testMsgProps->setChannel("P");
        $testMsgProps->setChannelTypeCode("01");
        $testMsgProps->setNetworkCode("01");
        $merchantTimestamp = date_create("2014-09-28");
        $testMsgProps->setTimestamp($merchantTimestamp);
        $testMsgProps->setServiceType("001");
        $testMsgProps->setApiVersion("1");
        $testArgument->setMessageProperties($testMsgProps);
        $testArgument->setMessageType("N0001");
        $testNewAlias = new Alias();
        $testNewAlias->setAliasName("alias@mystore.com");
        $testNewAlias->setAliasTypeCde("003");
        $testArgument->setNewAlias($testNewAlias);
        $test->setArg0($testArgument);
        $service = new MBWayClient();
        $service->createMerchantAlias($test);
    }
}
