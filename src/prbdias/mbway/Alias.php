<?php
namespace prbdias\mbway;

class Alias
{
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
