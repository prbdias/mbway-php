<?php
/*
 * This file is part of the mbway-php package.
 *
 * (c) Paulo Dias <https://github.com/prbdias/mbway-php>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace prbdias\mbway;

class Config
{
    /**
     * @var string
     */
    private $sslCert;
    /**
     * @var string
     */
    private $sslPass;
    /**
     * @var string
     */
    private $merchantAliasAsyncServiceUrl;
    /**
     * @var string
     */
    private $financialOperationAsyncServiceUrl;

    public function __construct($sslCert, $sslPass, $merchantAliasAsyncServiceUrl, $financialOperationAsyncServiceUrl)
    {
        $this->sslCert = $sslCert;
        $this->sslPass = $sslPass;
        $this->merchantAliasAsyncServiceUrl = $merchantAliasAsyncServiceUrl;
        $this->financialOperationAsyncServiceUrl = $financialOperationAsyncServiceUrl;
    }

    /**
     * @return string
     */
    public function getSSLCert()
    {
        return $this->sslCert;
    }

    /**
     * @return string
     */
    public function getSSLPass()
    {
        return $this->sslPass;
    }

    /**
     * @return string
     */
    public function getMerchantAliasAsyncService()
    {
        return $this->merchantAliasAsyncServiceUrl;
    }

    /**
     * @return string
     */
    public function getFinancialOperationAsyncService()
    {
        return $this->financialOperationAsyncServiceUrl;
    }

    /**
     * @param  string $sslCert
     * @return void
     */
    public function setSSLCert($sslCert)
    {
        $this->sslCert = $sslCert;
    }

    /**
     * @param  string $sslPass
     * @return void
     */
    public function setSSLPass($sslPass)
    {
        $this->sslPass = $sslPass;
    }

    /**
     * @param  string $merchantAliasAsyncServiceUrl
     * @return void
     */
    public function setMerchantAliasAsyncService($merchantAliasAsyncServiceUrl)
    {
        $this->merchantAliasAsyncServiceUrl = $merchantAliasAsyncServiceUrl;
    }

    /**
     * @param  string $financialOperationAsyncServiceUrl
     * @return void
     */
    public function setFinancialOperationAsyncService($financialOperationAsyncServiceUrl)
    {
        $this->financialOperationAsyncServiceUrl = $financialOperationAsyncServiceUrl;
    }
}
