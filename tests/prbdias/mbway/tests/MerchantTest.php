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

use prbdias\mbway\Merchant;

/**
 * Class MerchantTest.
 */
class MerchantTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return Merchant
     */
    public function testConstructor()
    {
        $merchant = new Merchant();

        $this->assertNull($merchant->getIPAddress());
        $this->assertNull($merchant->getPosId());

        return $merchant;
    }

    /**
     * @depends testConstructor
     *
     * @param Merchant $merchant
     */
    public function testGettersSetters(Merchant $merchant)
    {
        $merchant->setIPAddress('200.1.23.199');
        $merchant->setPosId('posid2');

        $this->assertSame($merchant->getIPAddress(), '200.1.23.199');
        $this->assertSame($merchant->getPosId(), 'posid2');
    }
}
