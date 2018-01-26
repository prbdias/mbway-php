<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace prbdias\mbway\AsyncService;

use prbdias\mbway\Alias\CreateMerchantAliasResult;

class MerchantAliasAsyncResult
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function merchantAliasResult($arg0)
    {
        $result = new CreateMerchantAliasResult();
        $result->setStatusCode($arg0->statusCode)
            ->setTimestamp(new \DateTime($arg0->timestamp))
            ->setToken($arg0->token);

        call_user_func($this->callback, $result);
    }
}
