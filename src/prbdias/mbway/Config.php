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


class Config {

    private $sslCert;
    private $sslPass;

    function __construct($sslCert, $sslPass)
    {
        $this->sslCert = $sslCert;
        $this->sslPass = $sslPass;
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
     * @param mixed $sslCert
     * @return void
     */
    public function setSSLCert($sslCert)
    {
        $this->sslCert = $sslCert;
    }


    /**
     * @param mixed $sslPass
     * @return void
     */
    public function setSSLPass($sslPass)
    {
        $this->sslPass = $sslPass;
    }

}