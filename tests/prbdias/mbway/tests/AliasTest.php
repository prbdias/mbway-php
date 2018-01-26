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

use prbdias\mbway\Alias;

/**
 * Class AliasTest.
 */
class AliasTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return Alias
     */
    public function testConstructor()
    {
        $alias = new Alias();

        $this->assertNull($alias->getAliasName());
        $this->assertNull($alias->getAliasTypeCde());

        return $alias;
    }

    /**
     * @depends testConstructor
     *
     * @param Alias $alias
     */
    public function testGettersSetters(Alias $alias)
    {
        $alias->setAliasName('aliasname2');
        $alias->setAliasTypeCde('aliastypecode2');

        $this->assertSame($alias->getAliasName(), 'aliasname2');
        $this->assertSame($alias->getAliasTypeCde(), 'aliastypecode2');
    }
}
