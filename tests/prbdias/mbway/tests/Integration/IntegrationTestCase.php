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

use prbdias\mbway\Config;

class IntegrationTestCase extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (MBWAY_RUN_INTEGRATION_TESTS === false) {
            $this->markTestSkipped('Integration tests are not enabled');
        }
    }

    public function getConfig()
    {
        return new Config(MBWAY_SSL_CERT_PATH, MBWAY_SSL_CERT_PASS, MBWAY_ASYNC_SERVICE_MERCHANT_ALIAS, MBWAY_ASYNC_SERVICE_FINANCIAL_OPERATION, MBWAY_CONFIG_MERCHANT_POSID, MBWAY_CONFIG_MERCHANT_IP);
    }
}
