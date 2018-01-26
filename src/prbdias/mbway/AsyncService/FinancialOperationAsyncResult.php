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

use prbdias\mbway\FinancialOperation\RequestFinancialOperationResult;

class FinancialOperationAsyncResult
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function financialOperationResult($arg0)
    {
        $result = new RequestFinancialOperationResult();
        $result->setAmount($arg0->amount)
            ->setCurrencyCode($arg0->currencyCode)
            ->setMerchantOperationID($arg0->merchantOperationID)
            ->setStatusCode($arg0->statusCode)
            ->setTimestamp(new \DateTime($arg0->timestamp))
            ->setToken($arg0->token);

        call_user_func($this->callback, $result);
    }
}
