<?php

class Alias
{
    /**
     * @var aliasName $aliasName
     */
    protected $aliasName = null;

    /**
     * @var aliasTypeCde $aliasTypeCde
     */
    protected $aliasTypeCde = null;

    /**
     * @param aliasName $aliasName
     * @param aliasTypeCde $aliasTypeCde
     */
    public function __construct($aliasName, $aliasTypeCde)
    {
        $this->aliasName = $aliasName;
        $this->aliasTypeCde = $aliasTypeCde;
    }

    /**
     * @return aliasName
     */
    public function getAliasName()
    {
        return $this->aliasName;
    }

    /**
     * @param aliasName $aliasName
     * @return Alias
     */
    public function setAliasName($aliasName)
    {
        $this->aliasName = $aliasName;
        return $this;
    }

    /**
     * @return aliasTypeCde
     */
    public function getAliasTypeCde()
    {
        return $this->aliasTypeCde;
    }

    /**
     * @param aliasTypeCde $aliasTypeCde
     * @return Alias
     */
    public function setAliasTypeCde($aliasTypeCde)
    {
        $this->aliasTypeCde = $aliasTypeCde;
        return $this;
    }
}
