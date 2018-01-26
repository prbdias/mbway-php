<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use prbdias\mbway\Alias\CreateMerchantAliasResult;
use prbdias\mbway\FinancialOperation\RequestFinancialOperationResult;
use prbdias\mbway\MBWayAsyncService;

require __DIR__.'/../vendor/autoload.php';

$asyncService = new MBWayAsyncService('http://merchanthost.com/');
//Check URL request to dispatch to the correct async service
if ($_SERVER['REQUEST_URI'] == '/CreateFinancialOperationAsyncResultService') {
    $asyncService->createFinancialOperationAsyncResultService(function (RequestFinancialOperationResult $result) {
        file_put_contents('financialoperation_callback.log', print_r($result, true));
    });
} elseif ($_SERVER['REQUEST_URI'] == '/CreateMerchantAliasAsyncResultService') {
    $asyncService->createMerchantAliasAsyncResultService(function (CreateMerchantAliasResult $result) {
        file_put_contents('merchantalias_callback.log', print_r($result, true));
    });
} else {
    die('Invalid request');
}
