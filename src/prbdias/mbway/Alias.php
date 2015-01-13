<?php
namespace prbdias\mbway;

class Alias
{
    /**
     * @var string $aliasName
     */
    protected $aliasName = null;

    /**
     * @var string $aliasTypeCde
     */
    protected $aliasTypeCde = null;

    /**
     * @param string $aliasName
     * @param string $aliasTypeCde
     */
    public function __construct($aliasName, $aliasTypeCde)
    {
        $this->aliasName = $aliasName;
        $this->aliasTypeCde = $aliasTypeCde;
    }

    /**
     * @return string
     */
    public function getAliasName()
    {
        return $this->aliasName;
    }

    /**
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
