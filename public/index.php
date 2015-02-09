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

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require __DIR__.'/../vendor/autoload.php';

#file_put_contents('globals.log', print_r($GLOBALS, true));

try {
    if($_SERVER['REQUEST_URI'] == '/CreateFinancialOperationAsyncResultService') {
        MBWayAsyncService::createFinancialOperationAsyncResultService(function (RequestFinancialOperationResult $result) {
            file_put_contents('financialoperation_callback.log', print_r($result, true));
        });
    }
    elseif($_SERVER['REQUEST_URI'] == '/CreateMerchantAliasAsyncResultService'){
        MBWayAsyncService::createMerchantAliasAsyncResultService(function(CreateMerchantAliasResult $result){
            file_put_contents('merchantalias_callback.log', print_r($result, true));
        });
    }
    else die('Invalid request');
}
catch(Exception $e){
    file_put_contents('error.log', print_r($e, true));
}