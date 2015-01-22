<?php
namespace prbdias\mbway;

/**
 * Class Alias
 * @package prbdias\mbway
 */
class Alias
{
    /**
     * Alias Type Codes
     */
    public static $CELLPHONE = "001";
    public static $EMAIL = "002";


    /**
     * @var string $aliasName
     */
    protected $aliasName;

    /**
     * @var string $aliasTypeCde
     */
    protected $aliasTypeCde;

    /**
     * @return string
     */
    public function getAliasName()
    {
        return $this->aliasName;
    }

    /**
     * Email or Cellphone(<country code>#<cellphone number>)
     * @param string $aliasName
     * @return Alias
     */
    public function setAliasName($aliasName)
    {
        $this->aliasName = $aliasName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAliasTypeCde()
    {
        return $this->aliasTypeCde;
    }

    /**
     * @param string $aliasTypeCde
     * @return Alias
     */
    public function setAliasTypeCde($aliasTypeCde)
    {
        $this->aliasTypeCde = $aliasTypeCde;
        return $this;
    }
}
