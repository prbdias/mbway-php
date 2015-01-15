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


class IntegrationTestCase extends  \PHPUnit_Framework_TestCase{
    public function setUp()
    {
        if (MBWAY_RUN_INTEGRATION_TESTS === false) {
            $this->markTestSkipped('Integration tests are not enabled');
        }
    }
}
